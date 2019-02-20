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
 * コマンドEを実行して変更後の行列を返す
 *
 * Class Command_E
 */
class Command_E implements CommandInterface
{

    public function execute(Board $board): Board
    {
        $srcColumn = $board->getColumn(1);

        $converter = new ShiftLastToFirstConverter();
        $dstColumn = $converter->execute($srcColumn);

        return $board->setColumn(1, $dstColumn);
    }

}
