<?$o=sqrt($i=strlen($y=$w=str_replace(" ","",WORDS)));while($i--)$y[$i/$o+$i%$o*$o]=$w[$i];echo wordwrap($y,$o,"
",1);