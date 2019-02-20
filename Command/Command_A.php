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
 * コマンドAを実行して変更後の行列を返す
 *
 * Class Command_A
 */
class Command_A implements CommandInterface
{
    public function execute(Board $board): Board
    {
        $srcRow = $board->getRow(0);

        $converter = new ShiftFirstToLastConverter();
        $dstRow = $converter->execute($srcRow);

        return $board->setRow(0, $dstRow);
    }

}
