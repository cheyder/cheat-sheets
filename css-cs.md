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
  - Elemente `p,h1 {}` - betrifft alle `p`-Elemente
  - Klassen (auch ein einzelnes Element über Klassen, nicht id)
    - `.subtitle {}` - betrifft die Klasse `subtitle`
  - Kombinatoren
    - `header > img {}` betrifft alle Bilder im Header (Kindelemente)
    - `p, h1 {}` betrifft alle `p` und `h1`-Elemente
  - Pseudoklassen, fragen Zustand eines Elements ab
    - `header:hover {}` fragt ab, ob der Mauszeiger darüber ist und aktiviert dann die Eigenschaften
  - Pseudoelemente, sprechen Einzelteile eines Elements an
    - `h1::first-letter {}` spricht nur den ersten Buchstaben der h1 an

### [Properties](https://developer.mozilla.org/en-US/docs/Web/CSS/CSS_Properties_Reference)
click for examples

### Value Varianten (bsphft.)
- Keywords: `inline, flex, grid, blue, red`
- Größeneinheiten: `px, em, rem, %, vh, vw`
- Farben: `red, #FF0000, rgb(255, 0, 0), hsl(0, 100%, 50%`


---

## CSS-Grid
- seit 2017 unterstützt von allen wichtigen Browser
- zweidimensional (`columns` und `rows`) im Ggs zu `flex` (eindimensional, entlang einer Achse)
- [Complete-Guide](https://css-tricks.com/snippets/css/complete-guide-grid/)
- [Übungsspiel](https://cssgridgarden.com/#de)
- die kürzesten Grid-Befehle:
  - grid-template
  - grid-area
- größte Stärke: Automatisierung `repeat(auto-fit, minmax(100px 1fr))`
  - auto-fit: fülle den vorhandenen Platz mit den vorhandenen (befüllten) columns/rows
  - auto-fill: fülle den vorhandenen Platz mit so vielen columns/rows wie geht, leere bleiben leer
  - zum [Unterschied von auto-fit und auto-fill](https://css-tricks.com/auto-sizing-columns-css-grid-auto-fill-vs-auto-fit/)

## Media-Queries
verschiedene Eigenschaften des Endgeräts abfragen

    Struktur: @abfrage bedingung {auszuführendes/zu änderndes CSS}

    @media screen {}
    @media (max-width: 767px) {}
    @media (orientation: landscape) {}