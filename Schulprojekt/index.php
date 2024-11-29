<!DOCTYPE html>
<html lang="de">
  <!-- Kopfbereich des HTML-Dokuments -->
  <head>
    <!-- Zeichensatz wird auf UTF-8 gesetzt -->
    <meta charset="UTF-8" />
    <!-- Kompatibilität mit unterschiedlichen Browsern sicherstellen -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Responsive Darstellung der Website für unterschiedliche Geräte -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Titel der Webseite -->
    <title>Medizinisches Zentrum Kassel</title>
    <!-- Verknüpfung mit den CSS-Stylesheets -->
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/navigation.css" />
    <link rel="stylesheet" href="css/showcase.css" />
    <link rel="stylesheet" href="css/ueberuns.css" />
    <link rel="stylesheet" href="css/fachrichtungen.css" />
    <link rel="stylesheet" href="css/aerzte.css" />
    <link rel="stylesheet" href="css/rezensionen.css" />
    <link rel="stylesheet" href="css/anfahrt.css" />
    <link rel="stylesheet" href="css/kontakt.css" />
  </head>

  <!-- Hauptinhalt des HTML-Dokuments -->
  <body>
    <!-- Benachrichtigung für die Patienten -->
    <div class="notification" id="notification">
      <div class="notification-content">
        <!-- Schaltfläche zum Schließen der Benachrichtigung -->
        <button class="close-btn" onclick="closeNotification()">X</button>
        <!-- Text der Benachrichtigung -->
        <p>
          Aufgrund hoher Infektionsgefahr bitten wir Sie, beim Betreten der Praxis bei Erkältungssymptomen eine FFP2-Maske zu tragen. <br />
          Vielen Dank für Ihr Verständnis.
        </p>
      </div>
    </div>

    <!-- Button zum Scrollen nach oben -->
    <button class="go-top-btn">
      <!-- Buttondarstellung -->
      <img src="/media/button icon.png" alt="arrow up" />
    </button>

    <!-- JavaScript wird eingebunden -->
    <script src="script.js"></script>

    <!-- Navigation der Webseite -->
    <nav class="navbar">
      <div class="navbar-container container">
        <!-- Checkbox zur Steuerung der mobilen Navigation -->
        <input type="checkbox" name="" id="" />
        <!-- Hamburger-Menü Bereich für die Nutzung bei mobilen Geräten -->
        <div class="hamburger-lines">
          <span class="line line1"></span>
          <span class="line line2"></span>
          <span class="line line3"></span>
        </div>

        <!-- Navigationsbereich -->
        <ul class="menu-items">
          <li><a href="#home">Home</a></li>
          <li><a href="#about">Über uns</a></li>
          <li><a href="#fachrichtungen">Fachrichtungen</a></li>
          <li><a href="#ärzte">Ärzte</a></li>
          <li><a href="#rezensionen">Rezensionen</a></li>
          <li><a href="#anfahrt">Anfahrt</a></li>
          <li><a href="#contact">Kontakt</a></li>
        </ul>

        <!-- Logo für die Webseite -->
        <h1 class="logo">MZ|KS</h1>
      </div>
    </nav>

    <!-- Showcase-Bereich -->
    <section class="showcase-area" id="showcase">
      <div class="showcase-container">
        <!-- Haupttitel auf der Startseite -->
        <h1 class="home-title" id="home">In unseren Händen sind Sie gut aufgehoben</h1>
        <p>Mit Herz und Kompetenz für Ihr Wohl</p>
        <!-- Button, das den Patienten zum Kontaktformular navigiert -->
        <a href="#contact" class="button btn-primary">Kontaktieren Sie uns</a>
      </div>
    </section>

    <!-- Über uns Bereich -->
    <section id="about">
      <!--Container für den Abschnitt Über uns -->
      <div class="about-wrapper container">
        <!--Container für den Textinhalt-->
        <div class="about-text">
          <!--Kleine Überschrift  Über uns-->
          <p class="small">Über uns</p>
          <!--Hauptüberschrift-->
          <h2>Medizinische Spitzenversorgung im Zentrum von Kassel</h2>
          <!--Detaillierte Textinhalt-->
          <p>
            Das medizinische Zentrum in Kassel wurde 2002 von Bayram Murat Yasamis gegründet.
            Seit seiner Gründung bieten wir ein breites Spektrum an fachkompetenten und fürsorglichen
            Behandlungen an. Unser Leistungsspektrum umfasst die Kardiologie, die Augenheilkunde und
            die Neurologie. Mit einem Team aus erfahrenen Fachärzten und medizinischem Personal legen
            wir großen Wert auf eine ganzheitliche Betreuung und die individuellen Bedürfnisse unserer
            Patienten.
          </p>
        </div>
        <!-- Container für das Bild -->
        <div class="about-img">
          <!--Bild und Alternativtext-->
          <img src="/media/über uns.jpg" alt="Teamwork" />
        </div>
      </div>
    </section>


    <!-- Abschnitt der Fachrichtungen -->
    <section id="fachrichtungen">
      <h2>Fachrichtungen</h2>
      <div class="fachrichtungen-container container">

        <!-- Fachrichtung Kardiologie -->
        <div class="fachrichtungen-type Kardiologie">
          <div class="img-container">
            <!-- Bild für die Kardiologie -->
            <img src="/media/Kardiologie.jpg" alt="Herz" />
            <div class="img-content">
              <h3>Kardiologie</h3>
              <!-- Link zur Wikipedia Webseite bezüglich Kardiologie -->
              <a href="https://de.wikipedia.org/wiki/Kardiologie" class="button btn-primary" target="blank">Mehr dazu</a>
            </div>
          </div>
        </div>
        
        <!-- Fachrichtung Augenheilkunde -->
        <div class="fachrichtungen-type Augenheilkunde">
          <div class="img-container">
            <!-- Bild für die Augenheilkunde -->
            <img src="/media/Augenheilkunde.jpg" alt="Auge" />
            <div class="img-content">
              <h3>Augenheilkunde</h3>
              <!-- Link zur Wikipedia Webseite bezüglich Augenheilkunde -->
              <a href="https://de.wikipedia.org/wiki/Augenheilkunde" class="button btn-primary" target="blank">Mehr dazu</a>
            </div>
          </div>
        </div>
        
        <!-- Fachrichtung Neurologie -->
        <div class="fachrichtungen-type Neurologie">
          <div class="img-container">
            <!-- Bild für die Neurologie -->
            <img src="/media/Neurologie.jpg" alt="Gehirn" />
            <div class="img-content">
              <h3>Neurologie</h3>
              <!-- Link zur Wikipedia Webseite bezüglich Neurologie -->
              <a href="https://de.wikipedia.org/wiki/Neurologie" class="button btn-primary" target="blank">Mehr dazu</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    

    <!-- Abschnitt für Unsere Fachärzte -->
    <section id="ärzte">
      <!-- Überschrift für den Abschnitt -->
      <h2 class="ärzte-heading">Unsere Fachärzte</h2>
      <div class="ärzte-container container">

        <!-- Bereich für den Arzt -->
        <div class="ärzte-item">
          <!-- Bild vom Arzt -->
          <div class="arzt-img">
            <img src="/media/Arzt1.jpg" alt="">
          </div>
          <!-- Beschreibung vom Arzt -->
          <div class="arzt-description">
            <!-- Name vom Arzt -->
            <h2 class="arzt-titel">Dr. med. Ahmed Khani</h2>
            <!-- Fachgebiet vom Arzt -->
            <h3>Fachgebiet: Neurologie</h3>
          </div>
        </div>

        <!-- Bereich für den Arzt -->
        <div class="ärzte-item">
          <!-- Bild vom Arzt -->
          <div class="arzt-img">
            <img src="/media/ärztin2.jpg" alt="error">
          </div>
          <!-- Beschreibung vom Arzt -->
          <div class="arzt-description">
            <!-- Name vom Arzt -->
            <h2 class="arzt-titel">Dr. med. Maria Santos</h2>
            <!-- Fachgebiet vom Arzt  -->
            <h3>Fachgebiet: Neurologie</h3>
          </div>
        </div>

        <!-- Bereich für den Arzt -->
        <div class="ärzte-item">
          <!-- Bild vom Arzt -->
          <div class="arzt-img">
            <img src="/media/ärztin3.jpg" alt="">
          </div>
          <!-- Beschreibung vom Arzt -->
          <div class="arzt-description">
            <!-- Name vom Arzt -->
            <h2 class="arzt-titel">Dr. med. Esma Gül</h2>
            <!-- Fachgebiet vom Arzt -->
            <h3>Fachgebiet: Kardiologie</h3>
          </div>
        </div>

        <!-- Bereich für den Arzt -->
        <div class="ärzte-item">
          <!-- Bild vom Arzt -->
          <div class="arzt-img">
            <img src="/media/Arzt4.png" alt="">
          </div>
          <!-- Beschreibung vom Arzt -->
          <div class="arzt-description">
            <!-- Name vom Arzt -->
            <h2 class="arzt-titel">Dr. med. Alim Can</h2>
            <!-- Fachgebiet vom Arzt -->
            <h3>Fachgebiet: Kardiologie</h3>
          </div>
        </div>

        <!-- Bereich für den Arzt -->
        <div class="ärzte-item">
          <!-- Bild vom Arzt -->
          <div class="arzt-img">
            <img src="/media/Arzt5.jpg" alt="">
          </div>
          <!-- Beschreibung vom Arzt -->
          <div class="arzt-description">
            <!-- Name vom Arzt -->
            <h2 class="arzt-titel">Dr. med. Stefan Schmidt</h2>
            <!-- Fachgebiet vom Arzt -->
            <h3>Fachgebiet: Augenheilkunde</h3>
          </div>
        </div>

        <!-- Bereich für den Arzt -->
        <div class="ärzte-item">
          <!-- Bild vom Arzt -->
          <div class="arzt-img">
            <img src="/media/ärztin6.jpg" alt="">
          </div>
          <!-- Beschreibung vom Arzt -->
          <div class="arzt-description">
            <!-- Name vom Arzt -->
            <h2 class="arzt-titel">Dr. med. Sarah Müller</h2>
            <!-- Fachgebiet vom Arzt -->
            <h3>Fachgebiet: Augenheilkunde</h3>
          </div>
        </div>
      </div>
    </section>


    <!-- Abschnitt für die Rezensionen unserer Patienten -->
    <section id="rezensionen">
      <h2 class="rezensionen-title">Rezensionen unserer Patienten</h2>

      <div class="rezensionen-container container">
        <!-- Abschnitt für die Rezension 1 -->
        <div class="rezensionen-box">
          <!--Bereich für Details des Patienten-->
          <div class="patient-detail">
            <!-- Bild des Patienten-->
            <div class="patient-photo">
              <img src="/media/Mensch icon.jpg" alt="" />
              <!-- Name des Patienten-->
              <h4 class="patient-name">Ronja S.</h4>
            </div>
          </div>
          <!-- Darstellung der Sterne für die Sternebewertung -->
          <div class="star-rating">
            <span class="star">&#9733;</span>
            <span class="star">&#9733;</span>
            <span class="star">&#9733;</span>
            <span class="star">&#9733;</span>
            <span class="star">&#9733;</span>
          </div>
          <!-- Rückmeldung des Patienten-->
          <p class="rezensionen-text">
            Die Betreuung während und nach meiner Augenoperation war fabelhaft! Ich bin mit dem Ergebnis sehr zufrieden.
          </p>
        </div>

        <!-- Abschnitt für die Rezension 2 -->
        <div class="rezensionen-box">
          <!--Bereich für Details des Patienten-->
          <div class="patient-detail">
            <!-- Bild des Patienten-->
            <div class="patient-photo">
              <img src="/media/Mensch icon.jpg" alt="" />
              <!-- Name des Patienten-->
              <h4 class="patient-name">Amelia K.</h4>
            </div>
          </div>
          <!-- Darstellung der Sterne für die Sternebewertung -->
          <div class="star-rating">
            <span class="star">&#9733;</span>
            <span class="star">&#9733;</span>
            <span class="star">&#9733;</span>
            <span class="star">&#9733;</span>
            <span class="star">&#9733;</span>
          </div>
          <!-- Rückmeldung des Patienten-->
          <p class="rezensionen-text">
            Vielen Dank an das neurologische Team für die einfühlsame Unterstützung.
          </p>
        </div>

        <!-- Abschnitt für die Rezension 3 -->
        <div class="rezensionen-box">
          <!--Bereich für Details des Patienten-->
          <div class="patient-detail">
            <!-- Bild des Patienten-->
            <div class="patient-photo">
              <img src="/media/Mensch icon.jpg" alt="" />
              <!-- Name des Patienten-->
              <h4 class="patient-name">Stefanie M.</h4>
            </div>
          </div>
          <!-- Darstellung der Sterne für die Sternebewertung -->
          <div class="star-rating">
            <span class="star">&#9733;</span>
            <span class="star">&#9733;</span>
            <span class="star">&#9733;</span>
            <span class="star">&#9733;</span>
            <span class="star">&#9733;</span>
          </div>
          <!-- Rückmeldung des Patienten-->
          <p class="rezensionen-text">
            Nach meiner Herzoperation im kardiologischen Zentrum fühle ich mich deutlich besser und dankbar für die herausragende Fürsorge.
          </p>
        </div>
      </div>
    </section>

    <!-- Anfahrt Bereich -->
    <section id="anfahrt">
      <!--Überschrift für den Abschnitt-->
      <h2>Anfahrt</h2>
      <!--Container für den Inhalt-->
      <div class="container2">
        <div class="map-container">
          <!-- Einbindung von Google Maps -->
          <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2218.2376244153957!2d9.499437788369699!3d51.30999279783596!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47bb39028e13abb3%3A0x3d70bf5fdc45d8a2!2sOrangerie!5e1!3m2!1sde!2sde!4v1720570419259!5m2!1sde!2sde" 
            width="700" 
            height="450" 
            class="google-map"
            style="border:0;" 
            allowfullscreen="" 
            loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade">
          </iframe>
        </div>
        <!--Details zur Adresse und Anfahrtsbeschreibung-->
        <div class="details">
          <!--Untertitel Adresse-->
          <h3>Adresse</h3>
          <!--Absatz mit Adresseangabe-->
          <p>
            <h4>Orangerie, Auedamm 20A<br>
            34121 Kassel<br>
            Deutschland</h4>
          </p>
          <br>
          <!--Informationen zur Erreichbarkeit mit öffentlichen Verkehrsmitteln-->
          <p>
            Unser medizinisches Zentrum befindet sich direkt an der Orangerie und ist mit den öffentlichen 
            Verkehrsmitteln gut zu erreichen. <br> Die nächste Bushaltestelle ist nur 5 Gehminuten entfernt.
            Parkmöglichkeiten sind leider begrenzt, daher empfehlen wir Ihnen die Anreise mit den öffentlichen Verkehrsmitteln oder die Nutzung von Parkhäusern in der Umgebung.
          </p>
        </div>
      </div>
    </section>

    <!-- Kontakt Bereich -->
    <section id="contact">
      <!--Container für den Kontakt Bereich-->
      <div class="contact-container container">
        <!-- Bild für den Kontakt Bereich-->
        <div class="contact-img">
          <img src="/media/kontakt.jpg" alt="Mitarbeiterin an der Rezeption" />
        </div>
        <!--Container für das Kontaktformular--> 
          <form id="myForm" class="form-container" action="insert.php" method="POST">
            <h2>Kontaktieren Sie uns</h2>
            <div id="messages"></div>
        
            <label for="anrede">Anrede:</label>
            <select name="anrede" id="anrede" required>
                <option value="Herr">Herr</option>
                <option value="Frau">Frau</option>
            </select>
        
            <input type="text" name="nachname" id="nachname" placeholder="Nachname" maxlength="25" required/>
            <input type="text" name="vorname" id="vorname" placeholder="Vorname" maxlength="25" required/>
            <input type="email" name="emailadresse" id="emailadresse" placeholder="E-Mail-Adresse" maxlength="40" required/>
            <input type="number" name="telefonnummer" id="telefonnummer" placeholder="Telefonnummer" maxlength="15" required/>
        
            <label for="fachbereich">Fachbereich:</label>
            <select name="fachbereich" id="fachbereich" required>
                <option value="Kardiologie">Kardiologie</option>
                <option value="Augenheilkunde">Augenheilkunde</option>
                <option value="Neurologie">Neurologie</option>
            </select>
        
            <input type="datetime-local" name="terminZeit" id="terminZeit" required/>
        
            <label for="versicherungsart">Versicherungsart:</label>
            <select name="versicherungsart" id="versicherungsart" required>
                <option value="Gesetzlich">Gesetzlich</option>
                <option value="Privat">Privat</option>
            </select>
        
            <input type="text" name="krankenkassenNr" id="krankenkassenNr" placeholder="Krankenkassen-NR" maxlength="10" required/>
            <textarea name="anliegen" id="anliegen" cols="30" rows="6" placeholder="Anliegen" required></textarea>
        
            <button id="submitBtn" type="submit" class="submit-btn">Senden</button>
        </form>      
      </div>
    </section>    
    <!-- Fußzeile -->
    <footer id="footer">
      <!--Copyright Informationen-->
      <h2>&copy; 2024 Medizinisches Zentrum Kassel. Alle Rechte vorbehalten.</h2>
    </footer>
  </body>
</html>

