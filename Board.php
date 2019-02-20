<?php
/**
 * Created by PhpStorm.
 * User: tsubakiyama
 * Date: 2019/02/01
 * Time: 16:44
 */

class Board
{
    private $boardMatrix = [
        [1, 2, 3],
        [4, 5, 6],
        [7, 8, 9],
    ];


    public function getBoardMatrix(): array
    {
        return $this->boardMatrix;
    }

    /**
     * 行列から指定された行を返す
     *
     * @param int $index 行列の行を指定するindex(0スタート)
     *
     * @return array 行を表す1次配列
     */
    public function getRow(int $index): array
    {
        return $this->boardMatrix[$index];
    }

    /**
     * 行列の指定された行を変更して変更後の行列を返す
     *
     * @param int $index
     *
     * @param array $row
     * @return array
     */
    public function setRow(int $index, array $row): array
    {
        $this->boardMatrix[$index] = $row;

        return $this->boardMatrix;
    }

    /**
     * 行列から指定された列を返す
     *
     * @param int $index
     *
     * @return array
     */
    public function getColumn(int $index): array
    {
        $column = [];

        for($i = 0; $i < 3; $i++)
        {
            $column[$i] = $this->boardMatrix[$i][$index];
        }

        return $column;
    }

    /**
     * 行列の指定された列を変更して変更後の行列を返す
     *
     * @param int $index
     *
     * @param array $column
     * @return array
     */
    public function setColumn(int $index, array $column): array
    {
        $this->boardMatrix[0][$index] = $column[0];
        $this->boardMatrix[1][$index] = $column[1];
        $this->boardMatrix[2][$index] = $column[2];

        return $this->boardMatrix;
    }


    /**
     * 最初の値を最後に移動して変更後の行または列を返す
     *
     * @param array $arr
     * @return array
     */
    public function swapArray(array $arr): array
    {

        $dstArr = [];

        $dstArr[0] = $arr[1];
        $dstArr[1] = $arr[2];
        $dstArr[2] = $arr[0];


        return $dstArr;
    }


    /**
     * 最後の値を最初に移動して変更後の行または列を返す
     *
     * @param array $arr
     * @return array
     */
    public function swapReverseArray(array $arr): array
    {
        $dstArr = [];

        $dstArr[0] = $arr[2];
        $dstArr[1] = $arr[0];
        $dstArr[2] = $arr[1];


        return $dstArr;
    }
}