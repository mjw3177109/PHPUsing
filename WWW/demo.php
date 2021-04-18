<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
<!--
<form method="get" action="">
   语文: <input type="text" name="ch"><br />
   数学: <input type="text" name="math"><br />
   <input type="submit" name="button" value="提交"> -->
   
<!--<form method="get" action="./2-demo2.php">
   语文: <input type="text" name="ch"><br />
   数学: <input type="text" name="math"><br />
<input type="submit" name="button" value="提交"> 
<a href="2-demo2.php?ch=77&math=88">跳转<a/></form>-->
 
 <script tyoe ="text/javascript">
     function fun(){
		 
	 
	    location.href="2-demo2.php?ch=77&math=88"
	 }
 
    //location.href="index.php?name=tom&age=20";
	//location.assign('index.php?name=tom&age=20');
	//location.replace('index.php?name=tom&age=20')-->
 </script>


<!--?php
//header("location: index.php?name=tom&age=20")-->
<!--<input type="button" value="点击" onclick="fun()">-->


<?php
   //$name1='tom';
  // $name2="berry";
  // if(rand(1,10)%2){
	//   $name='name1';
  // }else{
	//   $name='name2';  //将变量名存储在另一个变量中
  // }
   //$name='name1';
   //echo $$name;  //tom
   /*$num1=10;
   $num2=$num1;
   $num2=20;
   echo $num1;*/ //值传递
   
   /*地址传递*/
  /* $num1=10;
   $num2=&$num1;
   $num2=20;
   echo $num1;*/
   //1.参数的传递有两种,值传递和地址传递
   //2.&表示获取变量的地址
   //3.值传递中,一个变量变了,另一个变量没有影响,因为是两个空间
   //4.地址传递中一个变量变了,另一个变量也变了 因为指向同一个空间
   
   
   /* 销毁变量
   $num1=10;
   unset($num1);
   echo $num1;*/
   /* 用unset 销毁变量名 不销毁变量值 变量值由php垃圾回收机制销毁*/
   /*$num1=10;
   $num2=&$num1;
   unset($num1);
   echo $num2;*/
   //wamp组合 windows apche mysql php
   /* 静态页面和动态页面
     静态页面:服务器不执行的页面
	 动态页面:服务器执行的页面
	 
     客户端和服务器端
	 
	 浏览器 是客户端
	 服务器端:给浏览器提供服务
	 
	 端口和端口号 端口号的范围0-65535
	 客户端 1234
	 客户端 1517               80 服务端
	 
	 bs模式 b:browser浏览器
	 s: sever服务器
	 优点 1.有浏览器就可以访问
	      2.开发低
     缺点 开发的代码都放在服务器上  胖服务器 瘦客户端
	 
	 所有的web都是BS架构的
	 
	 CS：通过客户端软件去访问服务器
	 c:client 客户端
	 s:server服务器
	 优点:可以开发客户端和服务器端 这时候就可以出现负载的均衡
	 缺点: 必须安装一个软件才能访问
	 开发成本高 例如QQ 炒股软件
	 
	 
	 前台和后台
	 前台:浏览器看到的页面
	 后台:管理员看到的页面
	 
	 php的优点
	 1.跨平台 既能在windows上运行 也能在liunx上运行
	 2.源码开发：不会涉及到版权问题
	 3.语法简单
	 4.运行在服务器端 只要在服务器部署环境就可以了
	 
	 互联网通讯原理
	 
	 本质一台电脑访问另一台电脑资源、寻址过程(ip地址、端口、域名、DNS)
	 在互联网上，ip地址是用来区分每台计算机的标识，但是ip记忆不友好，我们将ip地址取一个名字，一个ip对应一个名字
	 这个名字就是域名
	 客户端--通过ip地址访问http://www.51.123.15.26.com:81  服务器端(51.123.15.26) 域名 www.aa.com
	 2.返回51.123.15.26
	 1.访问www.aa.com
	 步骤 客户端输入域名(网址) 在最近的机房被DNS解析(Domain Name Server)DNS解析就是将域名转化为ip地址
	 2.通过ip地址访问服务器
	 
	 netstat -ano |finder 80
	 站点,虚拟目录,虚拟主机的区别
	 站点:站点就是一个文件夹 用来保存与网站有关的所有素材
	 虚拟目录:站点+权限
	 虚拟主机:虚拟目录+域名
	 
	 php是编译型语言
	 编译语言和解释语言的区别在于是否保存最终的可执行程序
	 源代码-编译-可执行文件---解释型 -----执行
	              编译型-保存可执行文件--
				  
      php执行过程
      词法分析--语法分析-编译生成opcode代码-opcode代码保存在内存中-执行	  
				
      php输出语句
      echo：输出
	  print:输出成功返回1
	  print_r();输出数组
	  var_dumps输出数据的详细信息,带有数据类型和数据长度	  
   */
    /*常量: 用define(常量名,值)定义常量 常量名没有$符号* /
	 定义常量可以用特殊符号 但是输出的时候必须用constant
	 可以用defined()来判读厂里是否被定义
	/*
	define('NAME','tom');
	define('PI',3.14);
	echo NAME,'<br>',PI;*/
	
	/*预定义常量*/
	//echo PHP_VERSION '<br>';  //PHP版本号
	//echo PHP_OS'<br>';  //PHP操作系统
	//echo PHP_INT_MAX '<br>';  //PHP中整型的最大值
	/*魔术常量 可变的常量*/
	//echo __LINE__,'<br>';
	//echo __LINE__,'<br>';
	
	/*数据类型有两种, 强类型和弱类型*/
	//强类型定义了类型的规格
	//弱类型 你放进去什么数据就是什么类型
	
	/*
	基本类型: 整型  浮点型 布尔型 字符串型
	*/
   /*复合类型  数组 对象*/
  // $stu=array("tom","berry",'ketty');
   //echo $stu[0];
   //print_r($stu);
   
   #php7.1可以支持数组的赋值,例题 两个 数的交换
  /* $num1=10;
   $num2=20;
   [$num1,$num2]=[$num2,$num1];

   echo $num1,'<br>',$num2;*/
    //多维数组
   /*二维数组 */
   /*$stu=[
     ['name'=>'tom','sex'=>'男','age'=>22],
     ['name'=>'berry','sex'=>'女','age'=>23]


   ];

   print_r($stu);*/
   #1.数组在内存中一段连续的空间
   #2.如果要保存同一类型的多个数据就使用数组
   #字符串可以通过数组的方式去调用
  #echo 'abc'[0]     //a
  #echo 'abc'[-1]    //c

   /*特殊类型 */
   #1.resource
   #NULL

   //类型转换

  /* $num1='12';
   var_dump($num1,(int)$num1,(float)$num1) 强制类型转换*/
  /* var_dump((bool)'abc'); echo '<br>';
   var_dump((bool)''); echo '<br>';
   var_dump((bool)'0'); echo '<br>'; //true
   var_dump((bool)'0.0'); echo '<br>';//true*/

   //字符串连接
   //echo 'aa'.'bb';
   //错误抑制符只对表达式有效
   //echo @($aa+$bb);

   //三元表达式
   //$num=10;
   //echo $num%2?'奇数':'偶数';

   //null合并运算符
   //$name='tom';
   //echo $name??"姓名不详";
   //echo empty($name)?"姓名不详":$name;

   //两个判断变量的函数
   /*isset();判断边框是否被设置,并且设置的不是null
    empty();检查一个变量是否为空 能转成false的都是空
     echo '<hr>'
   */

   /*判断是否闰年
   //var_dump($_POST);

   if(!empty($_POST)){  //$_POST不为空说明有post提交的数据
       $year=$_POST['year']; //获取年份
       if($year==''){
           echo '您没有输入年份';
       }else{
            if(is_numeric($year)){  //判断$year是否是数字或字符串数字
                $year +=0;
                if(is_int($year)){ //用来检测变量是否是整型
                   
                   if($year<1){
                      echo '年份必须是正整数';
                   }else{
                        if($year %4 ==0 && $year %100!=0||$year %400==0){
                            echo "{$year}是闰年";
                        }else{

                            echo "{$year}是平年";
                        }



                   }
                   
                   
                }else{
                    echo "不是整数";
                }
            }else{
                echo '您输入的不是数字';
            }
        


       }  
   }

   1.$_POST 是一个变量 用来保存post提交的数据
   2.action=""表示将数据提到本页面
   3.is_numeric()判断是否是数字或字符串数字
   4.is_int()判断是否是整型
   <form method="post" action="">
    请输入年份: <input type="text" name="year"> <br/>
    <input type="submit" name="button" value="判断闰年">
    </form>
   */
  //
   /*判断成绩 

   if(isset($_POST['button'])){ //判断点击了提交按钮

    $ch =$_POST['ch'];

    $math =$_POST['math'];

    if($ch==''||!is_numeric($ch)||$ch<0||$ch>100){
        echo '语文成绩必须在0-100之间';
    }elseif($math==''||!is_numeric($math)||!($math>=0&& $math<=100)){
        echo '数学成绩必须在0-100之间';
    }else{

          $avg=($ch+$math)/2;
          echo "您的平均分是:{$avg}<br>";
    }


   }

    <form method="post" action="">
    语文: <input type="text" name="ch"> <br/>
    数学: <input type="text" name="math"> <br/>
    <input type="submit" name="button" value="判断成绩">
    </form>

   */


   /*更改颜色 

   if(isset($_POST['button'])){

    //$color =$_POST['color'];
    switch($_POST['color']){
        case '1':
            $color='#FF0000';
            break;
        case '2':
            $color='#009900';
            break;   
        case '3':
            $color='#0000FF';
            break;  

    }


    echo <<<str
    
    <script type="text/javascript">
    window.onload=function(){
        document.getElementById("shi").style.color='$color';
    }
    </script>
str;



   }


<div id="shi" class="">
    锄禾日当午, <br/>
    汗滴禾下土, <br/>
    谁知盘中餐, <br/>
    粒粒皆辛苦. <br/>

</div>
<form method="post" action="">
    <select name="color">
        <option value="0">请选择颜色</option>
        <option value="1">红色</option>
        <option value="2">绿色</option>
        <option value="3">蓝色</option>
    </select>
    <input type="submit" name="button" value="更改颜色">
</form> 

  /*for循环
  $sum=0;
for($i=1;$i<=100;$i++){
    $sum+=$i;
}
  echo $sum; */

  /*while循环 
    $i=1;
  $sum=0;
  while($i<=100){
      $sum+=$i;
      $i++;
  }
  echo $sum;*/

  /*do while 循环 
  
    $i=1;
  $sum=0;
  do{
      $sum+=$i;
  }while($i<=100);
  echo $sum,'<br>';
  */
