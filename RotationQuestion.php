<?php
/**
 * Created by PhpStorm.
 * User: tsubakiyama
 * Date: 2019/01/25
 * Time: 15:42
 */





/**
 * 行列から指定された行を返す
 *
 * @param int $index 行列の行を指定するindex(0スタート)
 * @param array $boardMatrix 行列を表す2次配列
 * @return array 行を表す1次配列
 */
function getRow(int $index, array $boardMatrix): array
{
    return $boardMatrix[$index];
}

/**
 * 行列の指定された行を変更して変更後の行列を返す
 *
 * @param int $index
 * @param array $boardMatrix
 * @param array $row
 * @return array
 */
function setRow(int $index, array $boardMatrix, array $row): array
{
    $boardMatrix[$index] = $row;

    return $boardMatrix;
}

/**
 * 行列から指定された列を返す
 *
 * @param int $index
 * @param array $boardMatrix
 * @return array
 */
function getColumn(int $index, array $boardMatrix): array
{
    $column = [];

    for($i = 0; $i < 3; $i++)
    {
        $column[$i] = $boardMatrix[$i][$index];
    }

    return $column;
}

/**
 * 行列の指定された列を変更して変更後の行列を返す
 *
 * @param int $index
 * @param array $boardMatrix
 * @param array $column
 * @return array
 */
function setColumn(int $index, array $boardMatrix, array $column): array
{
    $boardMatrix[0][$index] = $column[0];
    $boardMatrix[1][$index] = $column[1];
    $boardMatrix[2][$index] = $column[2];

    return $boardMatrix;
}


/**
 * 最初の値を最後に移動して変更後の行または列を返す
 *
 * @param array $arr
 * @return array
 */
function swapArray(array $arr): array
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
function swapReverseArray(array $arr): array
{
    $dstArr = [];

    $dstArr[0] = $arr[2];
    $dstArr[1] = $arr[0];
    $dstArr[2] = $arr[1];


    return $dstArr;
}


/**
 * コマンドAを実行して変更後の行列を返す
 *
 * @param array $boardMatrix
 * @return array
 */
function command_A(array $boardMatrix): array
{
    $srcRow = getRow(0, $boardMatrix);

    $dstRow = swapArray($srcRow);

    return setRow(0, $boardMatrix, $dstRow);
}


function command_B(array $boardMatrix): array
{
    $srcRow = getRow(1, $boardMatrix);

    $dstRow = swapArray($srcRow);

    return setRow(1, $boardMatrix, $dstRow);
}


function command_C($boardMatrix)
{
    $srcRow = getRow(2, $boardMatrix);

    $dstRow = swapArray($srcRow);

    return setRow(2, $boardMatrix, $dstRow);
}


function command_D($boardMatrix)
{
    $srcColumn = getColumn(0, $boardMatrix);

    $dstColumn = swapReverseArray($srcColumn);

    return setColumn(0, $boardMatrix, $dstColumn);
}


function command_E($boardMatrix)
{
    $srcColumn = getColumn(1, $boardMatrix);

    $dstColumn = swapReverseArray($srcColumn);

    return setColumn(1, $boardMatrix, $dstColumn);
}


function command_F($boardMatrix)
{
    $srcColumn = getColumn(2, $boardMatrix);

    $dstColumn = swapReverseArray($srcColumn);

    return setColumn(2, $boardMatrix, $dstColumn);
}


function command_G($boardMatrix)
{
    $srcRow = getRow(2, $boardMatrix);

    $dstRow = swapReverseArray($srcRow);

    return setRow(2, $boardMatrix, $dstRow);
}


function command_H($boardMatrix)
{
    $srcRow = getRow(1, $boardMatrix);

    $dstRow = swapReverseArray($srcRow);

    return setRow(1, $boardMatrix, $dstRow);
}


function command_I($boardMatrix)
{
    $srcRow = getRow(0, $boardMatrix);

    $dstRow = swapReverseArray($srcRow);

    return setRow(0, $boardMatrix, $dstRow);
}


function command_J($boardMatrix)
{
    $srcColumn = getColumn(2, $boardMatrix);

    $dstColumn = swapArray($srcColumn);

    return setColumn(2, $boardMatrix, $dstColumn);
}


function command_K($boardMatrix)
{
    $srcColumn = getColumn(1, $boardMatrix);

    $dstColumn = swapArray($srcColumn);

    return setColumn(1, $boardMatrix, $dstColumn);
}


function command_L($boardMatrix)
{
    $srcColumn = getColumn(0, $boardMatrix);

    $dstColumn = swapArray($srcColumn);

    return setColumn(0, $boardMatrix, $dstColumn);
}


function displayBoard($boardMatrix)
{
    for($i = 0; $i < 3; $i++)
    {
        for($k = 0; $k < 3; $k++)
        {
            echo $boardMatrix[$i][$k];
        }
        if($i !== 2)
        {
            echo "/";
        }
    }
}


function main(array $boardMatrix, string $commands): void
{
    $count = strlen($commands);

    for ($i = 0; $i < $count; $i++) {
        switch ($commands[$i]) {
            case 'a':
                $boardMatrix = command_A($boardMatrix);
                break;

            case 'b';
                $boardMatrix = command_B($boardMatrix);
                break;

            case 'c';
                $boardMatrix = command_C($boardMatrix);
                break;

            case 'd';
                $boardMatrix = command_D($boardMatrix);
                break;

            case 'e';
                $boardMatrix = command_E($boardMatrix);
                break;

            case 'f';
                $boardMatrix = command_F($boardMatrix);
                break;

            case 'g';
                $boardMatrix = command_G($boardMatrix);
                break;

            case 'h';
                $boardMatrix = command_H($boardMatrix);
                break;

            case 'i';
                $boardMatrix = command_I($boardMatrix);
                break;

            case 'j';
                $boardMatrix = command_J($boardMatrix);
                break;

            case 'k';
                $boardMatrix = command_K($boardMatrix);
                break;

            case 'l';
                $boardMatrix = command_L($boardMatrix);
                break;
        }
    }

    displayBoard($boardMatrix);

}
