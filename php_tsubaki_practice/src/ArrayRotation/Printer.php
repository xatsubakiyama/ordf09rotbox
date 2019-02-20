<?php
/**
 * Created by PhpStorm.
 * User: tsubakiyama
 * Date: 2019/02/08
 * Time: 17:57
 */

namespace Tsubakiyama\PhpPracticePackage\ArrayRotation;

class Printer
{
    public function print(Board $board)
    {
        $dstMatrix = $board->getMatrix();

        $maxColumn = count($dstMatrix);
        $maxRow = count($dstMatrix[0]);

        for ($i = 0; $i < $maxColumn; $i++) {
            for ($k = 0; $k < $maxRow; $k++) {
                echo $dstMatrix[$i][$k];

                if ($k !== $maxRow - 1) {
                    echo ',';
                }
            }
            if ($i !== $maxColumn - 1) {
                echo "/";
            }
        }
    }
}