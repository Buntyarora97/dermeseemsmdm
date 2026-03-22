<?php
/* =====================================================
   Dermessence SEO + Speed Optimizer
   Safe single-file system
   ===================================================== */

if(!defined("DERM_OPTIMIZER")){

define("DERM_OPTIMIZER",true);

/* -----------------------------
START OUTPUT BUFFER
----------------------------- */

if(!ob_get_level()){
ob_start("derm_optimize_html");
}

/* -----------------------------
MAIN HTML OPTIMIZER
----------------------------- */

function derm_optimize_html($html){

/* ---------- HTML MINIFY ---------- */

$search=[
'/\>[^\S ]+/s',
'/[^\S ]+\</s',
'/(\s)+/s'
];

$replace=[
'>',
'<',
'\\1'
];

$html=preg_replace($search,$replace,$html);

/* ---------- LAZY LOAD IMAGES ---------- */

$html=preg_replace('/<img(.*?)src=/i','<img loading="lazy"$1src=',$html);

/* ---------- CANONICAL FIX ---------- */

$url="https://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

if(!preg_match('/rel=["\']canonical["\']/i',$html)){

$canonical='<link rel="canonical" href="'.$url.'" />';

$html=preg_replace('/<\/head>/i',$canonical."\n</head>",$html);

}

/* ---------- ROBOTS META ---------- */

if(!preg_match('/name=["\']robots["\']/i',$html)){

$robots='<meta name="robots" content="index,follow">';

$html=preg_replace('/<\/head>/i',$robots."\n</head>",$html);

}

/* ---------- TITLE CLEAN ---------- */

preg_match_all('/<title>(.*?)<\/title>/i',$html,$titles);

if(isset($titles[0]) && count($titles[0])>1){

$html=preg_replace('/<title>(.*?)<\/title>/i','',$html);

$html=preg_replace('/<\/head>/i','<title>'.$titles[1][0].'</title></head>',$html);

}

/* ---------- META DESCRIPTION CLEAN ---------- */

preg_match_all('/<meta name="description".*?>/i',$html,$meta);

if(isset($meta[0]) && count($meta[0])>1){

$html=preg_replace('/<meta name="description".*?>/i','',$html);

$html=preg_replace('/<\/head>/i',$meta[0][0].'</head>',$html);

}

/* ---------- H1 FIX ---------- */

if(!preg_match('/<h1/i',$html)){

preg_match('/<title>(.*?)<\/title>/i',$html,$t);

$title=isset($t[1])?$t[1]:"Dermessence";

$html=preg_replace('/<body(.*?)>/i','<body$1><h1 style="display:none">'.$title.'</h1>',$html);

}

/* ---------- PARAMETER URL FIX ---------- */

if(isset($_GET['slug'])){

$slug=htmlspecialchars($_GET['slug']);

if(strpos($url,"concern.php")!==false){

$clean="https://".$_SERVER['HTTP_HOST']."/concern/".$slug;

$html=preg_replace('/rel="canonical".*?>/i','rel="canonical" href="'.$clean.'">',$html);

}

}

return $html;

}

/* -----------------------------
GZIP COMPRESSION
----------------------------- */

if(extension_loaded("zlib") && !headers_sent()){
ob_start("ob_gzhandler");
}

/* -----------------------------
CACHE HEADERS
----------------------------- */

header("Cache-Control: public, max-age=31536000");
header("Connection: keep-alive");

}
?>