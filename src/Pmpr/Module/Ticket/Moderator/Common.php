<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6474c55ccae90             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Ticket\Moderator; use Pmpr\Common\Foundation\Helper\Traits\HelperTrait; use Pmpr\Common\Foundation\Interfaces\ConstantInterface; use Pmpr\Common\Foundation\Traits\SettingTrait; use Pmpr\Common\Foundation\Wrapper\Traits\WrapperTrait; use Pmpr\Module\Ticket\Setting; use WP_User; abstract class Common implements ConstantInterface { use HelperTrait, SettingTrait, WrapperTrait; public function __construct() { $this->settingObj = Setting::symcgieuakksimmu(); } public abstract function awkoiwkuqamgaiku(); public abstract function amimkmoyyqiysugw($mksyucucyswaukig) : bool; public abstract function kskgqoywkoawosao($mkucggyaiaukqoce) : bool; public abstract function ggwyugcggywuwcse($mkucggyaiaukqoce, $mksyucucyswaukig = null) : bool; public function gwgquisewwigiccc() : bool { $kkyowocuyokioeqy = false; if ($this->mamcqsuyswcogqwg()) { goto asmecuqiyyswueqe; } $mqamowqmoasqycgc = (array) $this->weysguygiseoukqw(Setting::iuieaumekoeiaqoy, []); if (!$mqamowqmoasqycgc) { goto qwigomakwmyiwkgo; } foreach ($mqamowqmoasqycgc as $oeucsuyqysaciasy) { if (!$this->caokeucsksukesyo()->issssuygyewuaswa()->askmkgcmgekiqwsg($oeucsuyqysaciasy)) { goto qgoiooayqmqqsiok; } $kkyowocuyokioeqy = true; goto qiaqsassksqiuyae; qgoiooayqmqqsiok: qogqewiwmwiwskgm: } qiaqsassksqiuyae: goto myoicgcuugciueis; qwigomakwmyiwkgo: $kkyowocuyokioeqy = true; myoicgcuugciueis: asmecuqiyyswueqe: return $kkyowocuyokioeqy; } public function mamcqsuyswcogqwg() : bool { return !$this->uwkmaywceaaaigwo()->issssuygyewuaswa()->ksgkoukcicwkkaum(); } public function skyukysqukkqauaa() : bool { $skyukysqukkqauaa = false; if ($this->mamcqsuyswcogqwg()) { goto mkwskuycuyguqqok; } $sgsoauswowssimyk = (array) $this->weysguygiseoukqw(Setting::qkimicaweacyckyg, []); foreach ($sgsoauswowssimyk as $oeucsuyqysaciasy) { if (!$this->caokeucsksukesyo()->issssuygyewuaswa()->askmkgcmgekiqwsg($oeucsuyqysaciasy)) { goto kuicqywysciceggs; } $skyukysqukkqauaa = true; goto csscmcacoikwsecs; kuicqywysciceggs: cuykwgmswkskqkyi: } csscmcacoikwsecs: mkwskuycuyguqqok: return $skyukysqukkqauaa; } public function imgymusqgccqsqqq($oicysemckysmigee) : ?object { $mksyucucyswaukig = null; if (is_numeric($oicysemckysmigee)) { goto eqkauqciwewmgeoi; } if (is_object($oicysemckysmigee)) { goto kwagwqyusyiyoaqs; } goto sciwggaeogcoesiu; eqkauqciwewmgeoi: $mksyucucyswaukig = $this->awkoiwkuqamgaiku()->akkkoiiymmamsauc($oicysemckysmigee); goto sciwggaeogcoesiu; kwagwqyusyiyoaqs: $mksyucucyswaukig = $oicysemckysmigee; sciwggaeogcoesiu: return $mksyucucyswaukig; } }
