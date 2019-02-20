<?php
/**
 * Created by PhpStorm.
 * User: tsubakiyama
 * Date: 2019/02/01
 * Time: 16:44
 */

namespace Tsubakiyama\PhpPracticePackage\ArrayRotation;

/**
 * 最新の行列のデータを持っておく（持って回らなくて良い）
 *
 * Class Board
 */
class Board
{
    /**
     * @var array 現在の状態を表す行列
     */
    private $matrix;

    /**
     * 正しい行列かどうかを判断してから行列を初期化する
     *
     * Board constructor.
     * @param array $matrix
     */
    public function __construct(array $matrix)
    {
        $count = count($matrix);

        for ($i = 0; $i < $count - 1; $i++) {
            if (count($matrix[$i]) !== count($matrix[$i + 1])) {
                exit("正しい行列を入力してください");
            }
        }
        $this->matrix = $matrix;
    }


    public function getMatrix(): array
    {
        return $this->matrix;
    }

    /**
     * 最新の行列から指定された行を返す
     *
     * @param int $index 行列の行を指定するindex(0スタート)
     *
     * @return array 行を表す1次配列
     */
    public function getRow(int $index): array
    {
        return $this->matrix[$index];
    }

    /**
     * 最新の行列の指定された行を変更して変更後の行列を返す（最新の状態を持っておくクラスだから更新できてれば良いため、返さなくても良い）
     *
     * @param int $index
     *
     * @param array $row
     * @return $this
     */
    public function setRow(int $index, array $row): self
    {
        $this->matrix[$index] = $row;
        return $this;
    }

    /**
     * 最新の行列から指定された列を返す
     *
     * @param int $index
     *
     * @return array
     */
    public function getColumn(int $index): array
    {
        $column = [];

        for ($i = 0; $i < $this->countElementOfColumn(); $i++) {
            $column[$i] = $this->matrix[$i][$index];
        }

        return $column;
    }

    /**
     * 最新の行列の指定された列を変更して変更後の行列を返す（最新の状態を持っておくクラスだから更新できてれば良いため、返さなくても良い）
     *
     * @param int $index
     *
     * @param array $column
     * @return $this
     */
    public function setColumn(int $index, array $column): self
    {
        for ($i = 0; $i < $this->countElementOfColumn(); $i++) {
            $this->matrix[$i][$index] = $column[$i];
        }
        return $this;
    }

    /**
     * 行の要素の数を返す
     *
     * @return int
     */
    public function countElementOfRow(): int
    {
        return count($this->matrix[0]);
    }

    /**
     * 列の要素の数（行の数）を返す
     *
     * @return int
     */
    public function countElementOfColumn(): int
    {
        return count($this->matrix);
    }

}