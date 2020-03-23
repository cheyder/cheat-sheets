# JavaScript

- ECMA Script ist der zugrundeliegende Standard
  - seit ECMA Script 6 besonders verbreitet
  - aktuell [ECMA Script 2020](https://tc39.es/ecma262/)
  - transpilieren zu älteren ECMA Script Varianten mit "Babel"
- "JavaScript" ist ein Marketingname, Rechte bei Oracle (?)

## What's possible?

- auf **Events** reagieren
- [**DOM**](https://developer.mozilla.org/en-US/docs/Web/API/Document_Object_Model) manipulieren = "state" ändern
  - großer Vortrieb durch Möglichkeit einer asynchronen Aktualisierung ohne gesamten Reload
- mit modernen Libraries **ganze Websites**, aber weniger geranked von Suchmaschinen, weil erst ausgeführt werden muss
  - kann aber auch direkt auf dem eigenen Server ausgeführt werden
- **Apps** durch übertragen in nativen Code
    - **progressive Web Apps** 
      - funktional sehr nah an nativen Apps dran
      - bei Android mittlerweile sogar über AppStore, Apple will das nicht wirklich
- Spiele
- Browser Plugins
- Entwicklertools

## DOM - Document Object Model
- Schnittstelle zwischen Skripten (meist geschrieben in JavaScript) und Internetseiten (HTML)
- repräsentiert Internetseite als Baumstruktur und ermöglicht Skripten darauf zuzugreifen
  - Wurzel ist **Document**
  - von denen alle **Elements** abzweigen
  - jeder dieser Knotenpunkte, sowohl Document als auch Elements, werden als **Nodes** bezeichnet
    - gelten in JavaScript auch als Objekte (?!)
  - all diese Zugriffswege auf einen DOM tree werden als **Interfaces** bezeichnet

## Begriffe
- **Methode** (method) ist eine Funktion die zu einem Objekt gehört
- **Eigenschaft** (property) ist eine Variable, die zu einem Objekt gehört

## [Events im Browser](https://developer.mozilla.org/en-US/docs/Web/Events)

## Variables
- "benannte Behälter" für Daten
- `var` ist veraltet
- `let` deklariert änderbare Variablen
- `const` deklariert nicht änderbare Variablen
  - (Konvention) beim [hard-coding](https://en.wikipedia.org/wiki/Hard_coding ) werden Großbuchstaben für die Variablen verwendet
- es können keine [reserved words](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Lexical_grammar#Keywords) als Variablenname verwendet werden
- gute **Namensgebung**!
  - beschreibend
  - verständlich
  - prägnant
  
## Data types
Es gibt verschiedene Typen von Daten, die in Variablen gespeichtert werden können.

- numbers
  - integer (ganze Zahlen)
  - floating-points (~ Kommazahlen)
  - spezielle Werte:
    - `Infinity`
    - `-Infinity`
    - `Nan`
- `BigInt` (numbers bigger than 2⁵³)
  - wenig genutzt
- strings
  - meist Text, eingebettet in Anführungszeichen
  - wir benutzen nur single quotes
  - backticks = "extended functionality quotes" (können Variablen in string einbinden)
- boolean
  - `true` or `false`
- null
  - meist um einen unbekannten Wert einer Variable zuzuordnen
- undefined
  - meist nur in Abfragen genutzt
- object
  - einen ganzen Datensatz speichern
  - häufig: array
- symbol
  - eine eindeutige Kennnung
  - wenig genutzt

Zur Abfrage des Typs: `typeof`


## [Konvertierung](https://javascript.info/type-conversions) von Datentypen.

## Nutzung von [Operatoren](https://javascript.info/operators)

## [Vergleiche](https://javascript.info/comparison)


## [Functions](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Functions)

arrow functions: praktisch für kleinere Funktionen

    const multiply(first, second) => {
      return first * second
    }

with implicit return 

    const multiply(first, second) => first * second

function declaration (with hoisting): praktisch um Details des Codes ans Ende zu legen, um sie nur bei Bedarf lesen zu müssen

    function multiply() {
      return first * second
    }

[function expression](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Operators/function)


## Browser Functions

- `alert(message)`
  - eine einfache Mitteilung die der User bestätigen muss
- `prompt(title, [inputDefault])` 
  - eine Mitteilung
  - erfragt Eingabe des Users
  - gibt die Eingabe oder `null` zurück
- `confirm(question)` 
  - Mitteilung
  - einfache Abfrage OK/Cancel
  - gibt Wahrheitswert zurück
  
## Conditional operators
Werte, die an `if` übergeben werden, werden automatisch in Booleans konvertiert.

    if(conditionIsTrue) {
      executeThis
    } else {ifConditionIsFalseExecuteThis}
Ein möglicher, aber nicht empfohlener short hand:

    if(conditionIsTrue) executeThis

Wenn man mehrere Bedingungen hintereinander testen möchte:

    if(conditionIsTrue) {
      executeThis
    } else if (tryThisCondition) {
      andExecuteThis
    } else if (andSoOn) {
      andSoOn
    } else {
      ifNothingWorkedBeforeDoThis
    }

`else if` ist eine Kurzform für:

    if(conditionIsTrue){
      DoThis
    } else {
      if(tryThisCondition) {
        andExecuteThis
      } else {
        ifNothingWorkedBefore
      }
    }

Kurzform für eine bedingte Variablenzuweisung:

    let result = condition ? value1IfTrue : value2IfFalse

    let result = condition ? value1IfTrue :
      condition2 ? value2IfCondition2True :
      condition3 ? value3IfCondition3True :
      value4IfNothingElseFit;


Es wird nicht empfohlen, damit `If`-Operatoren zu ersetzen – nur um Variablen bedingt Werte zuzuweisen, nicht um weiterführenden Code auszuführen.

Anmerkung: Falls nur eine einfache Zuweisung von `true` oder `false` entsprechend der Bedingung erfolgen soll, reicht die Angabe der Bedingung aus, weil der `=`-Operator von selbst ein Boolean zurückgibt.

## Logical operators
Konvertieren alle Operanden in Boolesche Werte und prüft sie nacheinander von links nach rechts. Mit ansteigendem Vorrang:

- OR : `||` 
  - gibt `true` zurück, sobald (wenn mindestens) ein Operand `true` entspricht
  - gibt gleichzeitig diesen Operanden in seinem ursprünglichen Datentyp zurück
- AND : `&&`
  - gibt nur dann `true` zurück wenn alle Operanden `true` entsprechen
  - gibt in diesem Fall den letzten Wert der Reihe zurück
  - gibt ansonsten den ersten Operand mit `false` zurück
- NOT : `!`
  - gibt den umgekehrten Booleschen Wert zurück (Negation)