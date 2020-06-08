# Datenbanken

## Arten von Datenbanken

| SQL                   | NoSQL                     |
|-----------------------|---------------------------|
| festes Schema         | dynamisches Schema        |
| komplexe Abfragen     | simple Abfragen           |
| vertikale Skalierung  | horizontale Skalierung    |
| Datenintegrität       | Geschwindigkeit           |

### ACID-Prinzip
- **Atomicity**: Operationen werden entweder ganz oder gar nicht ausgeführt
- **Consistency**: Integritätsbedingungen werden garantiert
- **Isolation**: Operationen beeinflussen sich nicht gegenseitig
- **Durability**: Daten sind auch bei Software-Fehler oder Hardware-Ausfall sicher

## Normalisierung

- (1NF) **atomare Atrribute**: Sind die Einträge noch weiter aufteilbar?
- (2NF) **Abhängigkeit vom Primärschlüssel**:
  - Schlüssel um einzelne Einträge eindeutig zu bezeichnen
  - was von einem Primärschlüssel abhängt, kann in eigene Tabellen aufgeteilt werden
- (3NF) **Abhängigkeit von Nichtschlüsseln**:
  - Dinge die nicht vom Primärschlüssel abhängen, können auch in eigene Tabellen aufgeteilt werden
- es gibt noch mehr Normalformen, siehe Titellink

## SQL

- sql ist nicht case sensitive, aber es ist Konvention Befehle groß zu schreiben

```sql
CREATE TABLE mountains ( -- settings for the table
    /*column, data type, constraints*/
    id              INTEGER PRIMARY KEY,
    full_name       TEXT,
    height_meters   INTEGER NOT NULL,
    first_ascent    DATE,
    country_id      INTEGER,
    FOREIGN KEY (country_id) REFERENCES countries (id)
);

CREATE TABLE countries (
    id		        INTEGER PRIMARY KEY,
    country_name    TEXT
);

.table -- shows existing tables in data base, sqlite specific
.schema mountains -- shows schema of table

CREATE TABLE IF NOT EXISTS mountains();
```

## Index
- Indexe beschleunigt das Abfragen von Daten
- Indexe verlangsamen das Einfügen von Daten

```sql
CREATE TABLE t1(a, b UNIQUE);
	
CREATE TABLE t1(a, b PRIMARY KEY);
	
CREATE TABLE t1(a, b);
CREATE UNIQUE INDEX t1b ON t1(b); 
```

## Tabellen bearbeiten
```sql
ALTER TABLE mountains RENAME TO hills;
ALTER TABLE hills ADD COLUMN description TEXT;

DELETE FROM hills; -- clears th table
DROP TABLE hills; -- deletes the table
```

## Daten einfügen und aktualisieren
```sql
INSERT INTO mountains VALUES (
    (?, 'Mount Everest', 8848, '1953-05-29'),
    (?, 'Kilimanjaro', 5895, '1889-10-06'),
    (?, 'Denali', 6190, '1913-06-07'),
);
	
UPDATE mountains SET height_meters=42 WHERE full_name='Mount Everest';
```

## Daten ausgeben
```sql
.header on -- show column headers, sqlite spezifisch
.mode column -- sqlite spezifisch
-- Einzelne Spalten auswählen:
SELECT full_name, height_meters FROM mountains;
SELECT DISTINCT full_name FROM mountains;

-- Alle Spalten auswählen:
SELECT * FROM mountains;

-- Anzahl der Zeilen limitieren:
SELECT * FROM mountains LIMIT 3;

-- Auswahl filtern:
SELECT * FROM mountains WHERE height_meters > 8000;
SELECT * FROM mountains WHERE height_meters BETWEEN 6000 AND 8000;
SELECT * FROM mountains WHERE full_name LIKE '%jaro';
SELECT * FROM mountains WHERE full_name IS NOT 'K2';
SELECT * FROM mountains WHERE full_name IN ('Denali', 'Cho Oyu');

-- Auswahl sortieren (ASC, DESC):
SELECT * FROM mountains ORDER BY height_meters ASC;

-- Spalten im Ergebnis umbennen:
SELECT full_name AS mountain, height_meters AS height FROM mountains;

-- Spalten mit z.B. Text zusammenfügen
SELECT height_meters || 'm' AS height FROM mountains;

-- Es gibt eingebaute Methoden (count, avg, sum, min, max, ...):
SELECT avg(height_meters) FROM mountains;

-- Zusammenfassen von Ergebnissen:
SELECT strftime('%Y', first_ascent) / 100 AS century
  FROM mountains GROUP BY century;

```

## Joins

### inner join
```sql
SELECT *
FROM Mitarbeiter
JOIN Abteilung ON Mitarbeiter.AbtId = Abteilung.AbtId;

SELECT * FROM Mitarbeiter m JOIN Abteilung a ON m.AbtId = a.AbtId;
```
nur wenn sie gleich heißen
```sql
SELECT *
FROM Mitarbeiter
JOIN Abteilung USING (AbtId);
```

### outer join
```sql
SELECT *
FROM Mitarbeiter
LEFT JOIN Abteilung USING (AbtId);
```

## Resources

- [CodePen für alles](https://repl.it/@cheyder/)
- Tutorials
  - [star sql](https://selectstarsql.com/)
  - [murder mystery](https://mystery.knightlab.com/)
- Cheat Sheets
  - [SQL](https://learnxinyminutes.com/docs/sql/)
  - [SQLite](https://cheatography.com/fetttobse/cheat-sheets/sqlite/)