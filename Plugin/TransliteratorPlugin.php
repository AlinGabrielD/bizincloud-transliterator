<?php

namespace BizInCloud\Transliterator\Plugin;

class TransliteratorPlugin {

    public function beforeFilter(\Magento\Framework\Filter\Translit $subject, $string){
        $convertTable = [
            'ă' => 'a',
            'î' => 'i',
            'ș' => 's',
            'ț' => 't',
            'â' => 'a',
            'Ă' => 'A',
            'Î' => 'I',
            'Ș' => 'S',
            'Ț' => 'T',
            'Â' => 'A',
            'ş' => 's',
            'Ş' => 'S',
            'ţ' => 't',
            'Ţ' => 't',
        ];
        return str_replace(array_keys($convertTable), array_values($convertTable), $string);
    }

}