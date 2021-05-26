
<?php 
$handle = fopen("newfile.txt", "r");
if($handle){
    while(($line = fgets($handle)) !== false){
        $site = substr($line, strpos($line, ',')+1);
        $url = escapeshellarg('https://'.$site);
        echo $url;
        echo $site;
        $output = exec("./getcontent.sh $url $site");
    }
    fclose($handle);
}