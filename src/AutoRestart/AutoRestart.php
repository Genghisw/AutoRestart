<?php

namespace Auto;

use pocketmine\{
  scheduler\Task,
  Server,
  plugin\PluginBase,
  utils\Config
};
use Auto\AutoServerTask;

class AutoRestart extends PluginBase{
  public function onLoad():void{
    $this->saveResource("restart.yml");
  }
  public function onEnable():void{
    $this->getLogger()->info("Auto Restart Aktif");
    
    $this->getScheduler()->scheduleRepeatingTask(new AutoRestartTask(), 20 * 1);
  }
}
