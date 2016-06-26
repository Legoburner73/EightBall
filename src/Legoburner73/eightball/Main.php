<?php

namespace Legoburner73\eightball;

/*
* 8-Ball in pocketmine by Legoburner73
*/

use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\Player;
use pocketmine\utils\TextFormat as Colour;
use pocketmine\event\Listener;
use pocketmine\Server;

class Main extends PluginBase implements Listener {

    private PREFIX = Colour::BLUE . "[" . Colour::GREEN . "8ball" . Colour::BLUE . "]" . Colour::RED;

    public function onEnable(){
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        $this->getLogger()->info(Colour::GREEN."[8ball] has been enabled!");
    }
    
    public function onDisable() {
        $this->getLogger()->info(Colour::RED."[8ball] has been disabled!");
    }
    
    public function onCommand(CommandSender $sender, Command $command, $label, array $args) {
        switch ($command->getName()) {
            case "8ball":
                $answers = mt_rand(1, 20);
                if(!(isset($args[0]))) {
                    $sender->sendMessage($this->PREFIX . "I can't reply to nothing! Please try again.");
                }else{
                switch($answers) {
                    case 1:
                    $sender->sendMessage($this->PREFIX . "Signs point to yes.");
                    break;
                    case 2:
                    $sender->sendMessage($this->PREFIX . "Yes.");
                    break;
                    case 3:
                    $sender->sendMessage($this->PREFIX . "Reply hazy, try again.");                      
                    break;
                    case 4:
                    $sender->sendMessage($this->PREFIX . "Without a doubt");
                    break;
                    case 5:
                    $sender->sendMessage($this->PREFIX . "My sources say no");
                    break;
                    case 6:
                    $sender->sendMessage($this->PREFIX . "As I see it, yes.");
                    break;
                    case 7:
                    $sender->sendMessage($this->PREFIX . "You may rely on it.");
                    break;
                    case 8:
                    $sender->sendMessage($this->PREFIX . "Concentrate and ask again.");
                    break;
                    case 9:
                    $sender->sendMessage($this->PREFIX . "Outlook not so good.");
                    break;
                    case 10:
                    $sender->sendMessage($this->PREFIX . "It is decidedly so.");
                    break;
                    case 11:
                    $sender->sendMessage($this->PREFIX . "Better not to tell you know.");
                    break;
                    case 12:
                    $sender->sendMessage($this->PREFIX . "Very doubtful.");
                    break;
                    case 13:
                    $sender->sendMessage($this->PREFIX . "Yes - definitely.");
                    break;
                    case 14:
                    $sender->sendMessage($this->PREFIX . "It is certain.");
                    break;
                    case 15:
                    $sender->sendMessage($this->PREFIX . "Cannot predict now.");
                    break;
                    case 16:
                    $sender->sendMessage($this->PREFIX . "Most likely.");
                    break;
                    case 17:
                    $sender->sendMessage($this->PREFIX . "Ask again later.");
                    break;
                    case 18:
                    $sender->sendMessage($this->PREFIX . "My reply is no.");
                    break;
                    case 19:
                        $sender->sendMessage($this->PREFIX . "Outlook good.");
                    break;
                    case 20:
                    $sender->sendMessage($this->PREFIX . "Don't count on it.");
                    break;
                    }
                }
                break;
    }
    }
}
