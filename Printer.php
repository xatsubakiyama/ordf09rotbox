<?php
/**
 * Created by PhpStorm.
 * User: tsubakiyama
 * Date: 2019/02/08
 * Time: 17:57
 */

class Printer3_3
{
    public function print(Board $board)
    {
        $dstMatrix = $board->getMatrix();

        for ($i = 0; $i < 3; $i++) {
            for ($k = 0; $k < 3; $k++) {
                echo $dstMatrix[$i][$k];
            }
            if ($i !== 2) {
                echo "/";
            }
        }
    }
}