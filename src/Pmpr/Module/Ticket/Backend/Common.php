<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6554afddf3b56             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Ticket\Backend; use Pmpr\Module\Ticket\Container; use Pmpr\Module\Ticket\Model\Ticket; abstract class Common extends Container { public function umqeyekmoagusaiq($igqsaukqcqscimok) : string { $igqsaukqcqscimok = (array) $igqsaukqcqscimok; $ewgmommeawggyaek = $this->uwkmaywceaaaigwo()->issssuygyewuaswa(); if (isset($igqsaukqcqscimok[self::ckmsuwamgymouaeu])) { goto miyqyeiwquwsacsm; } $kmekouwmygismoku = $igqsaukqcqscimok[self::asywgyemkouimocw] ?? 0; $igwimgwceysgwimw = ''; if (!$kmekouwmygismoku) { goto qkcyqocqqwmqgqww; } $mmqcgecamywacuwe = Ticket::symcgieuakksimmu(); if ($mkucggyaiaukqoce = $mmqcgecamywacuwe->igawqaomowicuayw($kmekouwmygismoku, self::meksegaoamowuwoq)) { goto iggyqogweyosuikc; } if ($owaiikyuwwwmswgc = $mmqcgecamywacuwe->igawqaomowicuayw($kmekouwmygismoku, self::muqaqimusmckkieq)) { goto qqewoyookaskiuek; } if ($mokawwccycoiqeka = $mmqcgecamywacuwe->igawqaomowicuayw($kmekouwmygismoku, self::weayyoewessosyko)) { goto ssoucoucsgccekwe; } goto kqksuugcgsyeoayy; iggyqogweyosuikc: $igwimgwceysgwimw = $ewgmommeawggyaek->aeymcyaqkmmukomc($mkucggyaiaukqoce); goto kqksuugcgsyeoayy; qqewoyookaskiuek: $igwimgwceysgwimw = $ewgmommeawggyaek->aeymcyaqkmmukomc($owaiikyuwwwmswgc); goto kqksuugcgsyeoayy; ssoucoucsgccekwe: $igwimgwceysgwimw = $this->caokeucsksukesyo()->gyecsegqciqykomu()->yugsmaqmkekysqmu(trailingslashit($mokawwccycoiqeka) . "\x66\x61\166\x69\x63\x6f\x6e\56\x69\143\x6f"); kqksuugcgsyeoayy: qkcyqocqqwmqgqww: $igqsaukqcqscimok[self::owsgqueosiqycgky] = $igwimgwceysgwimw; goto eegqyykygiccaoeo; miyqyeiwquwsacsm: $igqsaukqcqscimok[self::owsgqueosiqycgky] = $ewgmommeawggyaek->aeymcyaqkmmukomc($igqsaukqcqscimok[self::ckmsuwamgymouaeu]); eegqyykygiccaoeo: $igqsaukqcqscimok[self::yqemseykugmsyeqa] = sprintf(__("\x25\x73\x20\x61\164\40\45\163", PR__MDL__TICKET), "\x6a\40\x46\x20\x59", "\x48\x3a\151"); return $this->iuygowkemiiwqmiw("\143\x6f\156\166\x65\x72\163\141\x74\x69\157\x6e\x2f\151\164\x65\x6d", $igqsaukqcqscimok); } }
