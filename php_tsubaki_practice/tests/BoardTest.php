<?php
/**
 * Created by PhpStorm.
 * User: tsubakiyama
 * Date: 2019/02/22
 * Time: 19:24
 */

namespace Tsubakiyama\PhpPracticePackage;


use InvalidArgumentException;
use PHPUnit\Framework\TestCase;
use Tsubakiyama\PhpPracticePackage\ArrayRotation\Board;

/**
 * 正しくない行列を入力したらエラーメッセージが返される
 *
 * Class BoardTest
 * @package Tsubakiyama\PhpPracticePackage
 */
class BoardTest extends TestCase
{
    /**
     * @test
     * @expectedException InvalidArgumentException
     * @expectedExceptionMessage 正しい行列を入力してください
     */
    public function testConstruct()
    {
        /**
         * 不正な行列。
         */
        $inputMatrix = [
            [1, 2, 3],
            [4, 5],
            [7, 8, 9],
        ];

        /**
         * 「正しい行列を入力してください」スクリプト終了。
         */
        $board = new Board($inputMatrix);

    }
}