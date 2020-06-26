# PHP
- da es PHP schon sehr lange gibt, gibt es viele veraltete Quellen im Netz: Achtet aufs Datum und die Version!
- insbesondere nach dem Übergang von Version 5 auf 7 gab es viele Neuerungen

- `php -v`
- `php --help`
- `php -a`
  - öffnet interaktiven PHP Modus
  - PHP direkt ausprobieren, anwenden
  - sonst wird der PHP-Code in eine Datei gespeichert und aus dieser auszuführen
- PHP-interpreter: interpretiert Code und übersetzt ihn in Maschinen-Code, ausführbar von CPU, vglb. mit compile **??**



## Konventionen
- Funktionen stehen in Klammern
- Semikolons gehören ab jetzt ans Ende jeder Zeile! (soll heißen: hinter Statements, nicht bei Funktions- oder Klassendeklaration)
- Variablen werden mit `$` vorneweg definiert
- jede PHP-Datei fängt an mit `<?php`
- PHP-Bereich könnte man noch mit `?>` schließen, wurde früher gemacht, um PHP in HTML einfügen zu können, heute nicht mehr verbreitet, wir schreiben eher reine PHP-Dateien
- Kommentare
  - einzeilig: `//`
  - mehrzeilig:

        /*
        viele Zeilen Code
        */

- Variablen ausgeben `var_dump()`
- Arrays "readable" ausgeben `print_r()`
- Varianten Addition

        $var = $var + 1
        $var += 1
        $var++

- Variablen mit `$` immer veränderbar (sowohl in ihrem Wert, wie in ihrem Datentyp)
- erster Buchstabe von Klassennamen immer groß schreiben

## Datentypen

strings

normalerweise in einfachen Anführungszeichen, doppelte nur wenn wir eine Variable ausgeben wollen

        $var = 'schöne';
        echo "Hello$var Welt";
        echo 'This string ' . 'is concatenated'; 

        $string = strval(5); // => '5' (type casting)
        


others

    $boolean = true;  // or TRUE or True
    $boolean = (boolean) 1; // => true (type casting)

    $int = -12;

    $float = 1.234;

## flow control
javascript sehr ähnlich

    if (3 < 1 && true) {
        print 'Does not print';
    } elseif (1 === '1') {
        print 'Does not print';
    } else {
        print 'Does print';
}

## Schleifen

        $i = 0;
        while ($i < 5){
            $i++;
            if ($i === 2)
            echo $i;
            
        }
`break;` Exit out of the while loop

`continue;` Skip this iteration of the loop

        for ($x = 0; $x < 10; $x++){
            echo $x;
        }


modulo-Operator
- jede zweite Zeile mit Schleife und Modulo

## [Funktionen](../backend/resources/function.php)

## [Arrays](../backend/resources/arrays.php)

## [Exceptions](../backend/resources/exceptions.php)

