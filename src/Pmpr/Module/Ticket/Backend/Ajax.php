<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             654a1f599a9cf             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Ticket\Backend; use Pmpr\Common\Foundation\ORM\DB\Model; use Pmpr\Module\Ticket\Model\Respond; use Pmpr\Module\Ticket\Traits\SubmissionTrait; class Ajax extends Common { use SubmissionTrait; const kkgocwccwyueqioi = self::uuqoeigueqguouek . "\x62\141\x63\153\x65\x6e\144\x5f\x73\x75\142\155\x69\x74\137\x72\145\163\x70\x6f\156\x73\145"; const myikkigscysoykgy = ["\x73\165\142\x6d\151\x74\x5f\162\x65\x73\160\x6f\x6e\x73\x65" => self::kkgocwccwyueqioi]; public function wigskegsqequoeks() { $this->koaegcswmcqsiykq(self::kkgocwccwyueqioi, [$this, "\145\x69\167\145\x61\143\171\157\141\171\x6b\167\153\x79\x73\x6d"]); } public function eiweacyoaykwkysm() { $keccaugmemegoimu = ''; $occymigcemkqucuw = false; if (!$this->miueaekaaugaccmg($iswcokucwmiosiaq)) { goto soqqemyioggmoakg; } $icwicymcioeyeyek = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->yyqgamuwwakgciey(); if (!($sogksuscggsicmac = $this->qismogqiwywsucie($iswcokucwmiosiaq, $icwicymcioeyeyek))) { goto wmmggowmigekyoso; } $occymigcemkqucuw = true; $mksyucucyswaukig = $sogksuscggsicmac[self::ckmqoekmugkggeym]; if (!$mksyucucyswaukig instanceof Respond) { goto ywqgcegomwaiuquc; } $mcmciwgeuccgyuqm = Respond::symcgieuakksimmu(); $siquossayskcwkea = $mcmciwgeuccgyuqm->oskuyokuycaksiou($mksyucucyswaukig); $keccaugmemegoimu = $this->umqeyekmoagusaiq([self::TEXT => $mcmciwgeuccgyuqm->gyuyqkwsaoukoksc(self::miwkyequoaigisoa, $siquossayskcwkea, self::TEXT), self::ckmsuwamgymouaeu => $mcmciwgeuccgyuqm->qogaqkcsogcqiaic($siquossayskcwkea, self::ckmsuwamgymouaeu), Model::CREATED_AT => $mcmciwgeuccgyuqm->qogaqkcsogcqiaic($siquossayskcwkea, Model::CREATED_AT)]); ywqgcegomwaiuquc: wmmggowmigekyoso: soqqemyioggmoakg: if (!(!$occymigcemkqucuw && $iswcokucwmiosiaq)) { goto acaqummmoyiemqss; } $keccaugmemegoimu = $this->caokeucsksukesyo()->wmkogisswkckmeua()->mumsqekeeuykyemy($this->gcsweumukyckmgik($iswcokucwmiosiaq)); acaqummmoyiemqss: $this->uaggqsoeugksgooc($occymigcemkqucuw, $keccaugmemegoimu); } }
