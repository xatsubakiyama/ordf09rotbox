<?php
/**
 * Created by PhpStorm.
 * User: tsubakiyama
 * Date: 2019/02/08
 * Time: 14:32
 */

require_once 'ArrayConverterInterface.php';

class ShiftLastToFirstConverter implements ArrayConverterInterface
{
    public function execute(array $array): array
    {
        $dstArr = [];

        $dstArr[0] = $array[2];
        $dstArr[1] = $array[0];
        $dstArr[2] = $array[1];


        return $dstArr;
    }

}