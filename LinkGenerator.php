<?php

class LinkGenerator
{
    protected $priceGenerator;

    public function __construct($priceGenerator)
    {
        $this->priceGenerator = $priceGenerator;
    }

    public function productLink($elem)
    {
        $lowestPrice = $this->priceGenerator->lowestPrice($elem['prices']);

        try {
            $prices = array_flip($elem['prices']);
        } catch (Exception $e) {
            return null;
        }

        $vendor = $prices[$lowestPrice];

        if (isset($elem['links'][$vendor]) && $elem['links'][$vendor] && $elem['links'][$vendor] !== '') {
            return sprintf('<a href="%s" target="_blank" class="btn btn-block btn-link">Go to store</a>', $elem['links'][$vendor]);
        }

        return null;
    }
}
