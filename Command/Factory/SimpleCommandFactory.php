<?php
/**
 * Created by PhpStorm.
 * User: tsubakiyama
 * Date: 2019/02/08
 * Time: 19:05
 */

require_once 'FactoryInterface.php';

class SimpleCommandFactory implements FactoryInterface
{
//$commands = array(

//);
    private $commands;

    public function __construct()
    {
        $this->commands = array(
            'a' => new Command_A(),     //コンストラクタにする意味は？
            'b' => new Command_B(),     //コンストラクタではなくcreateCommandに書くと、createCommandを呼び出すたびにインスタンスが生成されてしまうが、
            'c' => new Command_C(),     //コンストラクタにすることでインスタンス化はSimpleCommandFactoryをインスタンス貸した時の一度だけで済む。
            'd' => new Command_D(),
            'e' => new Command_E(),
            'f' => new Command_F(),
            'g' => new Command_G(),
            'h' => new Command_H(),
            'i' => new Command_I(),
            'j' => new Command_J(),
            'k' => new Command_K(),
            'l' => new Command_L(),
        );
    }

//$commands = array(
//    'a' => new Command_A(),
//    'b' => new Command_B(),
//    'c' => new Command_C(),
//    'd' => new Command_D(),
//    'e' => new Command_E(),
//    'f' => new Command_F(),
//    'g' => new Command_G(),
//    'h' => new Command_H(),
//    'i' => new Command_I(),
//    'j' => new Command_J(),
//    'k' => new Command_K(),
//    'l' => new Command_L(),
//);

    /**
     * 入力された文字に応じてcommandを返す switch文でもよい
     *
     *
     * @param string $commandName
     * @return CommandInterface
     */
    public function createCommand(string $commandName): CommandInterface
    {
        return $this->commands[$commandName];
//
//        switch ($commandName)
//        {
//            case 'a':
//                return $this->commands[$commandName];
//                break;
//
//
//        }
    }

}
