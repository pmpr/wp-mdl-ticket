<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6606b20223daf             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Ticket; use Pmpr\Common\Foundation\Container\ComponentInitiator; use Pmpr\Module\Ticket\Backend\Backend; use Pmpr\Module\Ticket\Frontend\Frontend; use Pmpr\Module\Ticket\Model\Model; use Pmpr\Module\Ticket\Panel\Panel; use Pmpr\Module\Ticket\REST\REST; class Ticket extends ComponentInitiator { public function register() { $this->gkieogwukagigisy(__DIR__, [self::qescuiwgsyuikume => static function () { return __("\x54\x69\x63\x6b\x65\x74", PR__MDL__TICKET); }]); } public function mameiwsayuyquoeq() { if (!$this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->goecwaaykqoaaagg()) { goto cecuyayqoioasumi; } Setting::symcgieuakksimmu(); cecuyayqoioasumi: REST::symcgieuakksimmu(); Model::symcgieuakksimmu(); Backend::symcgieuakksimmu(); Frontend::symcgieuakksimmu(); } public function aqyikqugcomoqqqi() { if (!$this->omseesogaocascyo("\x70\x61\x6e\145\154")) { goto qiaqsassksqiuyae; } Panel::symcgieuakksimmu(); qiaqsassksqiuyae: } }