## [OOP](../backend/resources/oop.php)
- [Vertiefung zu get und set](https://www.php-einfach.de/experte/objektorientierte-programmierung-oop/php-design-patterns/get-und-set-methoden/)
- pro Klasse eine Datei
- Attribute per default als privat, ggf. später anpassen

### [Vererbung]
- siehe `resources/nf-tasks/`
- eine Klass kann nur einmal erben

### abstrakte Klassen und Methoden

        abstract class Klassenname 
        {

        }

- können nicht instanziiert werden / Objekte daraus erzeugt werden

        public abstract function getDescription();

- legt fest, dass Kinder dieser Klasse eine solche Funktion brauchen, legt sie aber noch nicht fest. Muss in Kinderklasse überschrieben werden.

### [Interface](./resources/interfaces.php)
- haben im Gegensatz zu abstrakten Klassen keinen konkreten Code

#### Trait
- für sehr allegmeine Funktionen, die an mehrere Klassen vererbt werden sollen, die eigentlich nichts miteinander zu tun haben
- mehrere Traits pro Klasse möglich
- versteckt Funktionalität und verschleiert Länge der Klasse > lange Klassen lieber überarbeiten und aufteilen

        trait TraitName 
        {
                do something 
        }

        class ClassSame 
        {
                use TraitName;
        }

### Statische Methoden und Eigenschaften
- idR erkennbar an `::`
- statische Methoden einer Klasse können aufgerufen werden ohne ein Objekt instanziieren zu müssen
- statische Eigenschaften gelten für alle Objekte einer Klasse
- gut geeignet um Helfermethoden und -eigenschaften zu kapseln
- in Laravel werden häufig scheinbar statische Methoden verwendet, die allerdings im Hintergrund ein objekt instanziieren
- es ist idR nicht empfohlen statische Methoden und Eigenschaften, vorbehalten Sonderfälle

[Beispiele](./resources/static.php) |
[Artikel](https://wpshout.com/courses/object-oriented-php-for-wordpress-developers/php-static-methods-in-depth/)

## Name spaces
- immer die erste Definition in einer Datei
- häufig Firmennamen oder Entwicklernamen
- meistens ein Name Space pro Datei
- namespace endet am Dateiende
- kapselt die Klassennamen ähnlich wie die Klassen die Variablen- und Methodennamen kapseln
- verhindert dadurch Namenskollisionen
- referenziert durch Backslashpfade, sind aber sehr lang
- einbinden eines Name Spaces durch `use`
  - Aliasvergabe mit `as` 
- Klassen aus anderen Name Spaces innerhalb eines Name Spaces müssen dediziert angegeben werden
  - globalen Name Space mit `\` vorneweg

## [Design Patterns](https://phptherightway.com/pages/Design-Patterns.html)

## [PHP Standard Recommendations](https://www.php-fig.org/psr/)

## Refactoring

## Debugging
```php
print_r($var);
var_dump($var);
die(print_r($var)); // unterbreche an dieser Stelle den Code und gib die $variable aus, wenn Array dann mit print_r

# laravel
dd($var); //dump and die
```

### [XDebug](https://xdebug.org/)
- richtiger Debugger für PHP
- Setzen von Breakpoints
  - Code ausführen bis hierher

in der VM die xDebug-Settings wie folgt einstellen
```
# /etc/php/7.4/mods-available/xdebug.ini

zend_extension=xdebug.so
xdebug.remote_enable = 1
xdebug.remote_connect_back = 1
xdebug.remote_port = 9000
xdebug.idekey = VSCODE
xdebug.remote_autostart = 1
xdebug.max_nesting_level = 512

```
dann den php-Service neu starten
```
sudo service php7.4-fpm restart
```
in VScode [folgendes](https://christattum.com/debugging-on-laravel-homestead-using-vscode/) in die launch.json hinzufügen
```
{
  "version": "0.2.0",
  "configurations": [
    {
     "name": "Listen for XDebug on Homestead",
     "type": "php",
     "request": "launch",
     "pathMappings": {
       "/home/vagrant/tinker": "${workspaceRoot}"
     },
     "port": 9000
    }
  ]
}
```

## [Laravel](laravel-cs.md)

## Quellen

- [PHP.net](https://php.net/)
  - mit vielen hilfreichen Beispielen versehen
  - erste Anlaufstelle
- [learnxinyminutes](https://learnxinyminutes.com/docs/php/)
  - gerade am Anfang interessant
- [Laracasts](https://laracasts.com)
  - Tutorials über den Kurs hinaus
- [phptherightway](https://phptherightway.com/)
  - beschäftigt sich damit, wie modernes PHP geschrieben wird
  - sehr aktuell
  - es lassen sich dort einzelne Themen detailliert nachlesen
- [Security](https://owasp.org?)
  - [Cheat Sheet zu PHP](https://cheatsheetseries.owasp.org/cheatsheets/PHP_Configuration_Cheat_Sheet.html)
- [spezieller PHP Editor](https://www.jetbrains.com/phpstorm/)
- [HTTP Basics](https://www.ntu.edu.sg/home/ehchua/programming/webprogramming/HTTP_Basics.html)