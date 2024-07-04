<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6687085b8bd11             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Ticket; use Pmpr\Common\Foundation\Container\ComponentInitiator; use Pmpr\Module\Ticket\Backend\Backend; use Pmpr\Module\Ticket\Frontend\Frontend; use Pmpr\Module\Ticket\Model\Model; use Pmpr\Module\Ticket\Panel\Panel; use Pmpr\Module\Ticket\REST\REST; class Ticket extends ComponentInitiator { public function register() { $this->gkieogwukagigisy(__DIR__, [self::qescuiwgsyuikume => static function () { return __("\x54\x69\143\153\x65\164", PR__MDL__TICKET); }]); } public function mameiwsayuyquoeq() { if (!$this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->goecwaaykqoaaagg()) { goto eeqesooyqagwawae; } Setting::symcgieuakksimmu(); eeqesooyqagwawae: REST::symcgieuakksimmu(); Model::symcgieuakksimmu(); Backend::symcgieuakksimmu(); Frontend::symcgieuakksimmu(); } public function aqyikqugcomoqqqi() { if (!$this->omseesogaocascyo("\x70\141\x6e\x65\x6c")) { goto oqugqwcyomiaaoqu; } Panel::symcgieuakksimmu(); oqugqwcyomiaaoqu: } }
