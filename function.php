<?php
function translation($translation){
    $roman_lib = array(
        'BB','CC','DD','FF','GG','HH','JJ','KK','LL','MM','NN','PP','QQ','RR','SS','TT','VV','WW','XX','YY','ZZ',
        'KA','KI','KU','KE','KO',
        'GA','GI','GU','GE','GO',
        'KYA','KYI','KYU','KYE','KYO',
        'GYA','GYI','GYU','GYE','GYO',
        'SHA','SHI','SHU','SHE','SHO',
        'TSU','SA','SHI','SU','SE','SO',
        'ZA','ZI','ZU','ZE','ZO',
        'SYA','SYI','SYU','SYE','SYO',
        'JA','JI','JU','JE','JO',
        'ZYA','ZYI','ZYU','ZYE','ZYO',
        'XTU','LTU','TA','TI','TU','TE','TO',
        'DYA','DYI','DYU','DYE','DYO',
        'DHA','DHI','DHU','DHE','DHO',
        'DA','DI','DU','DE','DO',
        'CHA','CHI','CHU','CHE','CHO',
        'TYA','TYI','TYU','TYE','TYO',
        'NA','NI','NU','NE','NO',
        'NYA','NYI','NYU','NYE','NYO',
        'THA','THI','THU','THE','THO',
        'HA','HI','HU','HE','HO',
        'BA','BI','BU','BE','BO',
        'HYA','HYI','HYU','HYE','HYO',
        'BYA','BYI','BYU','BYE','BYO',
        'PA','PI','PU','PE','PO',
        'PYA','PYI','PYU','PYE','PYO',
        'MA','MI','MU','ME','MO',
        'MYA','MYI','MYU','MYE','MYO',
        'RYA','RYI','RYU','RYE','RYO',
        'YA','YI','YU','YE','YO',
        'RA','RI','RU','RE','RO',
        'WA','WI','WU','WE','WO',
        'SI','TI','TU',
        'XA','XI','XU','XE','XO',
        'LA','LI','LU','LE','LO',
        'VA','VI','VU','VE','VO',
        'FA','FI','FU','FE','FO',
        'QA','QI','QU','QE','QO',
        'A','I','U','E','O','N','-'
     );
    $kana_lib = array(
        'っB','っC','っD','っF','っG','っH','っJ','っK','っL','っM','ん','っP','っQ','っR','っS','っT','っV','っW','っX','っY','っZ',
        'か','き','く','け','こ',
        'が','ぎ','ぐ','げ','ご',
        'きゃ','きぃ','きゅ','きぇ','きょ',
        'ぎゃ','ぎぃ','ぎゅ','ぎぇ','ぎょ',
        'しゃ','し','しゅ','しぇ','しょ',
        'つ','さ','し','す','せ','そ',
        'ざ','じ','ず','ぜ','ぞ',
        'しゃ','しぃ','しゅ','しぇ','しょ',
        'じゃ','じ','じゅ','じぇ','じょ',
        'じゃ','じぃ','じゅ','じぇ','じょ',
        'っ','っ','た','ち','つ','て','と',
        'ぢゃ','ぢぃ','ぢゅ','ぢぇ','ぢょ',
        'でゃ','でぃ','でゅ','でぇ','でぃ',
        'だ','ぢ','づ','で','ど',
        'ちゃ','ち','ちゅ','ちぇ','ちょ',
        'ちゃ','ちぃ','ちゅ','ちぇ','ちょ',
        'な','に','ぬ','ね','の',
        'にゃ','にぃ','にゅ','にぇ','にょ',
        'てゃ','てぃ','てゅ','てぇ','てょ',
        'は','ひ','ふ','へ','ほ',
        'ば','び','ぶ','べ','ぼ',
        'ひゃ','ひぃ','ひゅ','ひぇ','ひょ',
        'びゃ','びょ','びゅ','びぇ','びょ',
        'ぱ','ぴ','ぷ','ぺ','ぽ',
        'ぴゃ','ぴぃ','ぴゅ','ぴぇ','ぴょ',
        'ま','み','む','め','も',
        'みゃ','みぃ','みゅ','みぇ','みょ',
        'りゃ','りぃ','りゅ','りぇ','りょ',
        'や','い','ゆ','いぇ','よ',
        'ら','り','る','れ','ろ',
        'わ','うぃ','う','うぇ','を',
        'し','ち','つ',
        'ぁ','ぃ','ぅ','ぇ','ぉ',
        'ぁ','ぃ','ぅ','ぇ','ぉ',
        'ヴぁ','ヴぃ','ヴ','ヴぇ','ヴぉ',
        'ふぁ','ふぃ','ふ','ふぇ','ふぉ',
        'くぁ','くぃ','く','くぇ','くぉ',
        'あ','い','う','え','お','ん','ー'
    );
    return str_ireplace($roman_lib,$kana_lib,$translation);
}

function ime($word){
    $word = urlencode($word);
    $google = file_get_contents("http://www.google.com/transliterate?langpair=ja-Hira|ja&text={$word}");
    $word = json_decode($google);
    foreach ($word as $status){
        $line .= $status['1']['0'];
    }
    return $line;
}
?>
