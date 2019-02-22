<?php
/**
 * Created by PhpStorm.
 * User: tsubakiyama
 * Date: 2019/02/15
 * Time: 14:35
 */

namespace Tsubakiyama\PhpPracticePackage\ArrayRotation\Command\Factory;

use Tsubakiyama\PhpPracticePackage\ArrayRotation\Command\ArrayConverter\ShiftFirstToLastConverter;
use Tsubakiyama\PhpPracticePackage\ArrayRotation\Command\ArrayConverter\ShiftLastToFirstConverter;
use Tsubakiyama\PhpPracticePackage\ArrayRotation\Command\ColumnShiftCommand;
use Tsubakiyama\PhpPracticePackage\ArrayRotation\Command\CommandInterface;
use Tsubakiyama\PhpPracticePackage\ArrayRotation\Command\RowShiftCommand;

class NormalCommand5_5Factory implements FactoryInterface
{

    private $commands;

    public function __construct()
    {
        $this->commands = array(
            'a' => new RowShiftCommand(0, new ShiftFirstToLastConverter()),
            'b' => new RowShiftCommand(1, new ShiftFirstToLastConverter()),
            'c' => new RowShiftCommand(2, new ShiftFirstToLastConverter()),
            'd' => new RowShiftCommand(3, new ShiftFirstToLastConverter()),
            'e' => new RowShiftCommand(4, new ShiftFirstToLastConverter()),
            'f' => new ColumnShiftCommand(0, new ShiftLastToFirstConverter()),
            'g' => new ColumnShiftCommand(1, new ShiftLastToFirstConverter()),
            'h' => new ColumnShiftCommand(2, new ShiftLastToFirstConverter()),
            'i' => new ColumnShiftCommand(3, new ShiftLastToFirstConverter()),
            'j' => new ColumnShiftCommand(4, new ShiftLastToFirstConverter()),
            'k' => new RowShiftCommand(4, new ShiftLastToFirstConverter()),
            'l' => new RowShiftCommand(3, new ShiftLastToFirstConverter()),
            'm' => new RowShiftCommand(2, new ShiftLastToFirstConverter()),
            'n' => new RowShiftCommand(1, new ShiftLastToFirstConverter()),
            'o' => new RowShiftCommand(0, new ShiftLastToFirstConverter()),
            'p' => new ColumnShiftCommand(4, new ShiftFirstToLastConverter()),
            'q' => new ColumnShiftCommand(3, new ShiftFirstToLastConverter()),
            'r' => new ColumnShiftCommand(2, new ShiftFirstToLastConverter()),
            's' => new ColumnShiftCommand(1, new ShiftFirstToLastConverter()),
            't' => new ColumnShiftCommand(0, new ShiftFirstToLastConverter()),

        );
    }

    public function createCommand(string $commandName): CommandInterface
    {
        return $this->commands[$commandName];
    }

}