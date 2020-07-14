# PSR - PHP Standard Recommendations

## Introduction

The PSRs use the key words MUST, SHOULD, MAY etc. like defined in [RFC 2119](https://www.ietf.org/rfc/rfc2119.txt).

For further information about the individual points, click on the headings.

## [PSR-1](https://www.php-fig.org/psr/psr-1/)

- PHP code MUST use the long `<?php ?>` tags or the short-echo `<?= ?>` tags; it MUST NOT use other tag variations.

- PHP code MUST use only UTF-8 without BOM.

- Files SHOULD either declare symbols (classes, functions, constants, etc.) or cause side-effects (e.g. generate output, change .ini settings, etc.) but SHOULD NOT do both. (see [side effects](https://www.php-fig.org/psr/psr-1/#23-side-effects) for further information)

---
- Namespaces and classes MUST follow the current autoloading standard [PSR-4](#psr-4).
- Class names MUST be declared in `PascalCase` (aka `UpperCamelCase`).
---
- Class constants MUST be declared in all upper case with underscore separators.
- Method names MUST be declared in `camelCase()`.
- There is no recommendation for property names, except the naming convention used SHOULD be applied consistently within a reasonable scope

## [PSR-12](https://www.php-fig.org/psr/psr-12/)

### General

- MUST follow all rules outlined in [PSR-1](#psr-1)
---
- All PHP files MUST use the Unix LF (linefeed) line ending only. (For further information: [Codierung des Zeilenumbruchs](https://de.wikipedia.org/wiki/Zeilenumbruch#Codierung_des_Zeilenumbruchs))
- All PHP files MUST end with a non-blank line, terminated with a single LF.
- The closing `?>` tag MUST be omitted from files containing only PHP.
---
- There MUST NOT be a hard limit on line length.
- The soft limit on line length MUST be 120 characters.
- Lines SHOULD NOT be longer than 80 characters; lines longer than that SHOULD be split into multiple subsequent lines of no more than 80 characters each.
- There MUST NOT be trailing whitespace at the end of lines.
- Blank lines MAY be added to improve readability and to indicate related blocks of code except where explicitly forbidden.
- There MUST NOT be more than one statement per line.
---
- Code MUST use an indent of 4 spaces for each indent level, and MUST NOT use tabs for indenting.
---
- All PHP reserved [keywords](https://www.php.net/manual/en/reserved.keywords.php) and [types](https://www.php.net/manual/en/reserved.other-reserved-words.php) MUST be in lower case.
- Any new types and keywords added to future PHP versions MUST be in lower case.
- Short form of type keywords MUST be used i.e. `bool` instead of `boolean`, `int` instead of `integer` etc.

### Opening block

The header of a PHP file may consist of a number of different blocks. If present, each of the blocks below MUST be separated by a single blank line, and MUST NOT contain a blank line. Each block MUST be in the order listed below, although blocks that are not relevant may be omitted.

1. Opening `<?php` tag.
2. File-level docblock.
3. One or more declare statements.
4. The namespace declaration of the file.
5. One or more class-based use import statements.
6. One or more function-based use import statements.
7. One or more constant-based use import statements.
8. The remainder of the code in the file.

---
When a file contains a mix of HTML and PHP, any of the above sections may still be used. If so, they MUST be present at the top of the file, even if the remainder of the code consists of a closing PHP tag and then a mixture of HTML and PHP.

When the opening `<?php` tag is on the first line of the file, it MUST be on its own line with no other statements unless it is a file containing markup outside of PHP opening and closing tags.

Import statements MUST never begin with a leading backslash as they must always be fully qualified.

---
Compound namespaces with a depth of more than two MUST NOT be used.

When wishing to declare strict types in files containing markup outside PHP opening and closing tags, the declaration MUST be on the first line of the file and include an opening PHP tag, the strict types declaration and closing tag.

Declare statements MUST contain no spaces and MUST be exactly `declare(strict_types=1)` (with an optional semi-colon terminator).

Block declare statements are allowed and MUST be formatted as below.
```php
    declare(ticks=1) {
        // some code
    }
```




## Sources
- [Website of PHP FIG (Framework Interop Group)](https://www.php-fig.org/)
