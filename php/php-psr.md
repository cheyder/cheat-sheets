# PSR - PHP Standard Recommendations

## Introduction

The PSRs use the key words MUST, SHOULD, MAY etc. like defined in [RFC 2119](https://www.ietf.org/rfc/rfc2119.txt).

For further information about the individual points, click on the headings.

## PSR-1
### Files
#### PHP Tags
- PHP code MUST use the long `<?php ?>` tags or the short-echo `<?= ?>` tags; it MUST NOT use other tag variations.

#### Character Encoding
- PHP code MUST use only UTF-8 without BOM.

#### [Side Effects](https://www.php-fig.org/psr/psr-1/#23-side-effects)
- Files SHOULD either declare symbols (classes, functions, constants, etc.) or cause side-effects (e.g. generate output, change .ini settings, etc.) but SHOULD NOT do both.

#### Namespace and Class Names
- Namespaces and classes MUST follow the current autoloading standard [PSR-4](#psr-4).

- Class names MUST be declared in `PascalCase` (aka `UpperCamelCase`).

#### Class Constants, Properties and Methods
- Class constants MUST be declared in all upper case with underscore separators.

- Method names MUST be declared in `camelCase()`.

- There is no recommendation for property names, except the naming convention used SHOULD be applied consistently within a reasonable scope



## Sources
- [Website of PHP FIG (Framework Interop Group)](https://www.php-fig.org/)