/*多语言表达式 

for($i=1,$j=9;$i<$j;$i++,$j--){
    echo "10可以分成{$i}和{$j}<br>";
}
初始值、增量可以写多个表达式，但是条件只写一个*/

/*阶梯数字 for($i=1;$i<=9;$i++){
    
    for($j=1; $j<=$i;$j++){
        echo  $j,'&nbsp;';
    }
    echo "<br>";
}*/

/*打印九九乘法表 for($i=1;$i<=9;$i++){
    
    for($j=1; $j<=$i;$j++){
       //echo "{$j}*{$i}=",$j*$i,'&nbsp;';
       echo "{$j}*{$i}=".($j*$i);
    }
    echo "<br>";
}
*/
/*表格版本

<style type="text/css">
 table{
     width:980px;
 }

table,td{
    border: solid 1px  #0000FF;
    border-collapse:collapse;

}

td{
    height:40px;
}
</style>
<table>
<?php
for($i=1;$i<=9;$i++){
    echo '<tr>';
    for($j=1; $j<=$i;$j++){
       //echo "{$j}*{$i}=",$j*$i,'&nbsp;';
       echo "<td>{$j}*{$i}=".($j*$i).'</td>';
    }
    echo "</tr>";
}

?>
</table>

*/
/*for each 循环
foreach(数组 as 值){

}
语法二
foreach(数组 as 键=>值){
    
} 
$stu=['tom','berry','ketty'];
foreach($stu as $v){
    echo $v,'<br>';
}


$stu=['tom','berry','ketty'];
foreach($stu as $k=>$v){
    echo "{$k}:{$v}";
}
*/

