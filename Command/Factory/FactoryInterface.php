<?php
/**
 * Created by PhpStorm.
 * User: tsubakiyama
 * Date: 2019/02/08
 * Time: 19:02
 */


require_once __DIR__.'/../Command_A.php';
require_once __DIR__.'/../Command_B.php';
require_once __DIR__.'/../Command_C.php';
require_once __DIR__.'/../Command_D.php';
require_once __DIR__.'/../Command_E.php';
require_once __DIR__.'/../Command_F.php';
require_once __DIR__.'/../Command_G.php';
require_once __DIR__.'/../Command_H.php';
require_once __DIR__.'/../Command_I.php';
require_once __DIR__.'/../Command_J.php';
require_once __DIR__.'/../Command_K.php';
require_once __DIR__.'/../Command_L.php';
require_once __DIR__.'/../RowShiftCommand.php';
require_once __DIR__.'/../ColumnShiftCommand.php';
require_once __DIR__.'/../ArrayConverter/ShiftFirstToLastConverter.php';
require_once __DIR__.'/../ArrayConverter/ShiftLastToFirstConverter.php';


interface FactoryInterface
{
    public function createCommand(string $commandName): CommandInterface;
}
