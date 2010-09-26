<?$w=str_split(WORD);while($c++<1e5){shuffle($w);$o[join($w)]=1;}ksort($o);?><?=join("
",array_keys($o));