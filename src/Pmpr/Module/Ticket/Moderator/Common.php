<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6606b20223daf             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Ticket\Moderator; use Pmpr\Common\Foundation\Helper\Traits\HelperTrait; use Pmpr\Common\Foundation\Interfaces\ConstantInterface; use Pmpr\Common\Foundation\Traits\SettingTrait; use Pmpr\Common\Foundation\Wrapper\Traits\WrapperTrait; use Pmpr\Module\Ticket\Setting; use WP_User; abstract class Common implements ConstantInterface { use HelperTrait, SettingTrait, WrapperTrait; public function __construct() { $this->settingObj = Setting::symcgieuakksimmu(); } public abstract function awkoiwkuqamgaiku(); public abstract function kskgqoywkoawosao(&$uamcoiueqaamsqma, $mkucggyaiaukqoce = null) : bool; public abstract function ggwyugcggywuwcse(&$uamcoiueqaamsqma, $mkucggyaiaukqoce = null, $mksyucucyswaukig = null) : bool; public abstract function amimkmoyyqiysugw($mksyucucyswaukig) : bool; public function gwgquisewwigiccc() : bool { $kkyowocuyokioeqy = false; if ($this->mamcqsuyswcogqwg()) { goto owmuceyswmgueasi; } $mqamowqmoasqycgc = (array) $this->weysguygiseoukqw(Setting::iuieaumekoeiaqoy, []); if (!$mqamowqmoasqycgc) { goto wakmayaoqoskekqy; } foreach ($mqamowqmoasqycgc as $oeucsuyqysaciasy) { if (!$this->caokeucsksukesyo()->issssuygyewuaswa()->askmkgcmgekiqwsg($oeucsuyqysaciasy)) { goto wkeuuycukmuqiaom; } $kkyowocuyokioeqy = true; goto ueigkucgaucgeimc; wkeuuycukmuqiaom: sggawugoykqcmsug: } ueigkucgaucgeimc: goto qmuwoecuacmkwgem; wakmayaoqoskekqy: $kkyowocuyokioeqy = true; qmuwoecuacmkwgem: owmuceyswmgueasi: return $kkyowocuyokioeqy; } public function mamcqsuyswcogqwg() : bool { return !$this->uwkmaywceaaaigwo()->issssuygyewuaswa()->ksgkoukcicwkkaum(); } public function skyukysqukkqauaa() : bool { $skyukysqukkqauaa = false; if ($this->mamcqsuyswcogqwg()) { goto msemumccgceyugmg; } $sgsoauswowssimyk = (array) $this->weysguygiseoukqw(Setting::qkimicaweacyckyg, []); foreach ($sgsoauswowssimyk as $oeucsuyqysaciasy) { if (!$this->caokeucsksukesyo()->issssuygyewuaswa()->askmkgcmgekiqwsg($oeucsuyqysaciasy)) { goto eogwckcymuugikuy; } $skyukysqukkqauaa = true; goto mwsmsguqqkcwiiuk; eogwckcymuugikuy: eeauyscekuckoues: } mwsmsguqqkcwiiuk: msemumccgceyugmg: return $skyukysqukkqauaa; } public function imgymusqgccqsqqq($oicysemckysmigee) : ?object { $mksyucucyswaukig = null; if (is_numeric($oicysemckysmigee)) { goto qoqskyuuwueqkquk; } if (is_object($oicysemckysmigee)) { goto iwsuawwqomaowuii; } goto wagqgeqymeqoeuyi; qoqskyuuwueqkquk: $mksyucucyswaukig = $this->awkoiwkuqamgaiku()->akkkoiiymmamsauc($oicysemckysmigee); goto wagqgeqymeqoeuyi; iwsuawwqomaowuii: $mksyucucyswaukig = $oicysemckysmigee; wagqgeqymeqoeuyi: return $mksyucucyswaukig; } }
