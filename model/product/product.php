<?php

namespace Model;

class Product
{
    public $name;
    public $type_product;
    public $producer;
    public $amount;
    public $image;


    public function __construct($name, $type_product, $producer, $amount, $image)
    {
        $this->name = $name;
        $this->type_product = $type_product;
        $this->producer = $producer;
        $this->amount = $amount;
        $this->image = $image;

    }
}