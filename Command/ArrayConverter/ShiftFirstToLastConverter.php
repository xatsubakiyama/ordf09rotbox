<?php
/**
 * Created by PhpStorm.
 * User: tsubakiyama
 * Date: 2019/02/08
 * Time: 14:28
 */

//require_once '../../Board.php';
require_once 'ArrayConverterInterface.php';

class ShiftFirstToLastConverter implements ArrayConverterInterface
{
    /**
     * 引数で渡された配列の最初の要素を取り出して最後に付け足した配列を返す
     *
     * @param array $array
     * @return array
     */
    public function execute(array $array): array
    {
        $max = count($array);
        $dstArr = [];

        for($i = 0; $i < $max - 1; $i++) {
            $dstArr[] = $array[$i + 1];
        }
        $dstArr[] = $array[0];

        return $dstArr;
    }
}
