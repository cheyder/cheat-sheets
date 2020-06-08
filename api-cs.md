# API

- wenn UI Schnittstelle für User ist, dann ist API Schnittstelle für Programme
- häufige Verwendung bei Microservices

- APIs sind überall
- APIs wenn dokumentiert sind

| Pros                              | Cons                                  |
|-----------------------------------|---------------------------------------|
|Integration externer Services      | Mehraufwand, Kosten                   |
|Innovation                         | Sicherheit, weitere Angriffsfläche    |
|Geschwindigkeit, Anpassbarkeit     | Datenschutz                           |
|Flexibilität                       |                                       |


## Authorization & Authentification
per HTTP mit

- Basic Auth (einfach, aber nicht sicher)
  - verschlüsselt mit Basic64
- Bearer Auth
  - ähnlich Basic Auth
  - nur keine username-password-Kombination, sondern Token
- API Key
  - Projekt-/Nutzer-spezifisch
  - manchmal kontextabhängig (Live/Test)
  - muss nicht im Http Header stehen
- OAuth

## [CORS](https://developer.mozilla.org/en-US/docs/Web/HTTP/CORS)
cross origin requests

## SOAP

## REST
- nicht festgelegt, eher "Architektur-Stil"
- wenn Prinzipien erfüllt sind, dann RESTful

### Prinzipien
- Client-Server
- Stateless
- Cacheable
- Uniform Interface
  - resource identification in requests
  - resource manipulation through representations
  - self-descriptive messages
  - hypermedia as the engine of application state
- Layered System
- Code on demand (optional)


## GraphQL
- spezifischere Abfragen als bei REST möglich
- mehr Vorarbeit auf API-Seite, weniger Codeaufwand auf Abfrage-Seite
- 

## Resources

- [glitch]{https://glitch.com}



    https://www.moesif.com/blog/api-guide/
    https://github.com/craigsdennis/intro-to-apis-course/blob/master/course-notes.md
    https://swagger.io/resources/articles/best-practices-in-api-design/



    https://swagger.io/
    https://www.postman.com/
    https://jsonplaceholder.typicode.com/
    http://requestbin.net/



    https://github.com/n0shake/Public-APIs
    http://apis.guru/graphql-apis/
    https://www.programmableweb.com
    https://explore.postman.com

