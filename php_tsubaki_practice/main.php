<?php
/**
 * Created by PhpStorm.
 * User: tsubakiyama
 * Date: 2019/02/20
 * Time: 15:31
 */

require_once 'vendor/autoload.php';

use Tsubakiyama\PhpPracticePackage\ArrayRotation\Board;
use Tsubakiyama\PhpPracticePackage\ArrayRotation\Command\CommandInterface;
use Tsubakiyama\PhpPracticePackage\ArrayRotation\Command\Factory\NormalCommand3_3Factory;
use Tsubakiyama\PhpPracticePackage\ArrayRotation\Printer;


//$board = new Board([
//    [1, 2, 3],
//    [4, 5],
//    [7, 8, 9],
//]);
try {
    $board = new Board([
        [1, 2, 3],
        [4, 5],
        [7, 8, 9],
    ]);
} catch (InvalidArgumentException $e) {
    echo $e->getMessage();
    exit();
}

$factory = new NormalCommand3_3Factory();

$commandString = 'a';

for ($i = 0; $i < strlen($commandString); $i++) {
    /** @var CommandInterface $command */
    $command = $factory->createCommand($commandString[$i]);
    $board = $command->execute($board);
}


$printer = new Printer();
$printer->print($board);
