<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66cb570e0b6ec             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Ticket\Moderator; use Pmpr\Common\Foundation\Functions\Traits\HelperTrait; use Pmpr\Common\Foundation\Functions\Traits\WrapperTrait; use Pmpr\Common\Foundation\Interfaces\ConstantInterface; use Pmpr\Common\Foundation\Traits\SettingTrait; use Pmpr\Module\Ticket\Setting; abstract class Common implements ConstantInterface { use HelperTrait, SettingTrait, WrapperTrait; public function __construct() { $this->settingObj = Setting::symcgieuakksimmu(); } public abstract function awkoiwkuqamgaiku(); public abstract function kskgqoywkoawosao(&$uamcoiueqaamsqma, $mkucggyaiaukqoce = null) : bool; public abstract function ggwyugcggywuwcse(&$uamcoiueqaamsqma, $mkucggyaiaukqoce = null, $mksyucucyswaukig = null) : bool; public abstract function amimkmoyyqiysugw($mksyucucyswaukig) : bool; public function gwgquisewwigiccc() : bool { $kkyowocuyokioeqy = false; if ($this->mamcqsuyswcogqwg()) { goto aegysmeecgcgayyw; } $mqamowqmoasqycgc = (array) $this->weysguygiseoukqw(Setting::iuieaumekoeiaqoy, []); if (!$mqamowqmoasqycgc) { goto esuiysskoweawsue; } foreach ($mqamowqmoasqycgc as $oeucsuyqysaciasy) { if (!$this->caokeucsksukesyo()->issssuygyewuaswa()->askmkgcmgekiqwsg($oeucsuyqysaciasy)) { goto uqqaiagaeqgqgaiy; } $kkyowocuyokioeqy = true; goto qicwaskssogcokgm; uqqaiagaeqgqgaiy: uguigkcmukuouway: } qicwaskssogcokgm: goto gaomwagkcciesyqy; esuiysskoweawsue: $kkyowocuyokioeqy = true; gaomwagkcciesyqy: aegysmeecgcgayyw: return $kkyowocuyokioeqy; } public function mamcqsuyswcogqwg() : bool { return !$this->uwkmaywceaaaigwo()->issssuygyewuaswa()->ksgkoukcicwkkaum(); } public function skyukysqukkqauaa() : bool { $skyukysqukkqauaa = false; if ($this->mamcqsuyswcogqwg()) { goto skkamseieeusycye; } $sgsoauswowssimyk = (array) $this->weysguygiseoukqw(Setting::qkimicaweacyckyg, []); foreach ($sgsoauswowssimyk as $oeucsuyqysaciasy) { if (!$this->caokeucsksukesyo()->issssuygyewuaswa()->askmkgcmgekiqwsg($oeucsuyqysaciasy)) { goto wiysogeqqwgioyka; } $skyukysqukkqauaa = true; goto suqkuqygkkgwyaie; wiysogeqqwgioyka: soaccwqimeksgwiw: } suqkuqygkkgwyaie: skkamseieeusycye: return $skyukysqukkqauaa; } public function imgymusqgccqsqqq($oicysemckysmigee) : ?object { $mksyucucyswaukig = null; if (is_numeric($oicysemckysmigee)) { goto syiqkaasoueowwui; } if (is_object($oicysemckysmigee)) { goto giaacoqqqsekcayy; } goto cgiscsqwwgqqaeqi; syiqkaasoueowwui: $mksyucucyswaukig = $this->awkoiwkuqamgaiku()->akkkoiiymmamsauc($oicysemckysmigee); goto cgiscsqwwgqqaeqi; giaacoqqqsekcayy: $mksyucucyswaukig = $oicysemckysmigee; cgiscsqwwgqqaeqi: return $mksyucucyswaukig; } }
