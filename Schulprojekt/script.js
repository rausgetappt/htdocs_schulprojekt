// Flatpickr.js: Integration für Datumsauswahl und Terminüberprüfung
document.addEventListener('DOMContentLoaded', function() {
  // Initialisierung des Datepickers
  flatpickr("#terminZeit", {
    enableTime: true,                // Uhrzeit-Auswahl aktivieren
    dateFormat: "Y-m-d H:i",         // Datum und Uhrzeit im gewünschten Format
    time_24hr: true,                 // 24-Stunden-Format
    minDate: "today",                // Keine Termine in der Vergangenheit
    minuteIncrement: 30,             // Zeit in 30-Minuten-Schritten
    disable: [
      function(date) {
        const day = date.getDay();
        return day === 0 || day === 6; // Wochenende (Samstag und Sonntag) deaktivieren
      }
    ],
    onReady: function(selectedDates, dateStr, instance) {
      const holidays = ["2024-12-25", "2024-12-26", "2024-01-01"];
      instance.set("disable", [
        ...instance.config.disable,
        function(date) {
          return holidays.includes(date.toISOString().split('T')[0]);
        }
      ]);
    },
    onChange: function(selectedDates, dateStr, instance) {
      const time = selectedDates[0]?.getHours() || 0;
      const isValidTime = time >= 8 && time < 18;
      if (!isValidTime) {
        alert("Bitte wählen Sie eine Zeit zwischen 08:00 und 18:00 Uhr.");
        instance.clear();
      }
    }
  });
  

  // Funktion: Ruft deaktivierte Termine und Feiertage vom Server ab
  function fetchDisabledDates() {
    fetch("fetch_disabled_dates.php")
      .then(response => response.json())
      .then(data => {
        const disabledDates = data.disabledDates || []; // Geladene Termine/Feiertage
        flatpickr("#terminZeit").set("disable", disabledDates);
      })
      .catch(error => console.error("Fehler beim Laden der deaktivierten Daten:", error));
  }

  // Formular-Submit-Handler
  document.getElementById('submitBtn').addEventListener('click', function(event) {
    event.preventDefault();

    // Überprüft die ausgewählte Zeit auf Kollision
    const selectedDate = document.getElementById('terminZeit').value;
    if (!selectedDate) {
      alert("Bitte wählen Sie ein Datum und eine Uhrzeit aus.");
      return;
    }

    // Prüfung auf Terminverfügbarkeit
    fetch("check_availability.php", {
      method: "POST",
      headers: { "Content-Type": "application/json" },
      body: JSON.stringify({ appointment_date: selectedDate }),
    })
      .then(response => response.json())
      .then(data => {
        if (data.available) {
          alert("Der Termin ist verfügbar. Sie können das Formular absenden.");
          document.getElementById('formular').submit(); // Formular absenden
        } else {
          alert("Dieser Termin ist leider bereits vergeben. Bitte wählen Sie einen anderen.");
        }
      })
      .catch(error => console.error("Fehler bei der Verfügbarkeitsprüfung:", error));
  });
});

// Button für Scroll nach oben
const goTopBtn = document.querySelector('.go-top-btn');

window.addEventListener('scroll', function() {
  if (window.scrollY > 200) {
    goTopBtn.style.display = "flex";
  } else {
    goTopBtn.style.display = "none";
  }
});

goTopBtn.addEventListener('click', function() {
  window.scrollTo({ top: 0, behavior: "smooth" });
});

// Funktion: Benachrichtigung anzeigen/schließen
function showNotification() {
  document.getElementById('notification').style.display = 'block';
}

function closeNotification() {
  document.getElementById('notification').style.display = 'none';
}

showNotification();



function submitToFormSubmit(event) {
  event.preventDefault(); // Standard-Formular-Submission verhindern

  // Formulardaten erfassen
  const form = document.getElementById('myForm');
  const formData = new FormData(form);

  // Erste Anfrage: Daten an `insert.php` senden
  fetch(form.action, {
    method: form.method,
    body: formData
  })
    .then(response => {
      if (response.ok) {
        console.log("Daten erfolgreich in die Datenbank eingespeist.");
      } else {
        throw new Error("Fehler beim Speichern der Daten in die Datenbank.");
      }
    })
    .catch(error => console.error(error));

  // Zweite Anfrage: Daten an `formsubmit.co` senden
  fetch("https://formsubmit.co/firefamix@gmail.com", {
    method: "POST",
    body: formData
  })
    .then(response => {
      if (response.ok) {
        alert("Daten erfolgreich gesendet!");
      } else {
        throw new Error("Fehler beim Senden der Daten an formsubmit.co.");
      }
    })
    .catch(error => console.error(error));
}


$( "submitBtn" ).on( "click", function() {
  event.preventDefault(); // Standard-Formular-Submission verhindern

  // Formulardaten erfassen
  const form = document.getElementById('myForm');
  const formData = new FormData(form);

  // Erste Anfrage: Daten an insert.php senden
  fetch(form.action, {
    method: form.method,
    body: formData
  })
    .then(response => {
      if (response.ok) {
        console.log("Daten erfolgreich in die Datenbank eingespeist.");
      } else {
        throw new Error("Fehler beim Speichern der Daten in die Datenbank.");
      }
    })
    .catch(error => console.error(error));

  // Zweite Anfrage: Daten an formsubmit.co senden
  fetch("https://formsubmit.co/firefamix@gmail.com", {
    method: "POST",
    body: formData
  })
    .then(response => {
      if (response.ok) {
        alert("Daten erfolgreich gesendet!");
      } else {
        throw new Error("Fehler beim Senden der Daten an formsubmit.co.");
      }
    })
    .catch(error => console.error(error));
});