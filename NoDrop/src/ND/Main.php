<?php

namespace ND;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerDropItemEvent;

class Main extends PluginBase implements Listener
{
//เอาไปใช้ก้อย่าเปลี่ยน author เลผมขอ เปลี่ยนชื่อไรห้เปลี่ยนไป
  public function onEnable()
  {
    $this->getServer()->getPluginManager()->registerEvents($this, $this);
  }
  
  public function onDrop(PlayerDropItemEvent $ev)
  {
    $pl = $ev->getPlayer();
    if ($pl->getLevel()->getName() == "hub") {
      $ev->setCancelled();
    }
  }
}
