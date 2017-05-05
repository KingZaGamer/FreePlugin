<?php

namespace CDD;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerDeathEvent;
use pocketmine\item\Item;

class Main extends PluginBase implements Listener
{
  public function onEnable()
  {
    $this->getServer()->getPluginManager()->registerEvents($this, $this);
  }
  
  public function onDead(PlayerDeathEvent $ev)
  {
    $pl = $ev->getPlayer();
    $ev->setDrops(array(Item::get(322, 0, 1)));
  }
}
