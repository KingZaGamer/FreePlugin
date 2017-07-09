<?php

namespace WP;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\block\BlockBreakEvent;
use pocketmine\event\block\BlockPlaceEvent;

class Main extends PluginBase implements Listener
{
    public function onEnable()
    {
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }
    
    public function onBreak(BlockBreakEvent $ev) {
        $block = $ev->getBlock();
        if ($ev->getPlayer->getLevel()->getName() == "hub") {
            $ev->setCancelled(true);
        }
    }
    
    public function onBreak(BlockBreakEvent $ev) {
        $block = $ev->getBlock();
        if ($ev->getPlayer->getLevel()->getName() == "hub") {
            $ev->setCancelled(true);
        }
    }
    public function onDisabe()
    {
    }
}
