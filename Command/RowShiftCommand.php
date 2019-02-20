<?php
/**
 * Created by PhpStorm.
 * User: tsubakiyama
 * Date: 2019/02/08
 * Time: 14:33
 */

require_once 'ArrayConverter/ArrayConverterInterface.php';
require_once 'CommandInterface.php';


class RowShiftCommand implements CommandInterface
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
        $srcRow = $board->getRow($this->index);

        $dstRow = $this->arrayConverter->execute($srcRow, $board);

        return $board->setRow($this->index, $dstRow);
    }

}
