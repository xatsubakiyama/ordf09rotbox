<?php
/**
 * Created by PhpStorm.
 * User: tsubakiyama
 * Date: 2019/02/08
 * Time: 14:33
 */

require_once '../Board.php';
require_once '../Action/ShiftArray.php';
require_once 'CommandInterface.php';

/**
 * コマンドBを実行して変更後の行列を返す
 *
 * Class Command_B
 */
class Command_B implements CommandInterface
{
    private $action;

    public function __construct($action)
    {
        $this->action = $action;
    }

    public function execute(Board $board): Board
    {
        $srcRow = $board->getRow(1);

        $swap = new ShiftArray;
        $dstRow = $swap->shiftFirstToLast($srcRow);

        return $board->setRow(1, $dstRow);
    }

}