/*中断多层循环 
for($i =1;$i<=10;$i++){
    for($j=1;$j<=$i;$j++){

        echo $j.'&nbsp;';
        if($i ==5){
           break 2; //中断两层循环
        }
    }

    echo '<br>';
}
*/
/*替代语法 
除了do-while外 都有
规则 左大括号变冒号,右边大括号便endXXX

if的替代用法
if(){

}elseif(){

}else{

}

if():

elseif():

else:

endif:

//switch 替代语法

switch(){
    
}
switch():

endswitch: 

//for

for():
endfor:

//while
    while():
endwhile: 

 foreach():

endforeach:    


for($i=1;$i<=10;$i++){

    echo '锄禾日当午<br>';
}


<?php
for($i=1;$i<=10;$i++){

?>
锄禾日当午<br>

<?php
}
?>



//混编的时候


<?php
for($i=1;$i<=10;$i++):
    if($i%2==0):

?>
<?php echo $i ?>锄禾日当午<br>

<?php
   endif;
endfor;   
?>




$score=80;

if($score>=90):
    echo 'A';
elseif($score>=80):
    echo 'B';
else:
    echo 'C';
endif;

//函数可以实现模块化编程
//定义函数
function show(){

    echo "锄禾日当午<br>";
}

//调用
show(); //函数名不区分大小写


function show($args){
    echo $args,'<br>';
}
$str ='show'; //将函数保存到变量中
$str('锄禾日当午');




function openimg($type){

     switch($type){
        case '.jpg':
            return 'imagecreatefromjpeg';
        case '.png':
            return 'imagecreatefrompng';    
        case '.gif':
            return 'imagecreatefromgif';    
        }

}

$str=opening('.jpg');
$str('')


function showChinese(){

    echo '锄禾日当午<br>';
}

function showEnglish(){
    echo 'chu he ri dang wu<br>';
}

$fun =rand(1,10)%2?'showChinese':'showEnglish';
$fun();




//匿名函数

$fun=function(){

    echo '锄禾日当午<br>';
};
$fun();

//形式参数是定义函数时候的函数  只起形式的作用 没有实际值
//实际参数的调用函数时候的参数
//默认情况下,函数的传递是值传递
function fun($name,$add="地址不详"){

    echo '姓名: '.$name,'<br>';
    echo '地址: '.$add,'<br>';
}

fun('tom','北京');


define('ADD',"地址不详");
function fun($name,$add=ADD){  //默认值可以使用常量

    echo '姓名: '.$name,'<br>';
    echo '地址: '.$add,'<br>';
}

fun('tom');

//获取参数的个数


function fun(){
    echo func_num_args,'<br>';
    $arg=func_get_args(); //获取参数数组
    print_r($arg);
}

fun(10,20,30)
//参数个数约束
function fun(...$args){

    print_r($args);
    echo '<br>';
}

fun(10,20,30)


function fun(...$args){

    print_r($args);
    echo '<br>';
}
$num=[10];
$num[]=[10,20];

echo '<pre>';
fun(...$num);//将数组中的参数展开

//类型约束
function fun(string $name, int $age){

    echo "姓名 : {$name},<br>";

    echo "姓名 : {$age},<br>";
}

fun('tom',22)


function fun(int $num1, int $num2):int{  //:int 必须返回整型

   return $num1+$num2;
}

echo fun(11,22)
function fun():void{
    return;
}

function fun():array{
    
}

fun();


//return 中止脚本执行  返回页面结果 //只能中断脚本  要完全终止脚本执行 使用exit() 或die()

//require './test.php' //引入php文件
//作业 求数组里的数的和
$num=[1,20,53,23,14,12,15];
$sum =0;

for($i=0;$i<=count($num);$i++){
    $sum+=$num[$i];
}


echo "和是: ".$sum,'<br>';

echo "平均值: ".$sum/count($num),'<br>';

echo "平均值: ".number_format($sum/count($num),1); //精确到小数点后面一位
echo '<hr>'; 
//数组翻转


$stu=['tom','berry','ketty','rose','jake'];


for($i=0,$j=count($stu)-1;$i<$j;$i++,$j--){
    //echo $stu[$j];

    [$stu[$i],$stu[$j]]=[$stu[$j],$stu[$i]]; //元素交换
}

$stu=['tom','berry','ketty','rose','jake'];
$num=[];
for($i=0;$i<=count($stu);$i++){
    //$num[$i]=$stu[$i];
    //$num[]=$stu[$i];  数组添加值
  

}

print_r($num);

echo '<hr>'

//遍历二维数组
$stu =[[1,2,3,4],[10,20,30,40]];

for($i =0; $i <count($stu);$i++){  //循环第一行
   for($j=0;$j<count($stu[$i]);$j++){  //循环第一列

      echo $stu[$i][$j],'&nbsp;';
   }
   echo '<br>';

}

//echo count($stu[0]);


//  循环输出1-100  其中3的倍数输出A 5 的倍数输出B 15输出C

for($i=1;$i<=100; $i++){

    if($i%15==0){   //先写%15,因为可以%15的数 一定可以%3
        echo 'C';
    }elseif($i%5==0){
        echo 'B';
    }elseif($i%3==0){
        echo 'A';
    }else{
        echo $i;
    }
    echo '&nbsp;';
}

for($i=0;$i<=999;$i++){

    $a=(int)($i/100); //百位数
    
    $b=int(($i%100)/10);   //十位数

    $c=$i%10;              //个位数
    
    //if($i==$a*$a*$a){

    //}
    echo $i,'<br>';
   // if($i ==pow($a,3)+pow($b,3)+pow($c,3)){
  //      echo $i,'<br>';
   // }

}

//pow($a,3)  表示$a的三次方

//打印水仙花数
for($i=0;$i<=999;$i++){

    $a=(int)($i/100);
    $b=(int)(($i%100)/10);
    $c=($i%10);
    if($i ==pow($a,3)+pow($b,3)+pow($c,3)){
        echo $i,'<br>';
    }
}


//打印100以内的斐波那契数列

$num1=1;
$num2=1;
echo $num1,'&nbsp;',$num2;
while (true){

    $num3=$num1+$num2;
    
    if($num3>100){
        break;
    }
    echo $num3,'&nbsp;';
    $num1=$num2;
    $num2=$num3;
    
}

//将值赋给超全局变量  可以在函数内部和外部访问

$_POST['num']=10;

function fun(){

    echo $_POST['num'];
}
fun();



//全局变量
$num =10;

function fun(){
    // global $num  //将全局变量的$num的地址引入到函数内部
    echo $GLOBALS['num']; //输出全局的$num
}
fun();
//静态变量 一般指的是静态局部变量

function fun(){
    static $num =10;  //普通便每调用一次初始化一次  静态变量只会初始化一次
    //$num=10;
    $num++;
    echo $num,'<br>';
}

fun();
fun();

//常量和静态变量的区别
1.都是初始化一次
2.常量不能改变值 静态变量可以
3.常量没有作用域 静态变量有




//匿名函数use
$num=10;
$fun=function() use($num){ //将$num的地址引入到匿名函数中
    echo $num;
};
$fun();

//如何在函数内部访问函数外部变量
1.使用超全局变量
2.$GLOBALS
3.global
4.use将函数外部变量引入到匿名函数内部

$num=10;
function test(){
    $num=20;
    $fun=function() use($num){ //作用域链
        echo $num;
    };
    $fun();

}

test();


//递归 函数内部自己调用自己


function printer($num){

    echo $num,'<br>';
    if($num ==1){
        
        return;
    }
    printer($num-1);
}

printer(20);


//例题从1加到100
$sum=0;
function add($num){

    //echo $num,'<br>';
    global $sum;
    $sum+=$num;
    if($num ==1){
        
        return;
    }
    
    add($num-1);
}

add(100);
echo $sum;

//
function add($num){
    
    if($num ==1){
        
        return 1;
    }
    
    return $num +add ($num-1);
}

$a =add(100);
echo $a;



//打印第几个斐波那契数列

function fbnq($n){

    if($n==1 || $n==2)
       return 1;

    return fbnq($n-1)+fbnq($n-2);



}
echo fbnq(5);

for($i =1;$i<=10;$i++){
    echo fbnq($i),'&nbsp;';
}


//正斜杠 / web中目录分隔用正斜
//反斜杆 \物理地址用反斜杆分隔


//错误有三种级别 notice warning error


$debug=true;  //开发模式
ini_set('error_reporting',E_ALL);  //所有的错误有报告
if($debug){
    ini_set('display_errors','on');  //错误显示是浏览器上

    ini_set('log_errors','off'); //错误不显示在日志中
 
}else{


    ini_set('display_errors','off');  

    ini_set('log_errors','on'); 

    ini_set('error_log','./err.log');

}

echo $num;


//自定义错误
$age=100;
if($age>80){

    //trigger_error('年龄不能超过80岁');

   // trigger_error('年龄不能超过80岁',E_USER_NOTICE);
}



function error(){

    echo '这是自定义错误处理';
}

set_error_handler('error'); //注册错误处理函数,只要有错误就会自动调用错误处理函数

echo $num;



//文件夹操作
//mkdir('./aa'); //创建aa文件夹
///mkdir("./aa/bb");  //在aa目录下创建bb(aa目录必须存在)

///mkdir("./aa/bb/cc/dd",0777,true); //递归创建

//2.删除文件夹

///rmdir('./aa/bb/cc/dd')  //删除dd文件夹  文件夹必须为空

//3.重命名文件夹
//rename('./aa','./aaa');

//4.判断是不是文件夹
//echo is_dir('./aaa')?'是文件夹':'不是文件夹';

//打开文件夹 读取文件夹 关闭文件夹

$folder=opendir('./'); //打开目录

//echo readdir($folder),'<br>';

//var_dump($folder);
while($f=readdir($folder)){
    //echo $f,'<br>';
    if($f=='.' || $f=="..")
       continue;
    echo iconv('gbk','utf-8',$f),'<br>';
}

closedir($folder)  //关闭文件夹
//小结 1.opendir()  返回资源型
//2.每个文件夹中都有.和..
//3.iconv用来左字符编码的转换



//文件操作 1.将字符串写入文件

//$str="床前明月光,\r\n疑是地上霜.\r\n举头望明月,\r\n低头思故乡.";

//file_put_contents("./test.txt",$str);

//2.从文件中读取

//$f=file_get_contents("./test.txt");//将整个文件读入一个字符串
//echo $f;

//readfile('./test.txt')  //读取输出文件内容


//3.打开文件并操作 fopen(地址,模式)  模式 r: 读  w:写 a:追加

// $fp=fopen('./test.txt','w');  //打开文件返回文件指针(文件地址)

// //var_dump($fp) //资源型
// for($i=1;$i<=10;$i++){
//     fputs($fp,'关关雎鸠'."\r\n"); //写10句
// }
// fclose($fp);  //关闭文件

//打开文件读取

// $fp=fopen('./test.txt','r');

// while($line=fgets($fp)){  //读取一行
//     echo $line,'<br>';
// }

// $fp=fopen('./test.txt','a');  //打开文件追加
// fputs($fp,"在河之洲");


//4.是否是文件
//echo is_file('./test.txt')?'是文件':'不是文件';

//5.判断文件或文件夹是否存在
//echo file_exists('./test.txt')?'文件存在':'文件不存在';

//6.删除文件
// $path="./test.txt";

// if(file_exists($path)){


//     if(is_dir($path)){
//         rmdir($path);
//     }elseif(is_file($path)){
//         unlink($path);
//     }
// }else{
//     echo "文件夹或文件不存在";
// }

//文件的存储有两种  字符流 二进制流

//二进制读取
// $fp=fopen('./face.png','r');
// // header('content-type:image/png');  //告知浏览器下面的代码同png图片方式解析
// // echo fread($fp,filesize("./face.png"));
// header('content-type:image/png');

// //file_get_content也可以进行二进制读取

// echo file_get_contents('./face.png');

//文本流 明确的结束符  二进制流没有明确的结束符 通过文件大小判断文件是否读取完毕


//$get 和 $post 表单提交数据的两种方式




//get可以看到参数 post看不到参数
//get不安全


//提交原理
//get 参数是参数一个一个的提交
//post提交是所有参数作为一个整体一起提交

//提交数据大小
//get一般不超过255个字符    post提交的大小取决于服务器 在php.ini中可以配置post提交的大小
//post_max_size=8M
//get很灵活 只要有页面的跳转就可以传递参数 post不灵活,post提交需要有表单的参与

//php跳转
//header("location:index.php?name=tom&age=20")


if(!empty($_POST)){  //数组类型 保存的是POST提交的值

    echo '语文: '.$_POST['ch'],'<br>';

    echo '数学: '.$_POST['math'],'<br>';
}
echo '<hr>';

if(!empty($_GET)){ //数组类型 保存的是GET提交的值
    echo '语文: '.$_GET['ch'],'<br>';

    echo '数学: '.$_GET['math'],'<br>';

}

$_REQUEST 既可以获取GET又可以获取POST的值
echo $_REQUEST ['ch'],'<br>';

request_order ="GP" # 先获取get  再获取post值


//短信接口get
//cd1f68b9c8503206985cc6fd1b6b083f

$f=file_get_contents("http://apis.juhe.cn/ip/ipNew?ip=112.112.11.11&key=cd1f68b9c8503206985cc6fd1b6b083f");

//echo $f;
echo "<pre>";
var_dump($f);

$a=json_decode($f,true);  //成功转换json数据为数组 
print_r($a["result"]); //取得下一个数组
var_dump($a,true);

//python get数据
res=requests.get(url="http://apis.juhe.cn/ip/ipNew?ip=112.112.11.11&key=cd1f68b9c8503206985cc6fd1b6b083f")
print(res.text)
//go语言
package main

import (
	"bytes"
	"fmt"
	"io"
	"net/http"
	"time"
)
func Get(url string) string {

// 超时时间：5秒
client := &http.Client{Timeout: 5 * time.Second}
resp, err := client.Get(url)
if err != nil {
panic(err)
}
defer resp.Body.Close()
var buffer [512]byte
result := bytes.NewBuffer(nil)
for {
n, err := resp.Body.Read(buffer[0:])
result.Write(buffer[0:n])
if err != nil && err == io.EOF {
break
} else if err != nil {
panic(err)
}
}
fmt.Println(result)
return result.String()
}

func main(){
	//fmt.Println("222")
	res :=Get("http://apis.juhe.cn/ip/ipNew?ip=112.112.11.11&key=cd1f68b9c8503206985cc6fd1b6b083f");


	fmt.Println(res);
}


//java


//参数传递
//复选框值的传递

// if(isset($_POST)){
//   print_r( $_POST['hobby']);
// }
//表单提交到本页面需要判断一下是否有post提交
//数组的提交表单元素的名字必须带有[]


// if(isset($_POST)){
//   echo '姓名: '.$_POST['username'],'<br>';
//   echo '密码: '.$_POST['pwd'],'<br>';
//   echo '性别: '.$_POST['sex'],'<br>';
//   echo '爱好: ',isset($_POST['hobby']) ?implode(',',$_POST['hobby']):'没有爱好','<br>';

//  // echo '爱好: '.implode($_POST['hobby']);

//   echo '籍贯: '.$_POST['jiguan'],'<br>';
//   echo '留言: '.$_POST['words'],'<br>';
//   print_r( $_POST['hobby']);
// }

//开发中需要上传图片 音乐 视频等等  这种上传传递是二进制数据

//客户端上传文件 文件域

//表单的enctype属性  默认情况下 表单传递是字符流 不能传递二进制流 通过设置表单的enctype属性传递复合数据

//enctype属性的值有:
//1.application/x-www-form-urlencoded 默认 表示传递的是带格式的文本数据

//2.multipart/form-data 复合的表单数据(字符串 文件)文件上传必须设置此值
//3.text/plain 用于向服务器传递无格式的文本数据 主要用户电子邮件



//服务器接受文件
//超全局变量$_Files是一个二维数组 用来保存客户端上传到服务器的文件信息,二维数组的行是文件域的名称,列有5个
//1. $_Files[]['name']  上传的文件名
//2. $_Files[]['type']  上传的类型 这个类型是MIME类型
//3. $_Files[]['size']  文件的大小 以字节为单位
//4. $_Files[]['tmp_name'] 文件上传时的临时文件
//5. $_Files[]['error']  错误编码 0、1、2、3、4、6、7、 0表示正确
//post_max_size=8M 表单允许的最大值
//upload_max_filesize =2M 允许上传的文件大小
//upload_tmp_dir =F:\wamp\tmp 指定临时文件地址
//file_uploads =ON 是否允许文件上传
//max_file_uploads=20; 允许同时上传20个文件

// if(!empty($_POST)){
//    // echo '<pre>';
//     //print_r($_FILES);
//     if($_FILES['face']['error']==0){
//         move_uploaded_file($_FILES['face']["tmp_name"],'./'.$_FILES['face']['name']);
//     }else{
//         echo '上传有误';
//         echo '错误码'.$_FILES['face']['error'];
//     }
//     //move_uploaded_file($_FILES['face']["tmp_name"],'./'.$_FILES['face']['name']);
// }


//move_uploaded_file(临时地址,目标地址)

//优化文件上传文件名



//方法一 通过时间戳做文件名

//$path ="laba.png";
//echo strchr($path,'.');

//echo strrchr($path,'.');  //从最后一个点开始截取

//echo time().strrchr($path,'.');

//echo time().rand(100,999).strrchr($path,'.');
//echo time();
//方法二 通过uniqid()实现

//echo uniqid().strrchr($path,'.');
//echo uniqid('goods_').strrchr($path,'.');
//echo uniqid('goods_',true).strrchr($path,'.');
//验证格式

//1.判断文件的扩展名  这种方式不能防止文件伪装
// if(!empty($_POST)){
//     $allow=array('.jpg','.png','.gif');
//     $ext =strrchr($_FILES['face']['name'],'.');
//     echo $ext,'<br/>';

//     if(in_array($ext,$allow)){
//         echo "允许上传";
//     }else{
//         echo "文件不允许上传";
//     }
// }

//2.判断mime类型  不能识别文件伪装

// if(!empty($_POST)){
//     $allow=array('image/jpeg','image/png','image/gif');
//     $ext =$_FILES['face']['type'];
//     echo $ext,'<br/>';
//     //print_r($_FILES['face']);

//     if(in_array($ext,$allow)){
//         echo "允许上传";
//     }else{
//         echo "文件不允许上传";
//     }
// }

//3.php_fileinfo扩展  在php.ini 开始扩展
// if(!empty($_POST)){

//     //1.创建fileinfo资源
//     $info= finfo_open(FILEINFO_MIME_TYPE);
//     //var_dump($info);

//     //echo finfo_file($info,$_FILES['face']['tmp_name']);
//     //2.与上传文件做对比
    
//     $allow=array('image/jpeg','image/png','image/gif');
//     $ext =finfo_file($info,$_FILES['face']['tmp_name']);
//     // echo $ext,'<br/>';
//     // //print_r($_FILES['face']);

//     if(in_array($ext,$allow)){
//          echo "允许上传";
//      }else{
//          echo "文件不允许上传";
//      }
// }

//优化上传例题
//1.验证是否有误
//2.验证格式
//3.验证大小
//4.验证是否符合http上传
//5.上传实现

//验证错误
// function check($file){
//     $error=$file['error'];
//     if($error !=0){
//          switch($error){
//              case 1:
                 
//                  return ini_get('upload_max_filesize');
//              case 2:
                 
//                  return '错误';
//              case 3:
//                 return '错误';


//              case 4:
//                 return '错误';
//              case 5:
//                 return '错误';   
                           
//              case 6:
//                 return '错误';
//             case 7:
//                 return '错误';
                                
//             default:
//                    return "未知错误";               
//                 }

       
 
 
//     }
//     //2.验证格式
//     $info= finfo_open(FILEINFO_MIME_TYPE);
//     $allow=array('image/jpeg','image/png','image/gif');
//     $ext =finfo_file($info,$_FILES['face']['tmp_name']);
  
//     if(!in_array($ext,$allow)){
//             return "只能上传".implode(',',$allow).'格式';
//     }
//     //验证大小
//     $size=123400000000000;
//     if($file['size']>$size){

//         return '文件大小不能超过'.number_format($size/1024,1).'k';
//     }
    

//     //验证是否是http上传
//     if(!is_uploaded_file($_FILES['face']['tmp_name'])){
//       return '文件不是http post 上传的';
//     }
//    return null;
// }

// echo date('Y-m-d H:i:s',1231346),'<br>';  //将时间戳转成年-月-日 小时:分钟

// echo date('Y-m-d H:i:s'),'<br>'; //将当前的时间转成 年-月-日 小时:分钟 秒
// //date.tiemzone =PRC 设置时区
// if(!empty($_POST)){                 
   
//   if($error=check($_FILES['face'])){
//       echo $error;
//   }else{
//     $foldername=date('Y-m-d');  //文件夹名称

//     $path="./uploads/{$foldername}";

//     if(!is_dir($path)){
//         mkdir($path);
//     }
//     $filename=uniqid('',true).strrchr($_FILES['face']['name'],'.');
//     echo $filename;

//     $filepath="$path/$filename";
    
//     //文件上传
//     if(move_uploaded_file($_FILES['face']['tmp_name'],$filepath)){

//         echo "上传成功,路径是:{$foldername}/{$filename}";
//     }else{
//         echo "上传失败";
//     }
//   }



// }


//数据库操作
//0.启动数据库 net start mysql 关闭数据库 net stop mysql 登录数据库 mysql -u root -p password 
//1.显示所有数据库  show database;
//2.创建数据库  create database stu;  create database [if not exists] 数据名 [选项]
//create database if not exists stu; 
//编码  show variables like 'character_set_%';
//如果不指定编码,数据库默认使用安装数据库时执行的代码 create database emp charset=gbk;
//数据库的目录 my.ini  datadir ="F:/wamp/PHPTutorial/MySQL/data/"
//删除数据库 drop database if exists stu;

//show create database stu;  //创建数据库显示编码
//alter database stu charset=字编码  修改数据库的字符编码alter database stu charset=utf8

//选择数据库 use stu;

//显示所有表 show tables;
//创建表  create table if not exists new;
//一个数据库对应一个文件夹  一个表对应一个或多个文件   引擎时myisam 一个表对应三个文件 引擎是innodb 一个表对应一个表结构文件 innodb 所有表的数据都保存在ibdata1文件中
//如果数据量很大 会自动创建ibdata2

//两者区别 
//myisam 1.查询速度快 2.容易产生碎片  3.不能约束数据
//innodb 1.以前没有myisam 查询速度快 现在已经提速了 2.不产生碎片 3.可以约束数据
null || not null 是否为空
default:默认值
auto_increment 自动增长默认从1开始 每次递增1
primary key 主键  主键的值不能重复 不能为空
comment 备注
engine 引擎 myisam innodb 如果表名和字段名如果用了关键字 要用反引号引起来

create table stu1(id int auto_increment primary key, name varchar(20) not null) engine=innodb charset=gbk;

set name gbk; //设置客户端和服务端通讯的编码

create table stu2(
id int auto_increment primary key comment '主键',
name varchar(20) not null comment '姓名',
'add' varchar(50) not null default '地址不详' comment '地址',
score int comment '成绩，可以为空') engine=myisam;

//.frm 存储的是表结构
//.myd 存储的是表数据
//.myi 存储的是表数据的索引

//显示创建的表 show create table stu2; show create table stu2\G;

//查看表结构
describe 表名

desc stu2;

//删除表
drop table if exists stu2;

//复制表  create table 新表 select 字段 from 旧表
//不能复制父表的键 能够复制父表的数据

//create table 新表 like 旧表
特点 只能复制表结构 不能复制表数据

create table stu5 like stu2; 这样创建有主键 但是无法复制表数据

// $arr_3 = ['one' => 'zhangsan', 'two' => 'lisi', 'three' => 'wangwu'];
// $arr_4 = ['one' => 'zhasan', 'two' => 'lisi', 'three' => 'wangwu'];
// $arr7[]=$arr_3;
// $arr7[]=$arr_4;

// header('Access-Control-Allow-Origin:*');
// $refund_fee = array('one' => 'zhasan', 'two' => 'lisi', 'three' => 'wangwu');
// $json = '{"data":'.$refund_fee.'}';

// var_dump(json_encode($json,true)) ;
// return json_encode($json,true);


//修改表 alter table 表名

//create table stu6( id int, name varchar(20));

//添加字段
//alter table 表名 add[column] 字段名 数据类型[位置]

//alter table stu6 add `add` varchar(20); //默认添加字段放在最后

//alter table stu6 add sex char(1) after name; //在name之后添加

//alter table stu6 add age int first;


//删除字段

//alter table 表 drop [column] 字段名;
//修改字段名
//                        原字段名 新字段名 数据类型
//alter table stu6 change name stuname varchar(10);   
//                                       字段名  字段属性
//修改字段 不改名 alter table stu6 modify id primary key;



//修改引擎 alter table 表名 engine=引擎名

//修改表名  alter table stu6 rename to student;

//将表移动到其他数据库 
//alter table student rename too php74.stu   将当前数据库中的studeng 移动到php74数据库中 改名为stu

//数据操作
//插入数据 insert into 表名 (字段名,字段名...) values(值1，值1)
//insert into stu6(id,name)values(2,"3");
//insert into stud values(4,"berry");
//insert into stud values(default,null); //default关键字用来插入默认值 null用来插入空值
//插入多条数据
//insert into stud values(4,"berry"),(5,"berry");



//查询数据
//select 列名 from 表名
//slect * from 表名

//更新数据 update 表名 set字段=值【where条件】
//update stu set sex="女" where stuname='berry';
//update stu set sex="女" `add`-'上海' where id=1;

//删除数据

//delete from 表名 [where 条件] [orerby 排序][limit限制]
//delete from 表  遍历表记录 一条一条的删除
//truncate table 将原表销毁 再创建一个同结构的新表 就清空表而言,这种方法效率高

//delete from stu6 where id=1;

//删除所有数据 delete from stu;

//字符集  在插入数据的时候  如果中文会报错(或者中文无法插入)
//insert into stu values(1,'李白');

//原因 客户端        =>                  mysql服务器(服务器连接层)       数据库
//                  <=

//查看客户端发送的编码 gbk


//查看服务器接受 返回的编码  show variables like 'character_set-%'; utf-8

//更改接受客户端指令的编码

//set character_set_client =gbk;  返回的是乱码 原因 返回编码是utf8 客户端时gbk

//set character_set_results=gbk;

//环境变量的配置

//我的电脑右键-高级-环境变量

//校对集

//概念:在某种字符集下 字符之间的比较关系  比如a和B的大小关系 如果区分大小写a>b 如果不区分大小写则a<B 比如赵钱孙李大小关系
//不同标准关系不一样
//校队及依赖与字符集 不同的字符集的比较规则不一样  如果字符集更改 校队集也重新定义
//可以在定义字符集的同时定义校对集
//语法 collate =校队集

//校队集规则 ：
//_bin：按二进制编码比较,区别大小写
//_ci:不区分大小写
//create table stu1(name char(1) )charset=utf collate=utf_8_general_ci;

//create table stu1(name char(1) )charset=utf collate=utf_8_bin;

//insert into stu1 values('a').('B');
//php study 中mysql不是严格模式 将mysql设置成严格模式

//打开my.ini 在sql-mode的值中,添加STRICT_TRANS_TABLES
//sql-mode="...,STRICT_TRANS_TABLES"


//数据类型 数值型 mysql中数据类型是强类型
*/
//tinyint  占用1字节     范围 -128~127
//smallint  占用2字节
//mediumint   3
//int        4
//bigint     8

