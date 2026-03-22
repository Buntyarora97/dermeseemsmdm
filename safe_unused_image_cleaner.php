<?php

set_time_limit(0);

$root = __DIR__;
$backupFolder = $root."/unused_images_backup";

if(!file_exists($backupFolder)){
mkdir($backupFolder,0755,true);
}

$usedImages = [];

$iterator = new RecursiveIteratorIterator(
new RecursiveDirectoryIterator($root)
);

foreach($iterator as $file){

if($file->isDir()) continue;

$ext = pathinfo($file,PATHINFO_EXTENSION);

if(in_array($ext,['php','html','css','js'])){

$content = file_get_contents($file);

preg_match_all('/(images|assets|uploads)\/[^\s"\']+\.(jpg|jpeg|png|webp|gif)/i',$content,$matches);

foreach($matches[0] as $img){
$usedImages[]=$img;
}

}

}

$usedImages = array_unique($usedImages);

echo "<h2>Scanning Images...</h2>";

foreach($iterator as $file){

if($file->isDir()) continue;

$ext = pathinfo($file,PATHINFO_EXTENSION);

if(in_array($ext,['jpg','jpeg','png','webp','gif'])){

$relativePath = str_replace($root.'/','',$file);

if(!in_array($relativePath,$usedImages)){

$newLocation = $backupFolder."/".basename($file);

rename($file,$newLocation);

echo "Moved: ".$relativePath."<br>";

}

}

}

echo "<br><b>Cleanup Finished</b>";

?>