<?php

use app\model\infoModel;

$infos = new infoModel;
$info = $infos->detail_info(); 

putenv("email1={$info['email1']}");
putenv("email2={$info['email2']}");
putenv("phone1={$info['phone1']}");
putenv("phone2={$info['phone2']}");
putenv("address={$info['address']}");
putenv("twitter={$info['twitter']}");
putenv("facebook={$info['facebook']}");
putenv("youtube={$info['youtube']}");
putenv("whatsapp={$info['whatsapp']}");
 