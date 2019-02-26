<?php
/**
 * Created by PhpStorm.
 * User: tsubakiyama
 * Date: 2019/02/22
 * Time: 17:19
 */

namespace Tsubakiyama\PhpPracticePackage\Command\Factory;

use PHPUnit\Framework\TestCase;
use Tsubakiyama\PhpPracticePackage\ArrayRotation\Command\ArrayConverter\ShiftFirstToLastConverter;
use Tsubakiyama\PhpPracticePackage\ArrayRotation\Command\ArrayConverter\ShiftLastToFirstConverter;
use Tsubakiyama\PhpPracticePackage\ArrayRotation\Command\ColumnShiftCommand;
use Tsubakiyama\PhpPracticePackage\ArrayRotation\Command\Factory\NormalCommand4_4Factory;
use Tsubakiyama\PhpPracticePackage\ArrayRotation\Command\RowShiftCommand;

class NormalCommand4_4FactoryTest extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function testCreateCommand($string, $expectedInstance)
    {
        $factory4_4 = new NormalCommand4_4Factory();
        $actual = $factory4_4->createCommand($string);

        $this->assertEquals($expectedInstance, $actual);
    }

    public function dataProvider()
    {
        return [
            ['a', new RowShiftCommand(0, new ShiftFirstToLastConverter())],
            ['b', new RowShiftCommand(1, new ShiftFirstToLastConverter())],
            ['e', new ColumnShiftCommand(0, new ShiftLastToFirstConverter())],
            ['i', new RowShiftCommand(3, new ShiftLastToFirstConverter())],
            ['m', new ColumnShiftCommand(3, new ShiftFirstToLastConverter())],
        ];
    }
}