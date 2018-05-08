<?php

namespace Unit1\FirstModule\MagentoU;

class Test
{
    public $test1ProductRepository;

    public function __construct(
        \Magento\Catalog\Api\ProductRepositoryInterface $productRepository,
        \Magento\Catalog\Model\ProductFactory $productFactory,
        \Magento\Checkout\Model\Session $session,
        \Training\Test\Api\ProductRepositoryInterface $test1ProductRepository,
        $justAParameter = false,
        array $data
        ) {
            $this->test1ProductRepository = $test1ProductRepository;
        }



}

