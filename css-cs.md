# CSS
- cascading style sheets: styles in ccs lassen sich vererben (cascading)
- als "living standard" werden Neuerungen immer direkt in neue Browsergenerationen integriert
- idR Einbidung über externe Stylesheets:
```
    <head>
        <link href="style.css" type="text/css">
    </head> 
```
  
### CSS-Rules

    selector {
        property: property_value;
    }

- eine declaration ist ein property-value-pair, mehrere werden als declaration-block bezeichnet
- Konventionen: 
  - Leerzeichen nach selector
  - Leerzeichen nach Doppelpunkt
  - Stylesheet als 'style.css'

### [Selektoren](https://developer.mozilla.org/en-US/docs/Glossary/CSS_Selector)
  gezielt Elemente für Styling auswählen, von allgemein bis spezifisch - Spezifizität für Überschreibung und Vererbung von Styles beachten!
  
  - Typen `p,h1 {}` - betrifft alle `p`-Elemente
  - Klassen (auch ein einzelnes Element über Klassen, niemals id)
    - `.subtitle {}` - betrifft die Klasse `subtitle`
  - Attribute
    - `input[type=checkbox]` gilt für alle `input`-Elemente mit dem Attribut `type=checkbox`
    - `[hidden] { display: none}` als boolesches Attribut in alle Browser bereits so eingebaut
    - `a[href^="http"] { color: green;}` alle ausgehenden Links (alle Links die mit 'http' *anfangen*) werden gründ angezeigt
  - Kombinatoren
    - Group `p, h1 {}` betrifft alle `p` und `h1`-Elemente
    - Descendant `.user-ward img {}` ein `img`-Element innerhalb eines Elements mit der Klasse `.user-ward` – muss nicht direktes Kind von dem Element sein
    - Kinder `header > img {}` betrifft alle Bilder im Header – im Ggs zu Descendantst nur direkte Nachfahren
  - Pseudoklassen, fragen Zustand eines Elements ab
    - `header:hover {}` fragt ab, ob der Mauszeiger darüber ruht und aktiviert dann die Eigenschaften
    - `a:visited {}` ein Link der bereits besucht wurde
    - `a:active {}` zB ein Button solange er gedrückt wird
    - `input:focus {}` ein `input`-Element das zB durch TAB den Fokus erhalten hat (default)
  - Pseudoelemente, sprechen Einzelteile eines Elements an
    - `h1::first-letter {}` spricht nur den ersten Buchstaben der h1 an

### Spezifizität
```
    1 0 0 0 = style="color: blue"
    0 1 0 0 = #top
    0 0 1 0 = .bg-primary
    0 0 1 0 = [disabled]
    0 0 0 1 = em
    0 0 0 1 = :before
    display: block !important; = next level (alles nochmal von vorn)
```

### [Properties](https://developer.mozilla.org/en-US/docs/Web/CSS/CSS_Properties_Reference)
click for examples

### Value Varianten (bsphft.)
- Keywords: `inline, flex, grid, blue, red`
  - alle [color-keywords](https://developer.mozilla.org/en-US/docs/Web/CSS/color_value "The Color data type")
- Größeneinheiten: `px, em, rem, %, vh, vw`
- Farben: `red, #FF0000, rgb(255, 0, 0), hsl(0, 100%, 50%`


---

## CSS-Grid
- seit 2017 unterstützt von allen wichtigen Browser
- zweidimensional (`columns` und `rows`) im Ggs zu `flex` (eindimensional, entlang einer Achse)
- die kürzesten Grid-Befehle:
  - grid-template
  - grid-area
- größte Stärke: Automatisierung `repeat(auto-fit, minmax(100px 1fr))`
  - auto-fit: fülle den vorhandenen Platz mit den vorhandenen (befüllten) columns/rows
  - auto-fill: fülle den vorhandenen Platz mit so vielen columns/rows wie geht, leere bleiben leer
  - zum [Unterschied von auto-fit und auto-fill](https://css-tricks.com/auto-sizing-columns-css-grid-auto-fill-vs-auto-fit/)
- Standardmäßig bei Grid alles untereinander, änderbar mit `grid-auto-flow: row`

## Media-Queries
verschiedene Eigenschaften des Endgeräts abfragen

  Struktur: `@abfrage bedingung {auszuführendes/zu änderndes CSS}`
  
  Beispiele:

    @media screen {}
    @media (max-width: 767px) {}
    @media (orientation: landscape) {}

## inline, inline-block, block

- inline-Elemente: padding und margin wirkt sich nur nach links und rechts aus
- inline-block-Elemente: pading und margin wirkt sich in alle Richtungen aus, nach Elementen wird aber nicht umgebrochen

## Box Model

- margin
- border
- width
- padding

Normalerweise würde padding und border auf eine explizite width oder height addiert werden (unintuitiv), deshalb folgender Hack immer am Anfang der CSS:
 ```
  * {
    box-sizing: border-box;
}
```

## Flexbox
- `display: flex`
- `justify-content: center, flex-start, flex-end, space-around, space-between, space-evenly`
- `flex-direction: column` erreicht die Umkehrung der Ausrichtung


## Resourcess

 - [CSS Complete-Guide](https://css-tricks.com/snippets/css/complete-guide-grid/)
 - [CSS Grid Übungsspiel](https://cssgridgarden.com/#de)
 - [CSS Grid with WesBos](https://cssgrid.io/)
 - [CSS on Scrimba](https://scrimba.com/g/gR8PTE)
 - [Flex Eigenschaften Übersichten](https://codepen.io/enxaneta/full/adLPwv)
 - [Flexbox Complete Guide](https://css-tricks.com/snippets/css/a-guide-to-flexbox/)
 - [Flexbox Übungsspiel Flexfrog](https://flexboxfroggy.com/#de)
 - [Flexbox Übungsspiel Flexzombies](https://flexboxzombies.com/p/flexbox-zombies)
 - [noch ein CSS Spiel?](https://flukeout.github.io/)