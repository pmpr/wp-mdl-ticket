<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ce11e4813aa             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Ticket\Backend; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Ticket\Container; use Pmpr\Module\Ticket\Model\Ticket; abstract class Common extends Container { public function umqeyekmoagusaiq($igqsaukqcqscimok) : string { $igqsaukqcqscimok = (array) $igqsaukqcqscimok; $ewgmommeawggyaek = $this->uwkmaywceaaaigwo()->issssuygyewuaswa(); if (isset($igqsaukqcqscimok[Constants::ckmsuwamgymouaeu])) { goto acaqummmoyiemqss; } $kmekouwmygismoku = $igqsaukqcqscimok[Ticket::asywgyemkouimocw] ?? 0; $igwimgwceysgwimw = ''; if (!$kmekouwmygismoku) { goto soqqemyioggmoakg; } $mmqcgecamywacuwe = Ticket::symcgieuakksimmu(); if ($mkucggyaiaukqoce = $mmqcgecamywacuwe->igawqaomowicuayw($kmekouwmygismoku, Constants::meksegaoamowuwoq)) { goto eegqyykygiccaoeo; } if ($owaiikyuwwwmswgc = $mmqcgecamywacuwe->igawqaomowicuayw($kmekouwmygismoku, Constants::muqaqimusmckkieq)) { goto ywqgcegomwaiuquc; } if ($mokawwccycoiqeka = $mmqcgecamywacuwe->igawqaomowicuayw($kmekouwmygismoku, Constants::weayyoewessosyko)) { goto wmmggowmigekyoso; } goto miyqyeiwquwsacsm; eegqyykygiccaoeo: $igwimgwceysgwimw = $ewgmommeawggyaek->aeymcyaqkmmukomc($mkucggyaiaukqoce); goto miyqyeiwquwsacsm; ywqgcegomwaiuquc: $igwimgwceysgwimw = $ewgmommeawggyaek->aeymcyaqkmmukomc($owaiikyuwwwmswgc); goto miyqyeiwquwsacsm; wmmggowmigekyoso: $igwimgwceysgwimw = $this->caokeucsksukesyo()->gyecsegqciqykomu()->yugsmaqmkekysqmu(trailingslashit($mokawwccycoiqeka) . "\x66\x61\x76\151\x63\x6f\156\56\x69\143\x6f"); miyqyeiwquwsacsm: soqqemyioggmoakg: $igqsaukqcqscimok[Constants::owsgqueosiqycgky] = $igwimgwceysgwimw; goto suswcqoyyqkkquuo; acaqummmoyiemqss: $igqsaukqcqscimok[Constants::owsgqueosiqycgky] = $ewgmommeawggyaek->aeymcyaqkmmukomc($igqsaukqcqscimok[Constants::ckmsuwamgymouaeu]); suswcqoyyqkkquuo: $igqsaukqcqscimok[Constants::yqemseykugmsyeqa] = sprintf(__("\45\163\40\141\x74\40\x25\x73", PR__MDL__TICKET), "\152\40\106\x20\131", "\110\x3a\151"); return $this->iuygowkemiiwqmiw("\x63\157\156\x76\145\x72\163\x61\164\151\157\x6e\57\x69\164\145\155", $igqsaukqcqscimok); } }
