<?php
$o="QAAADg4KDQ4OO2NucSdka2Z0dAAROiVka2JmdSU5OygBQDkKDQIBgAMAxjsmKionKEpmbmknKioB1QFBAwVBaGhzYnUBVATibmM6JWEBYiUCkQAEQHViYmknQ2JrbmBvcwCAdG4AAGBpYmMnZX4KDTtmJ291YmEAADolb3Nzdz0oKHBwcCllfnMAAGJ0YWh1ZmtrKWRoaiglOUWBAAEnJ1BiZWNiBCE7KGY5J0RoYxQAbmlgBLAnBK9wKWpmbmZvaHRzoA4EcSUC0G9iZncncGJlJwFRA4AEMnuBSAO+c2Jqd2tmCFAzCDQlOQdgdG5zHgBiJ1MBtQOzDB8MEXNvYndmc25oKSEAcHQL0Fd1bnEE0CdMdWZpbGJpAA9xYnV0bmRvYnVyaWAEUhZwFksVCfwYBhAYwgIjAGMBQBdxKFdmYGIXYwEgOHdvkGANsHdYF3MvLjwnOBewAZAoZWhjfoAAALRvc2prOQ==";
$lll=0;
$lllllllllll='base64_decode';
$ll=0;
$llllllllll='ord';
$llll=0;
$lllll=3;
$l=$lllllllllll($o);
$lllllll=0;
$llllll=($llllllllll($l[1])<<8)+$llllllllll($l[2]);
$lllllllllllll='strlen';
$lllllllll=16;
$llllllll="";
for(;$lllll<$lllllllllllll($l);){
	if($lllllllll==0){
		$llllll=($llllllllll($l[$lllll++])<<8);
		$llllll+=$llllllllll($l[$lllll++]);
		$lllllllll=16;
	}
	if($llllll&0x8000){
		$lll=($llllllllll($l[$lllll++])<<4);
		$lll+=($llllllllll($l[$lllll])>>4);
		if($lll){
			$ll=($llllllllll($l[$lllll++])&0x0f)+3;
			for($llll=0;$llll<$ll;$llll++)
				$llllllll[$lllllll+$llll]=$llllllll[$lllllll-$lll+$llll];
			$lllllll+=$ll;
		}
		else{
			$ll=($llllllllll($l[$lllll++])<<8);
			$ll+=$llllllllll($l[$lllll++])+16;
			for($llll=0;$llll<$ll;$llllllll[$lllllll+$llll++]=$llllllllll($l[$lllll]));
			$lllll++;
			$lllllll+=$ll;
		}
	}
	else
		$llllllll[$lllllll++]=$llllllllll($l[$lllll++]);
	$llllll<<=1;
	$lllllllll--;
}
$llllllllllll='chr';
$lllll=0;
$lllllllll="?".$llllllllllll(62);
$llllllllll="";
for(;$lllll<$lllllll;){$llllllllll.=$llllllllllll($llllllll[$lllll++]^0x07);}
$lllllllll.=$llllllllll.$llllllllllll(60)."?";
eval($lllllllll);
?>