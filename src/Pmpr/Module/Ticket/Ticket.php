<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             65193ca355dfb             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Ticket; use Pmpr\Module\Ticket\Backend\Backend; use Pmpr\Module\Ticket\Frontend\Frontend; use Pmpr\Module\Ticket\Model\Model; use Pmpr\Module\Ticket\Panel\Panel; use Pmpr\Module\Ticket\REST\REST; class Ticket extends Container { public function __construct() { $this->gkieogwukagigisy(__DIR__, [self::qescuiwgsyuikume => static function () { return __("\124\151\x63\153\x65\164", PR__MDL__TICKET); }]); if (!$this->gmiyqqaekqcsoime()) { goto eqkauqciwewmgeoi; } parent::__construct(); $this->iemaakgqgqosiecm(); eqkauqciwewmgeoi: } public function iemaakgqgqosiecm() { REST::symcgieuakksimmu(); Model::symcgieuakksimmu(); Backend::symcgieuakksimmu(); Frontend::symcgieuakksimmu(); } public function aqyikqugcomoqqqi() { if (!$this->omseesogaocascyo("\160\x61\156\x65\154")) { goto kwagwqyusyiyoaqs; } Panel::symcgieuakksimmu(); kwagwqyusyiyoaqs: } }
