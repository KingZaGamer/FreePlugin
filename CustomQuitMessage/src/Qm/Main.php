<?php

namespace Qm;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerQuitEvent;

class Main extends PluginBase implements Listener
{
    public function onEnable()
    {
        $this->getServer()->getPluginManger()->registerEvents($this, $this);
    }

    public function onJoin(PlayerQuitEvent $ev)
    {
        $pl = $ev->getPlayer();
        $pl->setJoinMessage("");
        $this->getServer()->broadCastMessage($pl->getName() . " left the game!");
    }
}
