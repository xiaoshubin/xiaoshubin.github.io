<html>
<head><title>SmallCake's libary wiki</title></head>
<body></body>
<ul>
<li><a href="SmallUtils/index.html" target="_blank">SmallUtils</a></li>
</ul>

<?php
$url = "./";
$lj = opendir($url);
while(($filename = readdir($lj)) != false){
echo $filname;
if(is_dir($url.$filename)){
echo "是目录"."";
}
echo "";
}
closedir($lj);
?>
</html>