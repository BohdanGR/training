<?php


namespace Training\Debug\Block;


use Magento\Framework\View\Element\Template;

class Debug extends \Magento\Framework\View\Element\Template
{
    public $debug;


    public function __construct(
        Template\Context $context,
        array $data = []
    )
    {
        parent::__construct($context, $data);
        $this->debug = $data;
    }


}