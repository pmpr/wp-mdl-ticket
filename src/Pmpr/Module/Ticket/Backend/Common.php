<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6687085b8bd11             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Ticket\Backend; use Pmpr\Module\Ticket\Container; use Pmpr\Module\Ticket\Model\Ticket; abstract class Common extends Container { public function umqeyekmoagusaiq($igqsaukqcqscimok) : string { $igqsaukqcqscimok = (array) $igqsaukqcqscimok; $ewgmommeawggyaek = $this->uwkmaywceaaaigwo()->issssuygyewuaswa(); if (isset($igqsaukqcqscimok[self::ckmsuwamgymouaeu])) { goto asmecuqiyyswueqe; } $kmekouwmygismoku = $igqsaukqcqscimok[self::asywgyemkouimocw] ?? 0; $igwimgwceysgwimw = ''; if (!$kmekouwmygismoku) { goto myoicgcuugciueis; } $mmqcgecamywacuwe = Ticket::symcgieuakksimmu(); if ($mkucggyaiaukqoce = $mmqcgecamywacuwe->igawqaomowicuayw($kmekouwmygismoku, self::meksegaoamowuwoq)) { goto qogqewiwmwiwskgm; } if ($owaiikyuwwwmswgc = $mmqcgecamywacuwe->igawqaomowicuayw($kmekouwmygismoku, self::muqaqimusmckkieq)) { goto qgoiooayqmqqsiok; } if ($mokawwccycoiqeka = $mmqcgecamywacuwe->igawqaomowicuayw($kmekouwmygismoku, self::weayyoewessosyko)) { goto qwigomakwmyiwkgo; } goto qiaqsassksqiuyae; qogqewiwmwiwskgm: $igwimgwceysgwimw = $ewgmommeawggyaek->aeymcyaqkmmukomc($mkucggyaiaukqoce); goto qiaqsassksqiuyae; qgoiooayqmqqsiok: $igwimgwceysgwimw = $ewgmommeawggyaek->aeymcyaqkmmukomc($owaiikyuwwwmswgc); goto qiaqsassksqiuyae; qwigomakwmyiwkgo: $igwimgwceysgwimw = $this->caokeucsksukesyo()->gyecsegqciqykomu()->yugsmaqmkekysqmu(trailingslashit($mokawwccycoiqeka) . "\146\141\x76\151\143\157\x6e\x2e\151\x63\x6f"); qiaqsassksqiuyae: myoicgcuugciueis: $igqsaukqcqscimok[self::owsgqueosiqycgky] = $igwimgwceysgwimw; goto csscmcacoikwsecs; asmecuqiyyswueqe: $igqsaukqcqscimok[self::owsgqueosiqycgky] = $ewgmommeawggyaek->aeymcyaqkmmukomc($igqsaukqcqscimok[self::ckmsuwamgymouaeu]); csscmcacoikwsecs: $igqsaukqcqscimok[self::yqemseykugmsyeqa] = sprintf(__("\x25\163\x20\x61\x74\x20\45\x73", PR__MDL__TICKET), "\x6a\40\106\40\x59", "\110\x3a\151"); return $this->iuygowkemiiwqmiw("\x63\157\x6e\166\x65\162\163\x61\164\x69\157\156\57\151\164\145\155", $igqsaukqcqscimok); } }
