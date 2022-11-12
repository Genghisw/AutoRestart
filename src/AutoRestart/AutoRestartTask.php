<?php

namespace Auto;

use pocketmine\scheduler\Task;
use pocketmine\Server;

class AutoRestartTask extends Task{

    private int $timer = 3600;
    public function onRun():void
    {
        $this->timer--;
        if ($this->timer === 1800) {
            Server::getInstance()->broadcastMessage("§bSunucunun yeniden başlatılmasına §f30§b dakika kaldı!");
        } elseif ($this->timer === 900) {
            Server::getInstance()->broadcastMessage("§bSunucunun yeniden başlatılmasına §f15§b dakika kaldı!");
        } elseif ($this->timer === 300) {
            Server::getInstance()->broadcastMessage("§bSunucunun yeniden başlatılmasına §f5§b dakika kaldı!");
        } elseif ($this->timer === 60) {
            Server::getInstance()->broadcastMessage("§bSunucunun yeniden başlatılmasına §f1§b dakika kaldı!");
        } elseif ($this->timer === 30) {
            Server::getInstance()->broadcastMessage("§bSunucunun yeniden başlatılmasına §f30§b saniye kaldı!");
        } elseif ($this->timer === 15) {
            Server::getInstance()->broadcastMessage("§bSunucunun yeniden başlatılmasına §f15§b saniye kaldı!");
        }elseif ($this->timer === 10) {
            Server::getInstance()->broadcastMessage("§bSunucunun yeniden başlatılmasına §f10§b saniye kaldı!");
        } elseif ($this->timer === 5) {
            Server::getInstance()->broadcastMessage("§bSunucunun yeniden başlatılmasına §f5§b saniye kaldı!");
        } elseif ($this->timer === 4) {
            Server::getInstance()->broadcastMessage("§bSunucunun yeniden başlatılmasına §f4§b saniye kaldı!");
        }elseif ($this->timer === 3){
            Server::getInstance()->broadcastMessage("§bSunucunun yeniden başlatılmasına §f3§b saniye kaldı!");
        }elseif ($this->timer === 2){
            Server::getInstance()->broadcastMessage("§bSunucunun yeniden başlatılmasına §f2§b saniye kaldı!");
        }elseif ($this->timer === 1){
            Server::getInstance()->broadcastMessage("§bSunucunun yeniden başlatılmasına §f1§b saniye kaldı!");
        }elseif ($this->timer === 0){
            foreach (Server::getInstance()->getOnlinePlayers() as $value) {
                $players = Server::getInstance()->getPlayerExact($value);
                Server::getInstance()->broadcastMessage("§bSunucu yeniden başlatılıyor!");
                $value->kick("§cSunucu yeniden başlatılıyor!");
                Server::getInstance()->shutdown();
            }
        }
    }
}
