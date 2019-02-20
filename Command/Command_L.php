<?php
/**
 * Created by PhpStorm.
 * User: tsubakiyama
 * Date: 2019/02/08
 * Time: 14:33
 */

require_once 'ArrayConverter/ArrayConverterInterface.php';
require_once 'CommandInterface.php';

/**
 * コマンドLを実行して変更後の行列を返す
 *
 * Class Command_L
 */
class Command_L implements CommandInterface
{
    public function execute(Board $board): Board
    {
        $srcColumn = $board->getColumn(0);

        $converter = new ShiftFirstToLastConverter();
        $dstColumn = $converter->execute($srcColumn);

        return $board->setColumn(0, $dstColumn);
    }

}
