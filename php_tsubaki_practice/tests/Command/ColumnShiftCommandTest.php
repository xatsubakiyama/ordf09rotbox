<?php
/**
 * Created by PhpStorm.
 * User: tsubakiyama
 * Date: 2019/02/22
 * Time: 18:42
 */

namespace Tsubakiyama\PhpPracticePackage\Command;


use PHPUnit\Framework\TestCase;
use Tsubakiyama\PhpPracticePackage\ArrayRotation\Board;
use Tsubakiyama\PhpPracticePackage\ArrayRotation\Command\ArrayConverter\ShiftLastToFirstConverter;
use Tsubakiyama\PhpPracticePackage\ArrayRotation\Command\ColumnShiftCommand;

/**
 * 指定された列の要素を入れ替えて行列を返す
 *
 * Class ColumnShiftCommandTest
 * @package Tsubakiyama\PhpPracticePackage\Command
 */
class ColumnShiftCommandTest extends TestCase
{
    /**
     * @param $index
     * @param $arrayConverter
     * @param $expectedMatrix
     * @dataProvider dataProvider
     */
    public function testExecute($index, $arrayConverter, $expectedMatrix)
    {
        $board = new Board([
            [1, 2, 3],
            [4, 5, 6],
            [7, 8, 9],
        ]);

        $shiftColumn = new ColumnShiftCommand($index, $arrayConverter);
        /** @var Board $dstMatrix */
        $dstMatrix = $shiftColumn->execute($board);
        /** @var array $actualMatrix */
        $actualMatrix = $dstMatrix->getMatrix();


        $this->assertEquals($expectedMatrix, $actualMatrix);
    }

    public function dataProvider()
    {
        /** @var array $dstMatrix */
        $dstMatrix = [
            [7, 2, 3],
            [1, 5, 6],
            [4, 8, 9],
        ];

        return [
            [0, new ShiftLastToFirstConverter(), $dstMatrix],
        ];
    }
}