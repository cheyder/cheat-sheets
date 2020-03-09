# HTML
- Hyper Text Markup Language
- Strukutierung der Inhalte
- Semantik der Struktur
    - hilft Web Developern
    - hilft Suchmaschine
    - hilft eingeschränkten Menschen
    - hilft Smartphones
- Elemente mit Tags geschrieben
    - `<openingtag> </closingtag>`
    - `<selfclosingtag />` niemals verwenden!
    - `<voidelement>`
- innherhalb von Tags: `<openingtag attribute="value"></closingtag>`
- in HTML immer doppelte Anführungszeichen

Wirf auch einen Blick in das auskommentierte Beispiel [index.html](./index.html) - vor allem mit Emmet-Beispielen in den Kommentaren.


## [Elemente](https://developer.mozilla.org/en-US/docs/Web/HTML/Element)

### [Content sectioning](https://developer.mozilla.org/en-US/docs/Web/HTML/Element#Content_sectioning)
Inhaltliche Gruppierungen mit den Untergruppen: 

- `header`
    - id-Attribut nur für header-Sprungmarken oder laber-input-Verknüpfung
- `footer`
- `main` auf jeder Seite individueller Inhalt
- `nav` nur Links zur Seitennavigation, ersetzt alte Praxis der Navigation mit `ul`:
  - [kleiner Diskussionsüberblick](https://css-tricks.com/navigation-in-lists-to-be-or-not-to-be/)
- `aside`
- `article` vollständigen redaktionellen Inhalt
- `section`allgemeine Strukturierung

Immer so wenig semantisch hervorheben wie möglich. 

- `div` altes HTML, nur noch um Element für Styling zu gruppieren, die nicht anders gruppiert/gestylet werden können

### [Text content](https://developer.mozilla.org/en-US/docs/Web/HTML/Element#Text_content)
- `hi (h2 ..)`
  - nur eine `h1` pro sichtbarer Seite
- `p` (paragraph)
- `strong` (semantische Betonung)
- `em` (emphasize, ebenfalls semant. Betonung)
- `small` Kleingedrucktes
- `mark` markiert wie Textmarker
- `br` (break)
- `span` (ohne Semantik, als Wrapper für Styling)

### [Image and multimedia](https://developer.mozilla.org/en-US/docs/Web/HTML/Element#Image_and_multimedia)
- `img`
  - immer mit `alt`-Attribut: für SEO, Screenreader. Ein guter `alt`-Text orientiert sich an der im Bild enthaltenen Information, nicht an dem Motiv selbst. Wenn unwichtig, oder Dopplung: `alt=" "`

### [Forms](https://developer.mozilla.org/en-US/docs/Web/HTML/Element#Forms)
- `<form action="/search"></form>` Wrapper für Formular-Elemente. `action`sagt: Schicke alle Eingaben an diese Adresse.
    - `label`
        - [UX] Input-Label am besten über die Input-Box
        - `id`-Attribut nur für label-input-Verknüpfung oder header-Sprungmarken
    - [`input`](https://developer.mozilla.org/en-US/docs/Web/HTML/Element/input) (immer mit einem label zusammen)
        - `type`
        - `placeholder` können Label nicht ersetzen, niemals User-relevante Infos in einen Placeholder


`<button></button>`
`<a></a>`

- Buttons für Aktionen auf der aktuellen Seite
- Links für Verweise auf andere (Unter-)Seiten


## Tipps, Tricks, Hacks

  Überschriften mit gleichnamigen Sprungmarken 



    <h1>
        <a></a>
    </h1>


### UX
- ein schnellerer Spinner verkürzt die empfundene Wartezeit 

## Ressourcen

[MDN web docs](https://developer.mozilla.org/en-US/)

[Smashing Magzine](https://www.smashingmagazine.com/)

[HTML Entities](https://www.amp-what.com)

[Emmet Abbreviations](https://docs.emmet.io/)