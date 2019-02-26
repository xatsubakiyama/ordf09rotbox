<?php
/**
 * Created by PhpStorm.
 * User: tsubakiyama
 * Date: 2019/02/22
 * Time: 16:30
 */

namespace Tsubakiyama\PhpPracticePackage\Command\ArrayConverter;


use PHPUnit\Framework\TestCase;
use Tsubakiyama\PhpPracticePackage\ArrayRotation\Command\ArrayConverter\ShiftLastToFirstConverter;

class ShiftLastToFirstConverterTest extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function testExecute($arrayToTest, $expectedArray)
    {
        $converter = new ShiftLastToFirstConverter();
        $actual = $converter->execute($arrayToTest);

        $this->assertEquals($expectedArray, $actual);
    }

    public function dataProvider()
    {
        /** @var  $largeArray 1000この要素が全て１ */
        $largeArray = array_fill(0, 1000, 1);

        return [
            [[1, 2, 3], [3, 1, 2]],
            [[1, 2, 3, 4], [4, 1, 2, 3]],
            [[1], [1]],
            [[$largeArray], [$largeArray]],
        ];
    }
}