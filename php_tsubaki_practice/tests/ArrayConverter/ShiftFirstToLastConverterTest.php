<?php
/**
 * Created by PhpStorm.
 * User: tsubakiyama
 * Date: 2019/02/22
 * Time: 14:43
 */

namespace Tsubakiyama\PhpPracticePackage;


use PHPUnit\Framework\TestCase;
use Tsubakiyama\PhpPracticePackage\ArrayRotation\Command\ArrayConverter\ShiftFirstToLastConverter;

class ShiftFirstToLastConverterTest extends TestCase
{

    /**
     * @dataProvider dataProvider
     */
    public function testExecute($arrayToTest, $expectedArray)
    {

        $converter = new ShiftFirstToLastConverter();

        $actual = $converter->execute($arrayToTest);
        $this->assertEquals($expectedArray, $actual);

    }

    public function dataProvider()
    {
        /** @var  $largeArray 1000この要素が全て１ */
        $largeArray = array_fill(0, 1000, 1);

        return [
            [[1, 2, 3], [2, 3, 1]],
            [[1, 2, 3, 4], [2, 3, 4, 1]],
            [[1], [1]],
            [$largeArray, $largeArray]
        ];
    }

//    public function testExecuteFunctional()
//    {
//
//        $array = range(0, 1000);
//        $converter = new ShiftFirstToLastConverter();
//
//        $actual = $converter->execute($array);
//
//
//        $this->assertEquals(0 ,$actual[999]);
//        $this->assertEquals(1 ,$actual[0]);
//        foreach($actual as $index => $value) {          //$index番目の要素の値は$value
//            if ($index === 999) {
//                $this->assertEquals(0, $value);
//            } else {
//                $this->assertEquals($index + 1, $value);
//            }
//        }
//
//    }
//
//    public function longDataProvider()
//    {}

}
