<?php
function URL($key = null){ 
     $arr=explode("/",trim($_GET['url']?? 'login',"/"));
     if(!is_numeric($key))
     return $arr;
    return $arr[$key] ?? '';
}
// echo '<pre>';
// print_r(URL());
// echo '</pre>';
// echo 'page name is:' .URL(0);



 $file=URL(0).'.php';
// echo $file;
if($file=='index.php'){
    require '../404.php';
}elseif(file_exists($file)){
    require $file;
}else{
    require '../404.php';
}

?>