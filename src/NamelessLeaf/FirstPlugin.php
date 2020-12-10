<php?
     
namespace NamelessLeaf;

use pocketmine\Player;
use pocketmine\Server;
     
use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;      
use pocketmine\command\CommandSender;
      
use pocketmine\event\EventListener;
use pocketmine\player\PlayerJoinEvent;

use pocketmine\utils\TextFormat;

class Main extends pluginbase implements Listener {
      
      public Function onEnable() {
          $this->getServer()->getPluginManager()->registerEvents($this , $this)
      }
          
          }      
      
      
      
      
      
      
      
      
