<?php
//php file is clear on is on
function URL($key = null){ 
     $arr=explode("/",trim($_GET['url']?? 'home',"/"));
     if(!is_numeric($key))
     return $arr;
    return $arr[$key] ?? '';
}
// echo '<pre>';
// print_r(URL());
// echo '</pre>';
// echo 'page name is:' .URL(0);
$file=URL(0).'.php';
if(file_exists($file)){
    require $file;
}else{
   require '404.php';
}
?>