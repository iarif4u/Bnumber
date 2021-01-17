<?php


namespace iarif4u\bnumbeer;


use Illuminate\Support\Facades\Facade;

class Bnumber extends Facade
{
    /**
     * Get bangle number from english number
     *
     * @param $number
     * @return string
     */
    public function convert($number): string
    {
        return banglaNumber($number);
    }
}
