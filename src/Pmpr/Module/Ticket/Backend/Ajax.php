<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             649c4c9b259ed             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Ticket\Backend; use Pmpr\Common\Foundation\ORM\DB\Model; use Pmpr\Module\Ticket\Model\Respond; use Pmpr\Module\Ticket\Traits\SubmissionTrait; class Ajax extends Common { use SubmissionTrait; const kkgocwccwyueqioi = self::uuqoeigueqguouek . "\x62\141\x63\x6b\145\156\144\137\x73\165\142\x6d\151\x74\137\162\145\163\160\157\x6e\x73\145"; const myikkigscysoykgy = ["\x73\165\x62\x6d\151\x74\137\x72\145\163\160\x6f\x6e\163\x65" => self::kkgocwccwyueqioi]; public function wigskegsqequoeks() { $this->koaegcswmcqsiykq(self::kkgocwccwyueqioi, [$this, "\145\x69\x77\145\141\x63\171\157\x61\x79\153\x77\x6b\171\163\155"]); } public function eiweacyoaykwkysm() { $keccaugmemegoimu = ''; $occymigcemkqucuw = false; if (!$this->miueaekaaugaccmg($iswcokucwmiosiaq)) { goto kuicqywysciceggs; } $icwicymcioeyeyek = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->yyqgamuwwakgciey(); if (!($sogksuscggsicmac = $this->qismogqiwywsucie($iswcokucwmiosiaq, $icwicymcioeyeyek))) { goto cuykwgmswkskqkyi; } $occymigcemkqucuw = true; $mksyucucyswaukig = $sogksuscggsicmac[self::ckmqoekmugkggeym]; if (!$mksyucucyswaukig instanceof Respond) { goto csscmcacoikwsecs; } $mcmciwgeuccgyuqm = Respond::symcgieuakksimmu(); $siquossayskcwkea = $mcmciwgeuccgyuqm->oskuyokuycaksiou($mksyucucyswaukig); $keccaugmemegoimu = $this->umqeyekmoagusaiq([self::TEXT => $mcmciwgeuccgyuqm->gyuyqkwsaoukoksc(self::miwkyequoaigisoa, $siquossayskcwkea, self::TEXT), self::ckmsuwamgymouaeu => $mcmciwgeuccgyuqm->qogaqkcsogcqiaic($siquossayskcwkea, self::ckmsuwamgymouaeu), Model::CREATED_AT => $mcmciwgeuccgyuqm->qogaqkcsogcqiaic($siquossayskcwkea, Model::CREATED_AT)]); csscmcacoikwsecs: cuykwgmswkskqkyi: kuicqywysciceggs: if (!(!$occymigcemkqucuw && $iswcokucwmiosiaq)) { goto mkwskuycuyguqqok; } $keccaugmemegoimu = $this->caokeucsksukesyo()->wmkogisswkckmeua()->mumsqekeeuykyemy($this->gcsweumukyckmgik($iswcokucwmiosiaq)); mkwskuycuyguqqok: $this->uaggqsoeugksgooc($occymigcemkqucuw, $keccaugmemegoimu); } }
