<?php
/**
 * Created by PhpStorm.
 * User: tsubakiyama
 * Date: 2019/02/15
 * Time: 14:37
 */

require_once 'Board.php';
require_once 'Printer.php';
require_once 'Command/Factory/NormalCommand5_5Factory.php';

$initialBoard = new Board([
    [1,2,3,4,5],
    [6,7,8,9,10],
    [11,12,13,14,15],
    [16,17,18,19,20],
    [21,22,23,24,25],
]);

$factory = new NormalCommand5_5Factory();
$printer = new Printer();

$commandString = 'a';

if($commandString == NULL)
{
    $printer->print($initialBoard);

}else{
    for($i = 0; $i < strlen($commandString); $i++)
    {
        /** @var CommandInterface $command */
        $command = $factory->createCommand($commandString[$i]);
        $finalBoard = $command->execute($initialBoard);
    }

    $printer->print($finalBoard);
}







