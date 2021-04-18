<?php

if(!empty($_POST)){  //数组类型 保存的是POST提交的值

    echo '语文: '.$_POST['ch'],'<br>';

    echo '数学: '.$_POST['math'],'<br>';
}
echo '<hr>';

if(!empty($_GET)){ //数组类型 保存的是GET提交的值
    echo '语文: '.$_GET['ch'],'<br>';

    echo '数学: '.$_GET['math'],'<br>';

}
if(!empty($_REQUEST )){
    echo $_REQUEST ['ch'],'<br>';
}

?>