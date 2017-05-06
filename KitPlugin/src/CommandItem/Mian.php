<?php

namespace Kit;//ระบุตำแหน่งของ plugin ไม่จำเปนต้องมี src

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;
use pocketmine\Player;
use pocketmine\item\Item;

class Main extends PluginBase implements Listener//สำคัญ
{
  public function onEnable()//สำคัญ(บอกให้ Server รู้ว่าถ้า plugin ทำงานจะให้ทำอะไร)
  {
    $this->getServer()->getPluginManager()->registerEvents($this, $this);
  }
  //CommandSender คือ คนที่ใช้คำ้ง
  //Command กะคือคำสั้ง
  public function onCommand(CommandSender $sender, Command $command, $label, array $args)
  {
    switch($cmd->getName()) {
      case "item":
       if ($sender instanceof Player) {//แทนค่า $sender ด้วย Player
        $sender->getInventory()->addItem(Item::get(276, 0, 1));//ให้ของในตัว
        $sender->sendMessage("You has get Item");//ส่งข้อความไปหาคนใช้ command
       } else {//ถ้า sender ไม่ใช้ Player
         $sender->sendMessgae("Use command in Game!");
       }
    }
  }
  
  public function onDisable()
  {
  }
}
