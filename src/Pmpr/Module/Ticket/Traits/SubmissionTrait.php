<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             64a909b7d05d8             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Ticket\Traits; use Pmpr\Module\Ticket\Model\Request; use Pmpr\Module\Ticket\Model\Respond; use Pmpr\Module\Ticket\Model\Response; use Pmpr\Module\Ticket\Model\Ticket; use Pmpr\Module\Ticket\Setting; trait SubmissionTrait { public final function qismogqiwywsucie(&$uamcoiueqaamsqma, array $icwicymcioeyeyek = []) { $sogksuscggsicmac = false; if (!(isset($icwicymcioeyeyek[self::TEXT]) && $icwicymcioeyeyek[self::TEXT])) { goto kecwuwwcwokuksyq; } if (isset($icwicymcioeyeyek[self::miwkyequoaigisoa])) { goto wcesymwqykqoyuqk; } $qymookwyyeasqocu = Response::symcgieuakksimmu()->gscuuyuyauokoyuo([self::TEXT => $icwicymcioeyeyek[self::TEXT]]); if ($qymookwyyeasqocu[self::ckcawaoawwioqecq]) { goto goacqqsgaaigyuaw; } $uamcoiueqaamsqma = __("\103\141\x6e\x20\156\x6f\164\x20\x63\162\x65\141\x74\x65\x20\x72\145\x73\x70\157\x6e\163\145\54\x20\x70\x6c\x65\141\163\145\x20\x72\145\160\x6f\162\x74\x20\x74\x68\x69\x73\x20\151\x73\163\x75\145\56", PR__MDL__TICKET); goto meawswgwagoqgkye; goacqqsgaaigyuaw: $icwicymcioeyeyek[self::miwkyequoaigisoa] = $qymookwyyeasqocu[self::gouqcwikiiygyasc]; meawswgwagoqgkye: wcesymwqykqoyuqk: if (!isset($icwicymcioeyeyek[self::miwkyequoaigisoa])) { goto egasokooagakisiy; } $sogksuscggsicmac = Respond::symcgieuakksimmu()->gscuuyuyauokoyuo([self::ckmsuwamgymouaeu => $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->qyeguewwsmosqcwc(), self::asywgyemkouimocw => $icwicymcioeyeyek[self::asywgyemkouimocw], self::miwkyequoaigisoa => $icwicymcioeyeyek[self::miwkyequoaigisoa]]); if (!$sogksuscggsicmac[self::ckcawaoawwioqecq]) { goto usqgaogkqgemuima; } $this->ewcsyqaaigkicgse(self::uuqoeigueqguouek . "\162\x65\163\x70\x6f\x6e\144\137\x73\165\x62\155\x69\x74\164\145\144\137\163\x75\x63\x63\x65\163\x73\x66\165\154\154\171", $sogksuscggsicmac, $icwicymcioeyeyek); goto mswsoaimesegiiic; usqgaogkqgemuima: $sogksuscggsicmac = false; $uamcoiueqaamsqma = __("\103\x61\156\40\x6e\x6f\164\40\x63\x72\x65\x61\164\x65\40\x72\145\x73\x70\157\x6e\144\x2c\x20\x70\154\145\x61\163\x65\40\162\145\x70\x6f\x72\x74\40\x74\x68\151\x73\x20\151\x73\x73\x75\145\56", PR__MDL__TICKET); mswsoaimesegiiic: egasokooagakisiy: kecwuwwcwokuksyq: return $sogksuscggsicmac; } public final function nsswikmyaucycmcw(&$uamcoiueqaamsqma = null, array $icwicymcioeyeyek = [], bool $gioggcykgoikcwiy = true, bool $cwwowqyuwccuykom = false) { $sogksuscggsicmac = false; if (isset($icwicymcioeyeyek[self::TEXT], $icwicymcioeyeyek[self::asywgyemkouimocw])) { goto cuoqqgaygogsmmic; } $uamcoiueqaamsqma = $this->gygamsmycwkqqwcc(); goto cgewcsueoyaeikgm; cuoqqgaygogsmmic: $kskgqoywkoawosao = true; if (!$gioggcykgoikcwiy) { goto goeoymmqqqeeoime; } if (isset($icwicymcioeyeyek[self::sgsawoooocqwouiy])) { goto qgegkeomwscwwiuw; } $kskgqoywkoawosao = false; $uamcoiueqaamsqma = $this->gygamsmycwkqqwcc(); goto qmiwsequckckoaei; qgegkeomwscwwiuw: $mmqcgecamywacuwe = Ticket::symcgieuakksimmu(); $kqowykcomaagagow = $mmqcgecamywacuwe->qccooyeomgokwsma(self::sgsawoooocqwouiy, $icwicymcioeyeyek[self::sgsawoooocqwouiy]); $kskgqoywkoawosao = $icwicymcioeyeyek[self::asywgyemkouimocw] == $mmqcgecamywacuwe->keeuqgyooycqoygw($kqowykcomaagagow); qmiwsequckckoaei: goeoymmqqqeeoime: if ($kskgqoywkoawosao) { goto qmeoaqmsuseueqiy; } if ($uamcoiueqaamsqma) { goto ickcmqoiosquugwe; } $uamcoiueqaamsqma = __("\103\141\156\x20\156\157\164\40\163\x75\142\155\x69\x74\x20\x79\157\165\162\40\162\145\161\x75\x65\x73\x74\x2c\40\x70\154\145\141\163\x65\x20\x72\x65\146\162\145\163\150\40\160\x61\147\145\x20\x61\x6e\x64\x20\x74\x72\171\40\141\147\x61\151\x6e\x2e", PR__MDL__TICKET); ickcmqoiosquugwe: goto ygkcacsyyckescqs; qmeoaqmsuseueqiy: $sogksuscggsicmac = Request::symcgieuakksimmu()->gscuuyuyauokoyuo($this->ocksiywmkyaqseou(self::uuqoeigueqguouek . "\162\145\x71\x75\x65\x73\164\x5f\x73\165\142\155\151\x73\x73\x69\x6f\156\x5f\x64\141\x74\141", $icwicymcioeyeyek), $cwwowqyuwccuykom); if (!(!$sogksuscggsicmac[self::ckcawaoawwioqecq] || !$sogksuscggsicmac[self::gouqcwikiiygyasc])) { goto eiawsoasmscmqswa; } $uamcoiueqaamsqma = $sogksuscggsicmac[self::iwyueouqaqegmcas]; $sogksuscggsicmac = false; eiawsoasmscmqswa: ygkcacsyyckescqs: cgewcsueoyaeikgm: return $sogksuscggsicmac; } public final function gkwywsooooucwuiy(&$uamcoiueqaamsqma = null, array $icwicymcioeyeyek = [], bool $cwwowqyuwccuykom = false) { $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); $mcwgiymuaesaqisg = ''; $mamcqsuyswcogqwg = !$this->uwkmaywceaaaigwo()->issssuygyewuaswa()->ksgkoukcicwkkaum(); if (!$mamcqsuyswcogqwg) { goto sukskmcwsoysiuqu; } $mcwgiymuaesaqisg = strtolower($yyauwyaeewsickwk->uniqid()); $icwicymcioeyeyek[self::sgsawoooocqwouiy] = $mcwgiymuaesaqisg; sukskmcwsoysiuqu: $icwicymcioeyeyek[self::meksegaoamowuwoq] = $this->caokeucsksukesyo()->issssuygyewuaswa()->kuswmimkgmyuymiu(); $mmqcgecamywacuwe = Ticket::symcgieuakksimmu(); $sogksuscggsicmac = $mmqcgecamywacuwe->gscuuyuyauokoyuo($this->ocksiywmkyaqseou(self::uuqoeigueqguouek . "\164\151\x63\x6b\x65\164\x5f\163\x75\142\155\x69\x73\163\x69\x6f\156\x5f\144\141\x74\141", $icwicymcioeyeyek), $cwwowqyuwccuykom); if ($sogksuscggsicmac[self::ckcawaoawwioqecq] && $sogksuscggsicmac[self::gouqcwikiiygyasc]) { goto eyiamcekkgkiawqy; } $uamcoiueqaamsqma = $sogksuscggsicmac[self::iwyueouqaqegmcas]; $sogksuscggsicmac = false; goto twkmiuomimomscew; eyiamcekkgkiawqy: $kmekouwmygismoku = $sogksuscggsicmac[self::gouqcwikiiygyasc]; $icwicymcioeyeyek[self::asywgyemkouimocw] = $kmekouwmygismoku; if ($aqmwamyiwgeeymqa = $this->nsswikmyaucycmcw($uamcoiueqaamsqma, $icwicymcioeyeyek, false, $cwwowqyuwccuykom)) { goto igymseewwyiocoug; } $sogksuscggsicmac = false; $mmqcgecamywacuwe->sgcuwcowgwimgsgk($kmekouwmygismoku); goto mqccmesakuemceqi; igymseewwyiocoug: $sogksuscggsicmac[self::qgeesceacsmeqacu] = $aqmwamyiwgeeymqa; mqccmesakuemceqi: twkmiuomimomscew: if ($uamcoiueqaamsqma) { goto kooskuwkuayiuose; } $ggauoeuaesiymgee = __("\131\x6f\x75\162\40\162\x65\x71\x75\145\x73\x74\x20\163\x75\x62\x6d\151\164\164\145\144\x20\x73\x75\x63\x63\x65\x73\x73\x66\x75\154\154\171\x2e", PR__MDL__TICKET); $qeweemoqwwsoumeg = $mamcqsuyswcogqwg ? Setting::cisgcggusgaawook : Setting::oqiwasoeoocgqemg; $uamcoiueqaamsqma = $yyauwyaeewsickwk->qquwggyuqouqumam(Setting::symcgieuakksimmu()->giiuwsmyumqwwiyq($qeweemoqwwsoumeg, $ggauoeuaesiymgee), [self::sgsawoooocqwouiy => strtoupper($mcwgiymuaesaqisg)]); kooskuwkuayiuose: return $sogksuscggsicmac; } }
