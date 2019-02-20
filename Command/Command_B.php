<?php
/**
 * Created by PhpStorm.
 * User: tsubakiyama
 * Date: 2019/02/08
 * Time: 14:33
 */

require_once 'ArrayConverter/ShiftFirstToLastConverter.php';
require_once 'CommandInterface.php';

/**
 * コマンドBを実行して変更後の行列を返す
 *
 * Class Command_B
 */
class Command_B implements CommandInterface
{

    public function execute(Board $board): Board
    {
        $srcRow = $board->getRow(1);

        $converter = new ShiftFirstToLastConverter();
        $dstRow = $converter->execute($srcRow);

        return $board->setRow(1, $dstRow);
    }

}
