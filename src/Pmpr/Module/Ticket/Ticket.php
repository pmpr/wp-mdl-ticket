<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66cb570e0b6ec             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Ticket; use Pmpr\Common\Foundation\Container\ComponentInitiator; use Pmpr\Module\Ticket\Backend\Backend; use Pmpr\Module\Ticket\Frontend\Frontend; use Pmpr\Module\Ticket\Model\Model; use Pmpr\Module\Ticket\Panel\Panel; use Pmpr\Module\Ticket\REST\REST; class Ticket extends ComponentInitiator { public function register() { $this->gkieogwukagigisy(__DIR__, [self::qescuiwgsyuikume => static function () { return __("\124\x69\x63\x6b\x65\164", PR__MDL__TICKET); }]); } public function mameiwsayuyquoeq() { if (!$this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->goecwaaykqoaaagg()) { goto kymkucucyeoeikim; } Setting::symcgieuakksimmu(); kymkucucyeoeikim: REST::symcgieuakksimmu(); Model::symcgieuakksimmu(); Backend::symcgieuakksimmu(); Frontend::symcgieuakksimmu(); } public function aqyikqugcomoqqqi() { if (!$this->omseesogaocascyo("\x70\141\156\145\x6c")) { goto usquiuuyiyqaeyiu; } Panel::symcgieuakksimmu(); usquiuuyiyqaeyiu: } }
