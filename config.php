<?php

use app\helper\maskPhone;
use app\model\infoModel;

$phones = new maskPhone;
$infos = new infoModel;
$info = $infos->detail_info();  
$phone1 = $phones->fone($info['phone1']);
$phone2 = $phones->fone($info['phone2']);

putenv("email1={$info['email1']}");
putenv("email2={$info['email2']}");
putenv("phone1={$phone1}");
putenv("phone2={$phone2}");
putenv("address={$info['address']}");
putenv("twitter={$info['twitter']}");
putenv("facebook={$info['facebook']}");
putenv("youtube={$info['youtube']}");
putenv("whatsapp={$info['whatsapp']}");
 