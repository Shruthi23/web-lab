<?php
$fp=fopen("count.txt","r");
$cnt=fread($fp,10);
fclose($fp);
$cnt=$cnt+1;
echo"<p>page views:" .$cnt. "</p>";
$fp=fopen("count.txt","w");
fwrite($fp,$cnt);
fclose($fp);
?>
