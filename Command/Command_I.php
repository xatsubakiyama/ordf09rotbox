<?php
/**
 * Created by PhpStorm.
 * User: tsubakiyama
 * Date: 2019/02/08
 * Time: 14:33
 */

require_once 'ArrayConverter/ShiftLastToFirstConverter.php';
require_once 'CommandInterface.php';

/**
 * コマンドIを実行して変更後の行列を返す
 *
 * Class Command_I
 */
class Command_I implements CommandInterface
{
    public function execute(Board $board): Board
    {
        $srcRow = $board->getRow(0);

        $converter = new ShiftLastToFirstConverter();
        $dstRow = $converter->execute($srcRow);

        return $board->setRow(0, $dstRow);
    }

}
