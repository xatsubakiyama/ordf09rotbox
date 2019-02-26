<?php
/**
 * Created by PhpStorm.
 * User: tsubakiyama
 * Date: 2019/02/22
 * Time: 16:56
 */

namespace Tsubakiyama\PhpPracticePackage\Command\Factory;

use PHPUnit\Framework\TestCase;
use Tsubakiyama\PhpPracticePackage\ArrayRotation\Command\ArrayConverter\ShiftFirstToLastConverter;
use Tsubakiyama\PhpPracticePackage\ArrayRotation\Command\ArrayConverter\ShiftLastToFirstConverter;
use Tsubakiyama\PhpPracticePackage\ArrayRotation\Command\ColumnShiftCommand;
use Tsubakiyama\PhpPracticePackage\ArrayRotation\Command\Factory\NormalCommand3_3Factory;
use Tsubakiyama\PhpPracticePackage\ArrayRotation\Command\RowShiftCommand;

class NormalCommand3_3FactoryTest extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function testCreateCommand($string, $expectedInstance)
    {
        $factory3_3 = new NormalCommand3_3Factory();
        $actual = $factory3_3->createCommand($string);

        $this->assertEquals($expectedInstance, $actual);
    }

    public function dataProvider()
    {
        return [
            ['a', new RowShiftCommand(0, new ShiftFirstToLastConverter())],
            ['b', new RowShiftCommand(1, new ShiftFirstToLastConverter())],
            ['d', new ColumnShiftCommand(0, new ShiftLastToFirstConverter())],
            ['g', new RowShiftCommand(2, new ShiftLastToFirstConverter())],
            ['j', new ColumnShiftCommand(2, new ShiftFirstToLastConverter())],
        ];
    }
}