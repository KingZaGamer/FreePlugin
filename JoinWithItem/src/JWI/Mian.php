<?php

namespace JWI;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\item\Item;

class Main extends PluginBase implements Listener
{
  public functio onEnable()
  {
    $this->getServer()->getPluginManager()->registerEvents($this, $this);
  }

  public function onJoin(PlayerJoinEvent $ev)
  {
    $pl = $ev->getPlayer();
    $pl->getInventory()->setItem(0, Item::get(276, 0, 1));
  }
}
