<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             64c1381a9a52e             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Ticket; use Pmpr\Module\Ticket\Backend\Backend; use Pmpr\Module\Ticket\Frontend\Frontend; use Pmpr\Module\Ticket\Model\Model; use Pmpr\Module\Ticket\Panel\Panel; use Pmpr\Module\Ticket\REST\REST; class Ticket extends Container { public function __construct() { $this->gkieogwukagigisy(__DIR__, [self::qescuiwgsyuikume => static function () { return __("\x54\x69\143\x6b\145\164", PR__MDL__TICKET); }]); if (!$this->gmiyqqaekqcsoime()) { goto qwigomakwmyiwkgo; } parent::__construct(); $this->iemaakgqgqosiecm(); qwigomakwmyiwkgo: } public function iemaakgqgqosiecm() { REST::symcgieuakksimmu(); Model::symcgieuakksimmu(); Backend::symcgieuakksimmu(); Frontend::symcgieuakksimmu(); } public function aqyikqugcomoqqqi() { if (!$this->omseesogaocascyo("\x70\141\156\x65\154")) { goto myoicgcuugciueis; } Panel::symcgieuakksimmu(); myoicgcuugciueis: } }
