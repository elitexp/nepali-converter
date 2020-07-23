# Elitexp/Nepali-Converter

Library and middleware enabling Nepali Date and currency conversions.


## Installation

Require `elitexp/nepali-converter` using composer.

## Usage

This package can be used as a library.

### Example: using the library

```php
<?php

use Elitexp\Converters\NepaliConverter;

$converter = new NepaliConverter();

$converter->numberToWords(Number number, Boolean currency=true);

?>
```

