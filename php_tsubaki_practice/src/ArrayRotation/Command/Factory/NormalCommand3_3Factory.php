<?php
/**
 * Created by PhpStorm.
 * User: tsubakiyama
 * Date: 2019/02/08
 * Time: 20:01
 */

namespace Tsubakiyama\PhpPracticePackage\ArrayRotation\Command\Factory;

use Tsubakiyama\PhpPracticePackage\ArrayRotation\Command\ArrayConverter\ShiftFirstToLastConverter;
use Tsubakiyama\PhpPracticePackage\ArrayRotation\Command\ArrayConverter\ShiftLastToFirstConverter;
use Tsubakiyama\PhpPracticePackage\ArrayRotation\Command\ColumnShiftCommand;
use Tsubakiyama\PhpPracticePackage\ArrayRotation\Command\RowShiftCommand;
use Tsubakiyama\PhpPracticePackage\ArrayRotation\Command\CommandInterface;

class NormalCommand3_3Factory implements FactoryInterface
{
    private $commands;


    /**
     * 読み込んだ文字に応じてインスタンスを返す
     *
     * NormalCommand3_3Factory constructor.
     */
    public function __construct()
    {
        $this->commands = array(
            'a' => new RowShiftCommand(0, new ShiftFirstToLastConverter()),
            'b' => new RowShiftCommand(1, new ShiftFirstToLastConverter()),
            'c' => new RowShiftCommand(2, new ShiftFirstToLastConverter()),
            'd' => new ColumnShiftCommand(0, new ShiftLastToFirstConverter()),
            'e' => new ColumnShiftCommand(1, new ShiftLastToFirstConverter()),
            'f' => new ColumnShiftCommand(2, new ShiftLastToFirstConverter()),
            'g' => new RowShiftCommand(2, new ShiftLastToFirstConverter()),
            'h' => new RowShiftCommand(1, new ShiftLastToFirstConverter()),
            'i' => new RowShiftCommand(0, new ShiftLastToFirstConverter()),
            'j' => new ColumnShiftCommand(2, new ShiftFirstToLastConverter()),
            'k' => new ColumnShiftCommand(1, new ShiftFirstToLastConverter()),
            'l' => new ColumnShiftCommand(0, new ShiftFirstToLastConverter()),
        );
    }


    public function createCommand(string $commandName): CommandInterface
    {
        return $this->commands[$commandName];
    }

}