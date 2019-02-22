<?php
/**
 * Created by PhpStorm.
 * User: tsubakiyama
 * Date: 2019/02/22
 * Time: 17:32
 */

namespace Tsubakiyama\PhpPracticePackage\Factory;

use PHPUnit\Framework\TestCase;
use Tsubakiyama\PhpPracticePackage\ArrayRotation\Command\ArrayConverter\ShiftFirstToLastConverter;
use Tsubakiyama\PhpPracticePackage\ArrayRotation\Command\ArrayConverter\ShiftLastToFirstConverter;
use Tsubakiyama\PhpPracticePackage\ArrayRotation\Command\ColumnShiftCommand;
use Tsubakiyama\PhpPracticePackage\ArrayRotation\Command\Factory\NormalCommand3_4Factory;
use Tsubakiyama\PhpPracticePackage\ArrayRotation\Command\RowShiftCommand;

class NormalCommand3_4FactoryTest extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function testCreateCommand($string, $expectedInstance)
    {
        $factory3_4 = new NormalCommand3_4Factory();
        $actual = $factory3_4->createCommand($string);

        $this->assertEquals($expectedInstance, $actual);
    }

    public function dataProvider()
    {
        return [
            ['a', new RowShiftCommand(0, new ShiftFirstToLastConverter())],
            ['b', new RowShiftCommand(1, new ShiftFirstToLastConverter())],
            ['d', new ColumnShiftCommand(0, new ShiftLastToFirstConverter())],
            ['h', new RowShiftCommand(2, new ShiftLastToFirstConverter())],
            ['k', new ColumnShiftCommand(3, new ShiftFirstToLastConverter())],
        ];
    }
}