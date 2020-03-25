<?php

$nick=htmlentities($_POST['nick']); 
$text=htmlentities($_POST['text']);
$start=intval($_GET['start']);

foreach(scandir('wpisy') as $wpis)
{
   $last=$wpis; 
   if($wpis>$start)
       echo file_get_contents("wpisy/$wpis");  
}

if(!empty($nick) && !empty($text))
{    
    $text="<li><b>$nick:</b> $text</li>\n";
    file_put_contents("wpisy/".(++$last),$text);
    echo $text;
}

if($last>$start)
echo "
<script>
    start=$last;
</script>
";