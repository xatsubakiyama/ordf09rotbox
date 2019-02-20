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
 * コマンドKを実行して変更後の行列を返す
 *
 * Class Command_K
 */
class Command_K implements CommandInterface
{
    public function execute(Board $board): Board
    {
        $srcColumn = $board->getColumn(1);

        $converter = new ShiftFirstToLastConverter();
        $dstColumn = $converter->execute($srcColumn);

        return $board->setColumn(1, $dstColumn);
    }

}
