# php-gson

![Build Status](https://travis-ci.com/ArchangelDesign/php-gson.svg?branch=master)
[![Coverage Status](https://coveralls.io/repos/github/ArchangelDesign/php-gson/badge.svg?branch=master)](https://coveralls.io/github/ArchangelDesign/php-gson?branch=master)

Zero dependency simple PHP entity mapper.
JSON String to Objcet and Object to JSON String.

**Installation**

```
composer require johyunchol/php-gson2
```

or download and include autoload.php

```
include 'php-gson/src/PHPGson2/autoload.php';
```

**Usage**

Without instance.
Object will be created using given class name.
```
$complexObject = null;
$success = \PHPGson2\Gson::fromJson(
    $complexObject,
    '{"age":35, "hydratorTestObject":{"username":"raff"}}',
    \PHPGson2\Extractor::EXTRACTION_MODE_METHOD,
    ComplexHydrationObject::class
);
```

With manual instantiation.
Sub-objects will be created automatically in both cases.

```
$complexObject = new ComplexHydrationObject();
$success = \PHPGson2\Gson::fromJson(
    $complexObject,
    '{"age":35, "hydratorTestObject":{"username":"raff"}}'
);
```

```
$object = new MainObject();
$jsonString = Gson::toJson($object);
```
