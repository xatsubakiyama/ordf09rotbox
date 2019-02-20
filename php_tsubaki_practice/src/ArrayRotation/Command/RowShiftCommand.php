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

class RowShiftCommand implements CommandInterface
{
    private $index;
    private $arrayConverter;

    public function __construct(int $index, ArrayConverterInterface $arrayConverter)
    {
        $this->index = $index;
        $this->arrayConverter = $arrayConverter;
    }

    /**
     * 行の要素を入れ替えて行列を返す
     *
     * @param Board $board
     * @return Board
     */
    public function execute(Board $board): Board
    {
        $srcRow = $board->getRow($this->index);

        $dstRow = $this->arrayConverter->execute($srcRow);

        return $board->setRow($this->index, $dstRow);
    }

}