//整形支持显示宽度  显示宽度是最小的显示位数  如 int(11)表示整形最少用11位表示 如果不够位数用0填充 显示宽度默认不起作用 必须结合zerofill才起作用
//create table stu4(id int(5),num int(5) zerofill);  #添加前导0 int(5)显示宽度是5位 insert into stu4 values(12,12);
//显示宽带不决定整形的显示大小,只是在数值不够指定的位数是用0来做前导
//无符号整形(unsigned) 无符号整形就是没有负数 无符号整数是整数的两倍
//create table stu2( id tinyint unsigned) insert into stu2 values(128);

//浮点型
//float 单精度型  4(占用字节数)  范围

//double(双精度型)  8
//浮点型的声明:float(M,D) double(M,D)  //总位数  D:小数位

//create table stu5(num1 float(5,2), num2 double(6,1));  insert into stu5 values(3.1415,12.96);
//MYSQL浮点数支持科学计数法

//create table stu6(num float); #不指定位数 默认是小数点后面6位 double默认17位  insert into stu6 values(5E2),(GE-2);
//浮点数精度会丢失
//insert into stu6 values(99.999999999999) 结果 100
//3.小数(定点数)
//Decimal是变长的,大致是每9个数字用4个字节存储 整数和小数分开计算  M最大时65 D最大是30 默认是(10,2)
//定点和浮点都支持无符号 显示宽度0填充
//原理 将整数部分和小数部分分开存储



