<?php

namespace BizInCloud\Transliterator\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Framework\Filter\FilterManager;

class Transliterator extends AbstractHelper
{
    protected $filterManager;
    
    public function __construct(
        \Magento\Framework\App\Helper\Context $context,
        FilterManager $filterManager
    ){
        $this->filterManager = $filterManager;
        parent::__construct($context);
    }

    public function transliterate($data){
        if (is_array($data)){
            foreach($data as $k => $v){
                if (is_string($v)) $data[$k] = $this->filterManager->translit($v);
            }
        }
        if (is_string($data)) $data = $this->filterManager->translit($data);
        return $data;
    }
}