// Button um nach oben zu scrollen

// Sucht nach dem Element mit der Klasse go-top-btn und speichere es in der Variable goTopBtn
const goTopBtn = document.querySelector('.go-top-btn');

// Wenn die Seite gescrollt wird, ruft die Funktion 'checkHeight' auf
window.addEventListener('scroll', checkHeight);


// Die Funktion überprüft die Scrollhöhe und zeigt oder versteckt den go-top-btn (Pfeil nach oben Button) je nach Bedingung
function checkHeight() {
  if (window.scrollY > 200) {
    // Zeigt den go-top-btn(Pfeil nach oben Button) an, wenn die Scrollhöhe größer als 200 ist
    goTopBtn.style.display = "flex";
  } else {
    // Versteckt den go-top-btn (Pfeil nach oben Button), wenn die Scrollhöhe 200 oder weniger ist
    goTopBtn.style.display = "none"; 
  }
}

// Fügt einen Event-Listener hinzu, der das Scrollen zur oberen Position der Webseite ermöglicht, wenn der go-top-btn (Pfeil nach oben Button) geklickt wird
goTopBtn.addEventListener('click', () => {
  window.scrollTo({
    top: 0,
    behavior: "smooth" // Scrollt sanft nach oben zur Webseite
  });
});


document.addEventListener('DOMContentLoaded', function() {
  document.getElementById('submitBtn').addEventListener('click', function(event) {
    event.preventDefault();

    // Liest die Werte aus den Kontaktformularfeldern aus
    var name = document.getElementById('nachname').value;
    var email = document.getElementById('emailadresse').value;
    var message = document.getElementById('anliegen').value;
    var messages = document.getElementById('messages');

    // Setzt die Fehler- und Erfolgsmeldungen zurück
    messages.innerHTML = ''; 

    // Die Variable stellt fest, ob ein Fehler aufgetreten ist
    var hasError = false; 
    // Array wird zur Speicherung von Fehlermeldungen verwendet
    var errors = []; 

    // Überprüft die Eingaben des Patienten in den Formularfeldern auf Richtigkeit
    if (name === '') {
      errors.push('Ihren Nachnamen');
      hasError = true; 
    }

    if (email === '') {
      errors.push('Ihre E-Mail-Adresse'); 
      hasError = true; 
    } else if (email.indexOf('@') === -1) {
      errors.push('eine gültige E-Mail-Adresse');
      hasError = true; 
    }

    if (message === '') {
      errors.push('ein Anliegen'); 
      hasError = true; 
    }

    // Zeigt dem Patienten Fehlermeldungen an
    if (hasError) {
      var errorMessage = 'Bitte geben Sie ' + errors.join(' und ') + ' ein.'; 
      var errorElement = document.createElement('p'); 
      errorElement.textContent = errorMessage; 
      errorElement.className = 'error';
      messages.appendChild(errorElement);
      return;
    }

    // Zeigt dem Patienten eine Erfolgsmeldung an
    var successElement = document.createElement('p'); 
    successElement.textContent = 'Ihre Nachricht wurde erfolgreich gesendet.'; 
    successElement.className = 'success'; 
    messages.appendChild(successElement);

    // Setze das Formular zurück
    document.getElementById('nachname').value = ''; 
    document.getElementById('vorname').value = '';
    document.getElementById('emailadresse').value = '';
    document.getElementById('telefonnummer').value = '';
    document.getElementById('fachbereich').value = 'Kardiologie'; 
    document.getElementById('terminZeit').value = ''; 
    document.getElementById('versicherungsart').value = 'Gesetzlich'; 
    document.getElementById('krankenkassenNr').value = ''; 
    document.getElementById('anliegen').value = ''; 
  });
});



// Abschnitt für die Anzeige der Benachrichtigung für die Patienten

// Bezieht sich auf das Element mit der ID 'notification'
const notification = document.getElementById('notification');


// Diese Funktion zeigt die Benachtrigung für die Patienten an
function showNotification() {
  // Indem die display-Eigenschaft auf block gesetzt wird, wird die Benachtrigung dem Patienten angezeigt
  notification.style.display = 'block'; 
}

// Diese Funktion ermöglicht es die Benachtrigung zu schließen
// Indem die display-Eigenschaft auf none gesetzt wird, wird die Benachtrigung geschlossen
function closeNotification() {
  notification.style.display = 'none'; 
}
// Zeigt die Informationsbenachtrigung dem Patienten an
showNotification(); 





