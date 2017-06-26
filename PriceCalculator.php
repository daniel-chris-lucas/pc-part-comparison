<?php

class PriceCalculator
{
    public function lowestPrice(array $priceList)
    {
        return array_reduce($priceList, function ($agg, $item) {
            if (! $agg || doubleval($agg) > doubleval($item)) {
                $agg = $item;
            }

            return $agg;
        }, null);
    }

    public function totalPrice(array $data)
    {
        return array_reduce($data, function ($agg, $elem) {
            return $agg + $this->lowestPrice($elem['prices']);
        }, 0) / 100;
    }
}
