<?php
if (!defined('PCFINAL')) {
	exit('Request Error!');
}

define('UC_KEY', 'dfjvnk9THi');

function aspTransfer(){
        $args = func_get_args();
        if(empty($args)){
            return null;
        }
        $arr = array_shift($args);
        if(!is_array($arr)){
            throw new Exception("第一个参数不为数组");
        }
        foreach($args as $key => $field){
            if(is_string($field)){
                $temp = array();
                foreach($arr as $index=> $val){
                    $temp[$index] = $val[$field];
                }
                $args[$key] = $temp;
            }
        }
        $args[] = &$arr;//引用值
        call_user_func_array('array_multisort',$args);
        return array_pop($args);
    }
function callback($code,$msg=null)
{
	if($code==1)
	{
		return json_encode(array('code'=>10001,'msg'=>$msg));
		
	}elseif($code==0)
	{
		return json_encode(array('code'=>10000,'msg'=>$msg));
	}elseif($code==2)
	{
		return json_encode(array('code'=>20000,'msg'=>'unauthorized '.$msg));
	}else
	{
		return false;
	}
}

function addStyle($style)
{
	foreach($style as $key => $value)
	{
    echo'
		<link rel="stylesheet" href="'.$value.'" type="text/css"></br>
		';
	}
}

function addScript($pscript)
{
	foreach($pscript as $key => $value)
	{
    echo'
		<script src="'.$value.'"></script></br>
		';
	}
}


function decodeTVUrl($content,$site) {
    preg_match('/<div class="num-tab-main g-clear js-tab"(.*)<div class="c-body g-clear">/sU', $content.'<div class="c-body g-clear">', $temp);
    preg_match_all('/<a data-num="(\d+)" data-daochu="(.*)" href="(.*)">/sU', $temp[1], $temp);
	 $tmpArr['site'] = $site;
    for($j=0; $j<count($temp[0]); $j++) { 
        $temp_urls = str_replace("http://cps.youku.com/redirect.html?id=0000028f&url=", "", $temp[3][$j]);
		$tmpArr['playurl'][$j] = array('no' => $temp[1][$j],
                                  'url' => $temp_urls);
    }
    return $tmpArr;
}

function isPlaypage()
{
$homepatten = $_SERVER['REQUEST_URI'];

preg_match('/vod/',$homepatten,$hometemp);

preg_match('/splay/',$homepatten,$hometemp2);

preg_match('/\/(.*?).html/',$homepatten,$hometemp3);

    if ($hometemp[0] =='vod')
    {
        return "play";
		
    }
	if ($hometemp3[1])
    {
        return $hometemp3[1];
		
    }
}

function pageType()
{
$homepatten = $_SERVER['REQUEST_URI'];

preg_match('/vod/',$homepatten,$hometemp);

preg_match('/splay/',$homepatten,$hometemp2);

preg_match('/\/(.*?).html/',$homepatten,$hometemp3);

    if ($hometemp[0] =='vod')
    {
        return "play";
		
    }
	if ($hometemp3[1])
    {
        return $hometemp3[1];
		
    }
}

/**
 * 返回配置
 * @param $name 配置名称
 */
function C($name=''){
	global $webConfig;
	if(!$name)
		return $webConfig;
	else
		return $webConfig[$name]? $webConfig[$name]: '';
}

/**
 * 写 Cookie
 * @param $key 键
 * @param $val 值
 * @param $time 过期时间
 */
function writeCookie($key, $val, $time = 0) {
    $key = 'mkmovie_'.$key;
    setcookie($key, $val, $time, '/');
}

/**
 * 读 Cookie
 * @param $key 键
 * @param $default 默认值
 */
function readCookie($key, $default = '') {
    $key = 'mkmovie_'.$key;
    if(empty($_COOKIE[$key])) {
        return $default;
    } else {
        return $_COOKIE[$key];
    }
}

/**
 * 获取GET或POST过来的参数
 * @param $key 键值
 * @param $default 默认值
 * @return 获取到的内容（没有则为默认值）
 */
function getParam($key,$default='')
{
    return trim($key && is_string($key) ? (isset($_POST[$key]) ? $_POST[$key] : (isset($_GET[$key]) ? $_GET[$key] : $default)) : $default);
}

