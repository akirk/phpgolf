<?p(str_split(WORD),$w);function p($i,$p){global$w;$i||$w[]=join($p);foreach($i as$k=>$u){$q=$p;$o=$i;$q[]=$u;unset($o[$k]);p($o,$q);}}sort($w);?><?=join("
",$w);