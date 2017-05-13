<?php

namespace JoinMessage;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;

class Main extends PluginBase implements Listener
{
    public function onEnable()
    {
        $this->getServer()->getPluginManger()->registerEvents($this, $this);
    }

    public function onJoin(PlayerJoinEvent $ev)
    {
        $pl = $ev->getPlayer();
        $pl->setJoinMessage("");
        $this->getServer()->broadCastMessage($pl->getName() . " joined the game!");
    }
}
