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
    /**
     * 引数の配列の最後の要素を取り出して最初に移動させた配列を返す
     */
    public function execute(array $array): array
    {
        $max = count($array);

        $dstArr = [];

        $dstArr[0] = $array[$max - 1];

        for($i = 1; $i < $max; $i ++) {
            $dstArr[$i] = $array[$i - 1];
        }

        return $dstArr;
    }
}
