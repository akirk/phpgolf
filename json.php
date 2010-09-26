<?while($i=eregi('"([a-z]+)": ([0-9]+)',substr(JSON,$j+=$i),$w))$u[$w[1]]=$w[2];}ksort($u);foreach($u as$k=>$v)echo"$k = $v
";