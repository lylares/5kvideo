<?php 
$fenyema="#<div monitor-desc='分页' id='js-ew-page' data-block='js-ew-page'  class='ew-page'>[\s\S]+?</div>#";

if($tvlistget !== null)
{
	//$rurl = curl('http://www.5kvideo.cc/tv.html?m=/dianshi/list.php?cat=all&pageno='. $pageno .'&act='.$tvlistget);
}

preg_match_all($fenyema, $rurl,$yeshua); 
$yeshu=implode($glue, $yeshua[0]);
$yeshu = str_replace('http://www.360kan.com', '?m=', "$yeshu");
$yeshu = str_replace('<a href=', '<li><a href=', "$yeshu");
$yeshu = str_replace('<a target=', '<li class="active"><a target=', "$yeshu");
$yeshu = str_replace('</a>', '</a></li>', "$yeshu");
$yeshu = str_replace("class='btn'", '', "$yeshu");
$yeshu = str_replace("pageno", 'page', "$yeshu");
$yeshu = str_replace("<span>...</span>", '', "$yeshu");
$yeshu = str_replace("下一页&gt;", '&gt', "$yeshu");
$yeshu = str_replace("&lt;上一页", '&lt;', "$yeshu");
echo $yeshu;
?>
