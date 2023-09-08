<?php   
//常用正则写法


//模式分隔符后的"i"标记这是一个大小写不敏感的搜索
if (preg_match("/php/i", "PHP is the web scripting language of choice.")) {
    echo "查找到匹配的字符串 php。".PHP_EOL;
} else {
    echo "未发现匹配的字符串 php。".PHP_EOL;
}
echo "".PHP_EOL;


//查找字符串是否存在连续两个数字，超过两个也不行
$str = "asdas233dfdf4hgh67kk";
preg_match("/(^|[^0-9])([0-9]{2})($|[^0-9])/", $str,$matchs);
print_r($matchs);
if (count($matchs) > 2) {
	print_r($matchs[2]);
}

echo "".PHP_EOL;
echo "".PHP_EOL;

/* 模式中的 \b 标记一个单词边界，所以只有独立的单词"web"会被匹配，而不会匹配
 * 单词的部分内容比如"webbing" 或 "cobweb" */
 if (preg_match("/\bweb\b/i", "PHP is the website scripting language of choice.")) {
    echo "查找到匹配的字符串。\n";
} else {
    echo "未发现匹配的字符串。\n";
}
echo "".PHP_EOL;


//查找字符串中所有的数字
$str = "asdas233dfdf4hgh67kk";
preg_match_all("/[0-9]+/", $str,$matchs);
print_r($matchs); //把preg_match_all换成preg_match试试？


//查找所有的图片路径
$str = 'Golang is the web scripting <img src="https://pic1.zhimg.com/50/v2-2176c0761d61af3b17610759a505b39b_200x0.jpg?source=b6762063" alt="cover" width="190" height="105" class="css-1phd9a0" />language 
of choice <img src="http://abc.png" alt="cover" > asdasdfd g fdg gdfg ';
preg_match_all("/img([^>]*)\s*src=('|\")([^'\"]+)('|\")/i", $str,$imgs);  //把preg_match_all换成preg_match试试？
print_r($imgs);


//把js代码替换成空字符串
$str = 'Golang is the web scripting <script>function displayDate(){ document.getElementById("demo").innerHTML=Date();}</script>language of choice asdasdfd g fdg gdfg ';
$str = preg_replace("/<script.*<\/script>/i", "", $str);
print_r($str);

echo "".PHP_EOL;

//把js代码(包括换行符)替换成空字符串
$str = 'Golang is the web scripting <script>function displayDate(){ 
	document.getElementById("demo").innerHTML=Date();
	}
</script>language of choice asdasdfd g fdg gdfg ';
$str = preg_replace("/<script[\s\S]*?<\/script>/i", "", $str);
print_r($str);

