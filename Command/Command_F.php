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
 * コマンドFを実行して変更後の行列を返す
 *
 * Class Command_F
 */
class Command_F implements CommandInterface
{
    public function execute(Board $board): Board
    {
        $srcColumn = $board->getColumn(2);

        $swap = new ShiftReverseArray;
        $dstColumn = $swap->shiftLastToFirst($srcColumn);

        return $board->setColumn(2, $dstColumn);
    }

}
