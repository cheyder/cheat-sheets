# Web Security
- in Google Chrome in Entwicklungstools unter Audits bereits Security Best Practice enthalten

Drei Säulen erfolgreicher Applikationen

- Usability
- Performance
- Security

## XSS - Cross Site Scripting
Beschreibt das Hinzufügen von schadhaftem HTML, CSS oder JavaScript, wie
    - per GET und POST
    - Formulare

- Hijacking of user accounts (durch Cookie Diebstahl)
- Veränderung aller URLs, Umleitung der User
- Phishing Seiten
- DDOS Attacken
- und noch mehr

### Non-persistent aka. Reflected
  -benötigt social engineering
  - URL Shortener wie bit.ly


### Persistent
  - benötigt kein social engineering
  - dauerhaft in Datenbank wegspeichern
  - vor allem Foren, Kommentarfelder
  

### DOM


### Wie schützen?
- Never trust user input! (defense programming)
  

## Password Security
- Paswörter verschlüsselt in Datenbank
- MD5 veraltet -> crackstation.net
- Verschlüsselung in php mit password_hash() und password_verify()
- Alghorithmus: bcrypt

## SQL Injection
- ermöglicht löschen, zugreifen oder manipulieren von Daten

- verhindern mit prepare und execute (PDO?)
- in Laravel mit Eloquent
- Penetration Tests mit sqlmap.org kostenlos

## CSRF
- wenn etwas löschen, dann nie auf GET ermöglichen (Limitierung der HTTP Methoden)
- mit Token

## DoS - Denial of Service
- zum gleichen Zeitpunkt hundertausende bishin zu Millionen Aufrufe (oder Logins)

## DDoS
- Zombies werden im Vorhinein infiziert (Botnetz)

verschieden Arten
nicht zu verwechseln mit Slashdot / Heise Effekt

- cloud load balancers
- firewalls
- nginx
- keine teuren regulären Ausdrücke
- testen mit Kali Linux

## Brute Force
- Login-Versuche vom Nutzer einschränken
- Niemals verraten ob der Nutzername vorhanden ist!
- Passwort Qualität der Nutzer prüfen
- Honeypots und Captchas verwenden

## Third Party 

### Typosqadding

## Good to know / Best practices
- Secure by Default
- Indexierung von sensiblen Bereichen verhindern
- nicht benötigte Dateien löschen
- Fehlermeldungen unterdrücken
  - DISPLAY ERRORS: false
- keine Zugangsdaten versionieren

