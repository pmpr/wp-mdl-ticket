<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             64a909286d6b4             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Ticket\Moderator; use Pmpr\Common\Foundation\Helper\Traits\HelperTrait; use Pmpr\Common\Foundation\Interfaces\ConstantInterface; use Pmpr\Common\Foundation\Traits\SettingTrait; use Pmpr\Common\Foundation\Wrapper\Traits\WrapperTrait; use Pmpr\Module\Ticket\Setting; use WP_User; abstract class Common implements ConstantInterface { use HelperTrait, SettingTrait, WrapperTrait; public function __construct() { $this->settingObj = Setting::symcgieuakksimmu(); } public abstract function awkoiwkuqamgaiku(); public abstract function kskgqoywkoawosao(&$uamcoiueqaamsqma, $mkucggyaiaukqoce = null) : bool; public abstract function ggwyugcggywuwcse(&$uamcoiueqaamsqma, $mkucggyaiaukqoce = null, $mksyucucyswaukig = null) : bool; public abstract function amimkmoyyqiysugw($mksyucucyswaukig) : bool; public function gwgquisewwigiccc() : bool { $kkyowocuyokioeqy = false; if ($this->mamcqsuyswcogqwg()) { goto yowsmsiyimmimemc; } $mqamowqmoasqycgc = (array) $this->weysguygiseoukqw(Setting::iuieaumekoeiaqoy, []); if (!$mqamowqmoasqycgc) { goto eqkauqciwewmgeoi; } foreach ($mqamowqmoasqycgc as $oeucsuyqysaciasy) { if (!$this->caokeucsksukesyo()->issssuygyewuaswa()->askmkgcmgekiqwsg($oeucsuyqysaciasy)) { goto sciwggaeogcoesiu; } $kkyowocuyokioeqy = true; goto kuicqywysciceggs; sciwggaeogcoesiu: mkwskuycuyguqqok: } kuicqywysciceggs: goto kwagwqyusyiyoaqs; eqkauqciwewmgeoi: $kkyowocuyokioeqy = true; kwagwqyusyiyoaqs: yowsmsiyimmimemc: return $kkyowocuyokioeqy; } public function mamcqsuyswcogqwg() : bool { return !$this->uwkmaywceaaaigwo()->issssuygyewuaswa()->ksgkoukcicwkkaum(); } public function skyukysqukkqauaa() : bool { $skyukysqukkqauaa = false; if ($this->mamcqsuyswcogqwg()) { goto eequksumcoogyoem; } $sgsoauswowssimyk = (array) $this->weysguygiseoukqw(Setting::qkimicaweacyckyg, []); foreach ($sgsoauswowssimyk as $oeucsuyqysaciasy) { if (!$this->caokeucsksukesyo()->issssuygyewuaswa()->askmkgcmgekiqwsg($oeucsuyqysaciasy)) { goto sqiciiuwmykocycc; } $skyukysqukkqauaa = true; goto kiqogmwcgcamwiig; sqiciiuwmykocycc: iomcaiwewsawiamu: } kiqogmwcgcamwiig: eequksumcoogyoem: return $skyukysqukkqauaa; } public function imgymusqgccqsqqq($oicysemckysmigee) : ?object { $mksyucucyswaukig = null; if (is_numeric($oicysemckysmigee)) { goto cggowoquuiwqkyew; } if (is_object($oicysemckysmigee)) { goto ocokwuuquaokmasc; } goto uukumskkeggaowck; cggowoquuiwqkyew: $mksyucucyswaukig = $this->awkoiwkuqamgaiku()->akkkoiiymmamsauc($oicysemckysmigee); goto uukumskkeggaowck; ocokwuuquaokmasc: $mksyucucyswaukig = $oicysemckysmigee; uukumskkeggaowck: return $mksyucucyswaukig; } }
