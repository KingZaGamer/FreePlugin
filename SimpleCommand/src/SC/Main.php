<?php

namespace SC;

class Main extends PluginBase implements Listener
{
  public function onEnable()
  {
    $this->getServer()->getPluginManager()->registerEvents($this, $this);
  }

  public function onCommand(CommandSender $s, Command $c, $label, array $args)
  {
    switch ($c->getName()) {
      case "hub":
        $sender->sendMessgae("sending you to Lobby");
        $sender->teleport(Server::getInstance()->getLevelByName("hub")->getSafeSpawn());
        break;
    }
  }
}
