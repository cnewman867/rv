 <?php

// Get Alexa top 1 million file
$ch = curl_init();
$source = "http://s3.amazonaws.com/alexa-static/top-1m.csv.zip";
curl_setopt($ch, CURLOPT_URL, $source);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$data = curl_exec ($ch);
curl_close ($ch);

// save as top-1m.csv.zip
$destination = "top-1m.csv.zip"; 
$file = fopen($destination, "w+");
fputs($file, $data);
fclose($file);

echo " top-1m.csv.zip downloaded; ";

// unzip
$zip = new ZipArchive;
$res = $zip->open($destination);
if ($res === TRUE) {
    $zip->extractTo('.'); // directory to extract contents to
    $zip->close();
    echo $destination . ' extracted; ';

} else {
    echo ' unzip failed; ';
}

$filename = "top-1m.csv";

$file = fopen("output.csv", "w");

$lines = file($filename);
for($i = 39; $i < 49; $i++) {

	$data = explode(',',$lines[$i]);

	fputcsv($file, $data);

}

fclose($file);
echo "output.csv saved";