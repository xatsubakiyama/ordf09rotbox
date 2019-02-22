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

require_once 'FactoryInterface.php';

class NormalCommand4_4Factory implements FactoryInterface
{

    private $commands;

    public function __construct()
    {
        $this->commands = array(
            'a' => new RowShiftCommand(0, new ShiftFirstToLastConverter()),
            'b' => new RowShiftCommand(1, new ShiftFirstToLastConverter()),
            'c' => new RowShiftCommand(2, new ShiftFirstToLastConverter()),
            'd' => new RowShiftCommand(3, new ShiftFirstToLastConverter()),
            'e' => new ColumnShiftCommand(0, new ShiftLastToFirstConverter()),
            'f' => new ColumnShiftCommand(1, new ShiftLastToFirstConverter()),
            'g' => new ColumnShiftCommand(2, new ShiftLastToFirstConverter()),
            'h' => new ColumnShiftCommand(3, new ShiftLastToFirstConverter()),
            'i' => new RowShiftCommand(3, new ShiftLastToFirstConverter()),
            'j' => new RowShiftCommand(2, new ShiftLastToFirstConverter()),
            'k' => new RowShiftCommand(1, new ShiftLastToFirstConverter()),
            'l' => new RowShiftCommand(0, new ShiftLastToFirstConverter()),
            'm' => new ColumnShiftCommand(3, new ShiftFirstToLastConverter()),
            'n' => new ColumnShiftCommand(2, new ShiftFirstToLastConverter()),
            'o' => new ColumnShiftCommand(1, new ShiftFirstToLastConverter()),
            'p' => new ColumnShiftCommand(0, new ShiftFirstToLastConverter()),

        );
    }

    public function createCommand(string $commandName): CommandInterface
    {
        return $this->commands[$commandName];
    }

}