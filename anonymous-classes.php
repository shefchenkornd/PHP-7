<?php
/**
 * Created by PhpStorm.
 * User: ilya
 * Date: 07.03.18
 * Time: 15:43
 */
interface Logger{

    public function log($message);
}

class TerminalLogger implements Logger{
    public function log($message){
        var_dump($message);
    }
}

class Application{
    protected $logger;

    public function setLogger(Logger $logger){
        $this->logger = $logger;

        return $this;
    }

    public function action(){
        $this->logger->log('Doing thing.');
    }
}

$app = new Application();
//$app->setLogger(new TerminalLogger());
// мы заменили класс TerminalLogger на анонимный класс
$app->setLogger(new class implements Logger{
    public function log($message){
        var_dump($message);
    }
});

$app->action();