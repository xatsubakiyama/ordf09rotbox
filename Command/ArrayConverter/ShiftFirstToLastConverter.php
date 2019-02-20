<?php
/**
 * Created by PhpStorm.
 * User: tsubakiyama
 * Date: 2019/02/08
 * Time: 14:28
 */

require_once 'ArrayConverterInterface.php';

class ShiftFirstToLastConverter implements ArrayConverterInterface
{
    public function execute(array $array): array
    {
        $dstArr = [];

        $dstArr[0] = $array[1];
        $dstArr[1] = $array[2];
        $dstArr[2] = $array[0];

        return $dstArr;
    }
}