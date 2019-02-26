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
use Tsubakiyama\PhpPracticePackage\ArrayRotation\Command\Factory\NormalCommand5_5Factory;
use Tsubakiyama\PhpPracticePackage\ArrayRotation\Command\RowShiftCommand;

class NormalCommand5_5FactoryTest extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function testCreateCommand($string, $expectedInstance)
    {
        $factory5_5 = new NormalCommand5_5Factory();
        $actual = $factory5_5->createCommand($string);

        $this->assertEquals($expectedInstance, $actual);
    }

    public function dataProvider()
    {
        return [
            ['a', new RowShiftCommand(0, new ShiftFirstToLastConverter())],
            ['b', new RowShiftCommand(1, new ShiftFirstToLastConverter())],
            ['f', new ColumnShiftCommand(0, new ShiftLastToFirstConverter())],
            ['k', new RowShiftCommand(4, new ShiftLastToFirstConverter())],
            ['p', new ColumnShiftCommand(4, new ShiftFirstToLastConverter())],
        ];
    }
}