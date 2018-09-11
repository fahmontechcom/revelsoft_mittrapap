<?php
if($page=="home"){ 
    require_once("modules/home/views/index.inc.php"); 
}else if($page=="about"){ 
    require_once("modules/about/views/index.inc.php"); 
}else if($page=="promotion"){ 
    require_once("modules/promotion/views/index.inc.php"); 
}else if($page=="setting"){ 
    require_once("modules/setting/views/index.inc.php"); 
}else{ 
    require_once("modules/user/views/index.inc.php");  
}
?>