//create table stu8(num decimal(20,9)); #总位数20  小数位9位  insert into stu8 values(12.99999999999999)
//1.2.2字符型 char(4) 存放4个字符 中英文一样
//char  定长字符 数据库只有单引号 没有双引号
//varchar 可变长度字符

//tinytext     2*8-1=255

//text     2*16-1=65535

//mediumtext   2*24-1

//longtext     2*332-1

//char(4) 存放4个字符 中英文一样

//varchar(L)实现变长机制 需要额外的空间来记录数据真实的长度。

//L的理论长度是65535 但事实上达不到  因为有的字符是多字节字符  所以L达不到65535。

//utf-8 1字符=3个字节

//gbl 1字符=2个字节  
//create table stu9(name char(1000));

//create table stu10(name varchar(65535) charset=utf8); --max(21845)

//create table stu10(name varchar(65535) charset=gbk); --max(32767)
//text系列在表中存储的是地址

//枚举类型(enum)
//从集合中选择一个值作为数据(单选)
?>



<!--<form method="post" action=""><form>

<form method="get" action=""><form>-->

<!--<form method="post" action="./demo2.php">
  语文: <input type="text" name="ch"><br/>
  数学: <input type="text" name="math"><br/>
  <input type="submit" name="button" value="提交"/>
