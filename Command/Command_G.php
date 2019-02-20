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
 * コマンドGを実行して変更後の行列を返す
 *
 * Class Command_G
 */
class Command_G implements CommandInterface
{
    public function execute(Board $board): Board
    {
        $srcRow = $board->getRow(2);

        $swap = new ShiftReverseArray;
        $dstRow = $swap->shiftLastToFirst($srcRow);

        return $board->setRow(2, $dstRow);
    }

}
