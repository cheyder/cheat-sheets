# CSS
- cascading style sheets: styles in ccs lassen sich vererben (cascading)
- als "living standard" werden Neuerungen immer direkt in neue Browsergenerationen integriert
  
### CSS-Rules

    selector {
        property: property_value;
    }

- eine declaration ist ein property-value-pair, mehrere werden als declaration-block bezichnet
- Konventionen: 
  - Leerzeichen nach selector
  - Leerzeichen nach Doppepunkt
  - Stylesheet als 'style.css'
- idR Einbidung über externe Stylesheets:
```
    <head>
        <link href="style.css" type="text/css">
    </head> 
```
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

### Value Varianten
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

## Media-Queries
verschiedene Eigenschaften des Endgeräts abfragen

    Struktur: @abfrage bedingung {auszuführendes CSS}

    @media screen {}
    @media (max-width: 767px) {}
    @media (orientation: landscape) {}