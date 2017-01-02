<?php

$username = $_REQUEST['username'];
$year = $_REQUEST['year'];
$month = $_REQUEST['month'];
$day = $_REQUEST['day'];
$mark = $_REQUEST['mark'];
$math = $_REQUEST['math'];
$english = $_REQUEST['english'];
$reading = $_REQUEST['reading'];
$science = $_REQUEST['science'];
$essay = $_REQUEST['essay'];
$composite = $_REQUEST['composite'];

echo "'$username', '$year', '$month', '$day', '$mark', '$math', '$english', '$reading', '$science', '$essay', '$composite';";
$link = mysql_connect('localhost','isotopes_admin','ftpF0305M0424L0202') or die("connect failed" . mysql_error());  ;//你的数据库用户名和密码
//mysql_query('set names utf8'); 设置字符集
mysql_select_db('isotopes_act');//选择你的数据库
$sql="INSERT INTO score VALUES('$username', '$year', '$month', '$day', '$mark', '$math', '$english', '$reading', '$science', '$essay', '$composite');";
mysql_query($sql);//发送sql语句
mysql_close();//关闭连接

?>