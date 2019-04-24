<?php


namespace Example;


use Amadeus\IO\Logger;
use Amadeus\Process;
use Amadeus\Plugin\Basic\PluginBase;
use Amadeus\Plugin\Listener\Listener;

class Example extends PluginBase implements Listener
{
    public function __construct(){
        //Process::getPluginManager()->register($this,'Example');
    }
    public function onLoading(){
        Logger::printLine('I AM LOADING!!!!!',Logger::LOG_INFORM);
    }
    public function onLoaded(){
        Logger::printLine('ALL PLUGINS ARE LOADED!!!!',Logger::LOG_INFORM);
    }
    public function getName(){
        return 'Example Plugin';
    }
}