</form>-->

<!-- html跳转<a href="index.php?name=tom&age=20">跳转</a>-->
<!--超连接提交
<a href="demo2.php?ch=888&math=20">跳转</a>


//js提交
<input type="button" value="点击" onclick="location.href='demo2.php?ch=77&math=67'">

-->


<!--<form method="post" action="">
  姓名: <input type="text" name="username"><br/>
  密码: <input type="password" name="pwd"><br/>
  性别: <input type="radio" name="sex" value='1' checked>男
        <input type="radio" name="sex" value='0'>女<br/>

  爱好: <input type="checkbox" name="hobby[]" value="爬山">爬山
  <input type="checkbox" name="hobby[]" value="抽烟">抽烟
  <input type="checkbox" name="hobby[]" value="喝酒">喝酒
  <input type="checkbox" name="hobby[]" value="烫头">烫头 <br/>

  籍贯:
  <select name="jiguan">
    <option value ="021" checked>上海</option>
    <option value ="010">北京</option>
  </select> <br/>
  留言： <textarea name="words" rows="5" cols="30"></textarea> <br/>
  <input type="submit" name="button" value="提交"/>
</form>-->
<!--文件上传  表单允许的最大值是2个字节-->
<!--<form method="post" action="" enctype="multipart/form-data">
<input type="hidden" name="MAX_FILE-SIZE" value="2"> 
<input type="file" name="face">
<input type="submit" name="button" value="上传"/>

</form>-->
</body>
<script type="text/javascript">
//js提交
//   location.href=('index.php?name=tom&age=20');
//   location.assign('index.php?name=tom&age=20');
//   location.replace('index.php?name=tom&age=20');
</script>

</html>
