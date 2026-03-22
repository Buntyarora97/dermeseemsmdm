<?php

set_time_limit(0);

$directory = __DIR__;

function convertToWebP($source,$quality=75){

$info=getimagesize($source);

if(!$info) return;

$mime=$info['mime'];

if($mime=='image/jpeg'){
$image=imagecreatefromjpeg($source);
}

elseif($mime=='image/png'){
$image=imagecreatefrompng($source);
}

else{
return;
}

$webp=str_replace(['.jpg','.jpeg','.png'],'.webp',$source);

imagewebp($image,$webp,$quality);

imagedestroy($image);

echo "Converted: ".$webp."<br>";

}

$rii=new RecursiveIteratorIterator(new RecursiveDirectoryIterator($directory));

foreach($rii as $file){

if($file->isDir()) continue;

$path=$file->getPathname();

if(preg_match('/\.(jpg|jpeg|png)$/i',$path)){

convertToWebP($path);

}

}

echo "All images converted";

?>