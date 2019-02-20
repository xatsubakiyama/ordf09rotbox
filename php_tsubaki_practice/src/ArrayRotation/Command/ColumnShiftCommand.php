<?php
/**
 * Created by PhpStorm.
 * User: tsubakiyama
 * Date: 2019/02/08
 * Time: 14:33
 */

namespace Tsubakiyama\PhpPracticePackage\ArrayRotation\Command;

use Tsubakiyama\PhpPracticePackage\ArrayRotation\Board;
use Tsubakiyama\PhpPracticePackage\ArrayRotation\Command\ArrayConverter\ArrayConverterInterface;

class ColumnShiftCommand implements CommandInterface
{
    private $index;
    private $arrayConverter;

    public function __construct(int $index, ArrayConverterInterface $arrayConverter)
    {
        $this->index = $index;
        $this->arrayConverter = $arrayConverter;
    }

    public function execute(Board $board): Board
    {
        $srcColumn = $board->getColumn($this->index);

        $dstColumn = $this->arrayConverter->execute($srcColumn);

        return $board->setColumn($this->index, $dstColumn);
    }
}
