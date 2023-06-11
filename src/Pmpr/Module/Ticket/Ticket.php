<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6485ec8af1072             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Ticket; use Pmpr\Module\Ticket\Backend\Backend; use Pmpr\Module\Ticket\Frontend\Frontend; use Pmpr\Module\Ticket\Model\Model; use Pmpr\Module\Ticket\Panel\Panel; use Pmpr\Module\Ticket\REST\REST; class Ticket extends Container { public function __construct() { $this->gkieogwukagigisy(__DIR__, [self::qescuiwgsyuikume => static function () { return __("\x54\151\143\x6b\145\x74", PR__MDL__TICKET); }]); if (!$this->gmiyqqaekqcsoime()) { goto igooksugieceoege; } parent::__construct(); $this->iemaakgqgqosiecm(); igooksugieceoege: } public function iemaakgqgqosiecm() { REST::symcgieuakksimmu(); Model::symcgieuakksimmu(); Backend::symcgieuakksimmu(); Frontend::symcgieuakksimmu(); } public function aqyikqugcomoqqqi() { if (!$this->omseesogaocascyo("\160\141\156\x65\x6c")) { goto omqiayeucoioqoao; } Panel::symcgieuakksimmu(); omqiayeucoioqoao: } }
