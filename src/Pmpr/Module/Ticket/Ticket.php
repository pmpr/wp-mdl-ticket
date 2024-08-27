<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ce11e4813aa             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Ticket; use Pmpr\Common\Foundation\Container\ComponentInitiator; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Ticket\Backend\Backend; use Pmpr\Module\Ticket\Frontend\Frontend; use Pmpr\Module\Ticket\Model\Model; use Pmpr\Module\Ticket\Panel\Panel; use Pmpr\Module\Ticket\REST\REST; class Ticket extends ComponentInitiator { const uuqoeigueqguouek = Constants::yeaekcacwwyyqigq . Constants::wassgkgmoyygyaya; public function register() { $this->gkieogwukagigisy(__DIR__, [Constants::qescuiwgsyuikume => static function () { return __("\124\151\x63\x6b\145\x74", PR__MDL__TICKET); }]); } public function mameiwsayuyquoeq() { if (!$this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->goecwaaykqoaaagg()) { goto kymkucucyeoeikim; } Setting::symcgieuakksimmu(); kymkucucyeoeikim: REST::symcgieuakksimmu(); Model::symcgieuakksimmu(); Backend::symcgieuakksimmu(); Frontend::symcgieuakksimmu(); } public function aqyikqugcomoqqqi() { if (!$this->omseesogaocascyo("\160\x61\156\x65\154")) { goto usquiuuyiyqaeyiu; } Panel::symcgieuakksimmu(); usquiuuyiyqaeyiu: } }
