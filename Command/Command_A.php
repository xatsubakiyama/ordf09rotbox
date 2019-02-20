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
 * コマンドAを実行して変更後の行列を返す
 *
 * Class Command_A
 */
class Command_A implements CommandInterface
{
    private $action;

    public function __construct($action)  //直す？
    {
        $this->action = $action;
    }


    public function execute(Board $board): Board
    {
        $srcRow = $board->getRow(0);

        $dstRow = $this->action->shiftFirstToLast($srcRow);

        return $board->setRow(0, $dstRow);
    }

}
