<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             647cb0299d384             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Ticket; use Pmpr\Module\Ticket\Backend\Backend; use Pmpr\Module\Ticket\Frontend\Frontend; use Pmpr\Module\Ticket\Model\Model; use Pmpr\Module\Ticket\Panel\Panel; use Pmpr\Module\Ticket\REST\REST; class Ticket extends Container { public function __construct() { $this->gkieogwukagigisy(__DIR__, [self::qescuiwgsyuikume => static function () { return __("\x54\151\x63\153\x65\164", PR__MDL__TICKET); }]); if (!$this->gmiyqqaekqcsoime()) { goto ewymsmkkiksgwysk; } parent::__construct(); $this->iemaakgqgqosiecm(); ewymsmkkiksgwysk: } public function iemaakgqgqosiecm() { REST::symcgieuakksimmu(); Model::symcgieuakksimmu(); Backend::symcgieuakksimmu(); Frontend::symcgieuakksimmu(); } public function aqyikqugcomoqqqi() { if (!$this->omseesogaocascyo("\160\141\x6e\145\154")) { goto cmegwsegsosyqcai; } Panel::symcgieuakksimmu(); cmegwsegsosyqcai: } }
