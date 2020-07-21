# Magento 2 Transliterator Extension

Fix Romanian diacritics in Magento 2 / Includes a Helper to easy access translit function.

## Installation
* Using composer: `composer require bizincloud/magento2-transliterator`
* Do not forget about: `bin/magento setup:upgrade`

## An example using the Helper
```php
<?php

use BizInCloud\Transliterator\Helper\Transliterator;

class SomeClass {

    private $transliterator;

    public function __construct(Transliterator $transliterator){
        $this->transliterator = $transliterator;
    }

    public function someMethod(){
        $string =  $this->transliterator->transliterate("Words containing diacritics: casă, șină, țară.");
        // $string will become: "Words containing diacritics: casa, sina, tara."
    }

    ...
}
