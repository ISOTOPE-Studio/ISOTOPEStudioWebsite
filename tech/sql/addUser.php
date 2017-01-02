<?php

$username = $_REQUEST['username'];
$pw = $_REQUEST['pw'];
$mail = $_REQUEST['mail'];
echo "$username, $pw, $mail;";
$link = mysql_connect('localhost','isotopes_admin','ftpF0305M0424L0202') or die("connect failed" . mysql_error());  ;//你的数据库用户名和密码
//mysql_query('set names utf8'); 设置字符集
mysql_select_db('isotopes_act');//选择你的数据库
$sql="INSERT INTO users VALUES('$username', '$pw', '$mail');";
mysql_query($sql);//发送sql语句
mysql_close();//关闭连接


?>