<?php
// by MoreWindows( http://blog.csdn.net/MoreWindows )  
//定义常量  
define(DB_HOST, 'localhost');  
define(DB_USER, 'isotopes_admin');  
define(DB_PASS, 'ftpF0305M0424L0202');  
define(DB_DATABASENAME, 'isotopes_act');  
define(DB_TABLENAME, 'users');  
//数据库表的列名  
$dbcolarray = array('username', 'pw', 'mail');  
  
//mysql_connect  
$conn = mysql_connect(DB_HOST, DB_USER, DB_PASS) or die("connect failed" . mysql_error());  
mysql_select_db(DB_DATABASENAME, $conn);  
  
//读取表中纪录条数  
$sql = sprintf("select count(*) from %s", DB_TABLENAME);  
$result = mysql_query($sql, $conn);  
if ($result)  
{  
    $count = mysql_fetch_row($result);  
}  
else  
{  
    die("query failed");  
}
//echo "表中有$count[0] 条记录; ";  
  
  
$sql = sprintf("select %s from %s", implode(",",$dbcolarray), DB_TABLENAME);  
$result = mysql_query($sql, $conn);  
//表格  
//echo '<table id="Table" border=1 cellpadding=10 cellspacing=2 bordercolor=#ffaaoo>';   
//表头  
//$thstr = "<th>" . implode("</th><th>", $dbcolarray) . "</th>";  
echo $thstr;  
//表中的内容  
while ($row=mysql_fetch_array($result, MYSQL_ASSOC))//与$row=mysql_fetch_assoc($result)等价  
{ 
//    echo "<tr>";  
    $tdstr = "";  
    foreach ($dbcolarray as $td)  
        $tdstr .= "$row[$td] ";  
    echo "$tdstr;";
//    echo "</tr>";  
}  
//echo "</table>";  
mysql_free_result($result);  
mysql_close($conn);  
?>