/**
 * curl 获取网页源码函数
 * @param $url 目标页面 URL
 * @return 页面源码
 */
function curl($url){ 
    $ch = curl_init(); 
    $timeout = 30; 
    $ua = 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.102 Safari/537.36';
    curl_setopt($ch, CURLOPT_URL, $url); 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
    // curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1); 
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
    curl_setopt($ch, CURLOPT_ENCODING, "");
    curl_setopt($ch, CURLOPT_USERAGENT, $ua);   // 伪造ua 
    curl_setopt($ch, CURLOPT_ENCODING, 'gzip'); // 取消gzip压缩
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE); // https请求 不验证证书和hosts
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
    $content = trim(curl_exec($ch)); 
    curl_close($ch); 
    return $content; 
}
////

////
function channel_select_list($_var_0, $_var_1, $_var_2, $_var_3)
{
	$_var_4 = '';
	$_var_5 = '';
	$_var_6 = $_var_1;
	$_var_7 = '';
	for ($_var_8 = 0; $_var_8 < $_var_6; $_var_8++) {
		$_var_5 = $_var_5 . '　';
	}
	$_var_7 = $_var_0 == 0 ? '' : '├';
	$_var_6 = $_var_6 + 1;
	$_var_9 = 'select * from wudu_vod_class where c_pid = ' . $_var_0 . ' and c_id <> ' . $_var_3 . ' order by c_sort asc , c_id asc';
	$_var_10 = mysqli_query($conn,$_var_9);
	while ($_var_11 = mysqli_fetch_array($_var_10)) {
		$_var_12 = $_var_11['c_id'] == $_var_2 ? 'selected="selected"' : '';
		$_var_4 .= '<option value="' . $_var_11['c_id'] . '" ' . $_var_12 . '>' . $_var_5 . $_var_7 . $_var_11['c_name'] . '</option>' . channel_select_list($_var_11['c_id'], $_var_6, $_var_2, $_var_3);
	}
	return $_var_4;
}
function get_channel_level($_var_13, $_var_14 = 1)
{
	$_var_15 = $_var_14;
	$_var_16 = 'select * from wudu_vod_class where c_id =' . $_var_13 . '';
	$_var_17 = mysqli_query($conn,$_var_16);
	$_var_18 = mysqli_fetch_array($_var_17);
	if ($_var_18['c_pid'] == 0) {
		return $_var_15;
	} else {
		return get_channel_level($_var_18['c_pid'], $_var_15 + 1);
	}
}
function get_channel_sub($_var_19, $_var_20)
{
	$_var_21 = '';
	$_var_22 = ',';
	$_var_23 = 'select * from wudu_channel where c_parent = ' . $_var_19 . ' order by c_order asc , id asc ';
	$_var_24 = mysqli_query($conn,$_var_23);
	while (!!($_var_25 = mysqli_fetch_array($_var_24))) {
		$_var_21 .= $_var_22 . $_var_25['id'] . get_channel_sub($_var_25['id'], '');
	}
	return $_var_20 . $_var_21;
}
function get_channel_main($_var_26)
{
	$_var_27 = 'select * from wudu_channel where id =' . $_var_26 . '';
	$_var_28 = mysqli_query($conn,$_var_27);
	$_var_29 = mysqli_fetch_array($_var_28);
	if ($_var_29['c_parent'] == 0) {
		return $_var_29['id'];
	} else {
		return get_channel_main($_var_29['c_parent']);
	}
}
function get_channel_ifsub($_var_30)
{
	$_var_31 = mysqli_query($conn,'select * from wudu_channel where c_parent = ' . $_var_30 . ' ');
	if (mysqli_fetch_array($_var_31)) {
		return 1;
	} else {
		return 0;
	}
}
function channel_manage($_var_32, $_var_33)
{
	$_var_34 = '';
	$_var_35 = $_var_33;
	$_var_36 = '';
	$_var_37 = mysqli_query($conn,'select * from wudu_vod_class where c_pid= ' . $_var_32 . ' order by c_sort asc , c_id asc ');
	for ($_var_38 = 0; $_var_38 < $_var_35; $_var_38++) {
		$_var_36 = $_var_36 . '　';
	}
	$_var_39 = $_var_32 == 0 ? '' : '├';
	$_var_35 = $_var_35 + 1;
	//while (!!($_var_40 = mysqli_fetch_array($_var_37))) { 
	while ($_var_40 = mysqli_fetch_array($_var_37)) {
		$_var_34 .= '<tr>
					<td>' . $_var_40['c_id'] . '</td>
					<td>' . $_var_40['c_sort'] . '</td>
					<td>' . $_var_40['c_name'] . '</td>

					<td><a class="btn btn-default" href="wudu_detail_add.php?cid=' . $_var_40['c_id'] . '"><span class="glyphicon glyphicon-plus"> 添加</span></a>&nbsp<a class="btn btn-primary" href="wudu_detail.php?cid=' . $_var_40['c_id'] . '"><span class="glyphicon glyphicon-film"> 管理</span></a></td>
					<td><a class="btn btn-success" href="wudu_channel_edit.php?id=' . $_var_40['c_id'] . '"><span class="icon-edit"> 修改</span></a>&nbsp<a class="btn bg-dot" href="wudu_channel.php?del=' . $_var_40['c_id'] . '" onclick="return confirm(\'确定要删除吗？\')"><span class="icon-times"> 删除</span></a></td>
				</tr>' . channel_manage($_var_40['c_id'], $_var_35);
	}
	return $_var_34;
}
function get_channel_name($_var_41)
{
	$_var_42 = mysqli_query($conn,'select * from wudu_vod_class where c_id=' . $_var_41 . '');
	if (!!($_var_43 = mysqli_fetch_array($_var_42))) {
		return $_var_43['c_name'];
	} else {
		return '';
	}
}
function get_usergroup_name($_var_44)
{
	$_var_45 = mysqli_query($conn,'select * from wudu_user_group where ug_id=' . $_var_44 . '');
	if (!!($_var_46 = mysqli_fetch_array($_var_45))) {
		return $_var_46['ug_name'];
	} else {
		return '';
	}
}
function get_player($_var_47)
{
	$_var_48 = mysqli_query($conn,'select * from wudu_vod where d_id =' . $_var_47 . '');
	if (!!($_var_49 = mysqli_fetch_array($_var_48))) {
		return $_var_49['d_player'];
	} else {
		return '';
	}
}
function get_vodurllist($_var_50)
{
	$_var_51 = mysqli_query($conn,'select * from wudu_vod where d_id =' . $_var_50 . '');
	if (!!($_var_52 = mysqli_fetch_array($_var_51))) {
		$_var_53 = explode('
', $_var_52['d_scontent']);
		for ($_var_54 = 0; $_var_54 < count($_var_53); $_var_54++) {
			$_var_53[$_var_54] = explode('$', $_var_53[$_var_54]);
			echo '<li><a href="./jx.php?url=' . $_var_52['d_player'] . '' . $_var_53[$_var_54][1] . '" class="am-btn am-btn-default lipbtn" target="ajax" id="">' . $_var_53[$_var_54][0] . '</a></li>';
		}
	} else {
		return '';
	}
}
function get_vodurl($_var_55)
{
	$_var_56 = mysqli_query($conn,'select * from wudu_vod where d_id =' . $_var_55 . '');
	if (!!($_var_57 = mysqli_fetch_array($_var_56))) {
		$_var_58 = explode('
', $_var_57['d_scontent']);
		for ($_var_59 = 0; $_var_59 < count($_var_58); $_var_59++) {
			$_var_58[$_var_59] = explode('$', $_var_58[$_var_59]);
		}
		echo $_var_57['d_player'] . $_var_58[0][1];
	} else {
		return '';
	}
}
function getPageHtml($_var_60, $_var_61, $_var_62)
{
	$_var_63 = 5;
	$_var_60 = $_var_60 < 1 ? 1 : $_var_60;
	$_var_60 = $_var_60 > $_var_61 ? $_var_61 : $_var_60;
	$_var_61 = $_var_61 < $_var_60 ? $_var_60 : $_var_61;
	$_var_64 = $_var_60 - floor($_var_63 / 2);
	$_var_64 = $_var_64 < 1 ? 1 : $_var_64;
	$_var_65 = $_var_60 + floor($_var_63 / 2);
	$_var_65 = $_var_65 > $_var_61 ? $_var_61 : $_var_65;
	$_var_66 = $_var_65 - $_var_64 + 1;
	if ($_var_66 < $_var_63 && $_var_64 > 1) {
		$_var_64 = $_var_64 - ($_var_63 - $_var_66);
		$_var_64 = $_var_64 < 1 ? 1 : $_var_64;
		$_var_66 = $_var_65 - $_var_64 + 1;
	}
	if ($_var_66 < $_var_63 && $_var_65 < $_var_61) {
		$_var_65 = $_var_65 + ($_var_63 - $_var_66);
		$_var_65 = $_var_65 > $_var_61 ? $_var_61 : $_var_65;
	}
	if ($_var_60 > 1) {
		$_var_67 .= '<li><a  title="上一页" href="' . $_var_62 . ($_var_60 - 1) . '&page=' . ($_var_60 - 1) . '"">上一页</a></li>';
	}
	for ($_var_68 = $_var_64; $_var_68 <= $_var_65; $_var_68++) {
		if ($_var_68 == $_var_60) {
			$_var_67 .= '<li><a style="background:#1a9cd6;"><font color="#fff">' . $_var_68 . '</font></a></li>';
		} else {
			$_var_67 .= '<li><a href="' . $_var_62 . $_var_68 . '&page=' . $_var_68 . '">' . $_var_68 . '</a></li>';
		}
	}
	if ($_var_60 < $_var_65) {
		$_var_67 .= '<li><a  title="下一页" href="' . $_var_62 . ($_var_60 + 1) . '&page=' . ($_var_60 + 1) . '"">下一页</a></li>';
	}
	return $_var_67;
}

/**
			 *判断是否是通过手机访问
			 */
			function isMobile() {
				// 如果有HTTP_X_WAP_PROFILE则一定是移动设备
				if (isset($_SERVER['HTTP_X_WAP_PROFILE'])) {
					return true;
				}
				//如果via信息含有wap则一定是移动设备,部分服务商会屏蔽该信息
				if (isset($_SERVER['HTTP_VIA'])) {
					//找不到为flase,否则为true
					return stristr($_SERVER['HTTP_VIA'], "wap") ? true : false;
				}
				//判断手机发送的客户端标志,兼容性有待提高
				if (isset($_SERVER['HTTP_USER_AGENT'])) {
					$clientkeywords = array('nokia', 'sony', 'ericsson', 'mot', 'samsung', 'htc', 'sgh', 'lg', 'sharp', 'sie-', 'philips', 'panasonic', 'alcatel', 'lenovo', 'iphone', 'ipod', 'blackberry', 'meizu', 'android', 'netfront', 'symbian', 'ucweb', 'windowsce', 'palm', 'operamini', 'operamobi', 'openwave', 'nexusone', 'cldc', 'midp', 'wap', 'mobile');
					// 从HTTP_USER_AGENT中查找手机浏览器的关键字
					if (preg_match("/(" . implode('|', $clientkeywords) . ")/i", strtolower($_SERVER['HTTP_USER_AGENT']))) {
						return true;
					}
				}
				//协议法，因为有可能不准确，放到最后判断
				if (isset($_SERVER['HTTP_ACCEPT'])) {
					// 如果只支持wml并且不支持html那一定是移动设备
					// 如果支持wml和html但是wml在html之前则是移动设备
					if ((strpos($_SERVER['HTTP_ACCEPT'], 'vnd.wap.wml') !== false) && (strpos($_SERVER['HTTP_ACCEPT'], 'text/html') === false || (strpos($_SERVER['HTTP_ACCEPT'], 'vnd.wap.wml') < strpos($_SERVER['HTTP_ACCEPT'], 'text/html')))) {
						return true;
					}
				}
				return false;
			}


function GK($length=10) {

    // 验证码的长度
    $length;

    // 验证码包含的字符
    $characters = "abcdefghijkmnpqrstuvwxyz0123456789ABCDEFGHIGKLMNPQRSTUVWXYZ";

    $string = '';
 
    // 获取 $characters 的长度，并随机截取其中一个字符，直到验证码的长度达到 10 个字符
    for ($p = 0; $p < $length; $p++) {
        $string .= $characters[mt_rand(0, strlen($characters) - 1)];
    }
 
    // 返回生成的验证码
    return $string;
}


////////////

//字符串解密加密
// $string： 明文 或 密文  
// $operation：DECODE表示解密,其它表示加密  
// $key： 密匙  
// $expiry：密文有效期  
function authcode($string, $operation = 'DECODE', $key = '', $expiry = 0) {
	// 动态密匙长度，相同的明文会生成不同密文就是依靠动态密匙 
	$ckey_length = 4;
	// 密匙
	
	$key = md5($key ? $key : UC_KEY);
	// 密匙a会参与加解密  
	$keya = md5(substr($key, 0, 16));
	// 密匙b会用来做数据完整性验证  
	$keyb = md5(substr($key, 16, 16));
	// 密匙c用于变化生成的密文  
	$keyc = $ckey_length ? ($operation == 'DECODE' ? substr($string, 0, $ckey_length): substr(md5(microtime()), -$ckey_length)) : '';
	// 参与运算的密匙 
	$cryptkey = $keya.md5($keya.$keyc);
	$key_length = strlen($cryptkey);
    // 明文，前10位用来保存时间戳，解密时验证数据有效性，10到26位用来保存$keyb(密匙b)，解密时会通过这个密匙验证数据完整性  
    // 如果是解码的话，会从第$ckey_length位开始，因为密文前$ckey_length位保存 动态密匙，以保证解密正确  
	$string = $operation == 'DECODE' ? base64_decode(substr($string, $ckey_length)) : sprintf('%010d', $expiry ? $expiry + time() : 0).substr(md5($string.$keyb), 0, 16).$string;
	$string_length = strlen($string);
 
 
	$result = '';
	$box = range(0, 255);
 
 
	$rndkey = array();
	// 产生密匙簿  
	for($i = 0; $i <= 255; $i++) {
		$rndkey[$i] = ord($cryptkey[$i % $key_length]);
	}
	// 用固定的算法，打乱密匙簿，增加随机性，好像很复杂，实际上对并不会增加密文的强度  
	for($j = $i = 0; $i < 256; $i++) {
		$j = ($j + $box[$i] + $rndkey[$i]) % 256;
		$tmp = $box[$i];
		$box[$i] = $box[$j];
		$box[$j] = $tmp;
	}
	// 核心加解密部分  
	for($a = $j = $i = 0; $i < $string_length; $i++) {
		$a = ($a + 1) % 256;
		$j = ($j + $box[$a]) % 256;
		$tmp = $box[$a];
		$box[$a] = $box[$j];
		$box[$j] = $tmp;
		// 从密匙簿得出密匙进行异或，再转成字符  
		$result .= chr(ord($string[$i]) ^ ($box[($box[$a] + $box[$j]) % 256]));
	}
	if($operation == 'DECODE') {
        // substr($result, 0, 10) == 0 验证数据有效性  
        // substr($result, 0, 10) - time() > 0 验证数据有效性  
        // substr($result, 10, 16) == substr(md5(substr($result, 26).$keyb), 0, 16) 验证数据完整性  
        // 验证数据有效性，请看未加密明文的格式 	
		if((substr($result, 0, 10) == 0 || substr($result, 0, 10) - time() > 0) && substr($result, 10, 16) == substr(md5(substr($result, 26).$keyb), 0, 16)) {
			return substr($result, 26);
		} else {
			return '';
		}
	} else {
        // 把动态密匙保存在密文里，这也是为什么同样的明文，生产不同密文后能解密的原因  
        // 因为加密后的密文可能是一些特殊字符，复制过程可能会丢失，所以用base64编码  	
		return $keyc.str_replace('=', '', base64_encode($result));
	}
}



/* 浏览记录按日期分组 */
function groupVisit($visit)
{
    $curyear = date('Y');
    $visit_list = [];
    foreach ($visit as $v) {
        if ($curyear == date('Y', strtotime($v['times']))) {
            $date = date('m月d日', strtotime($v['times']));
        } else {
            $date = date('Y年m月d日', strtotime($v['times']));
        }
        $visit_list[$date][] = $v;
    }
    return $visit_list;
}
