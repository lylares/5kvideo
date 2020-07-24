<?php

if (!defined('PCFINAL')) {
	exit('Request Error!');
}
if (!get_magic_quotes_gpc()) {
	if (!empty($_GET)) {
		$_GET = addslashes_deep($_GET);
	}
	if (!empty($_POST)) {
		$_POST = addslashes_deep($_POST);
	}
	$_COOKIE = addslashes_deep($_COOKIE);
	$_REQUEST = addslashes_deep($_REQUEST);
}
function addslashes_deep($_var_0)
{
	if (empty($_var_0)) {
		return $_var_0;
	} else {
		return is_array($_var_0) ? array_map('addslashes_deep', $_var_0) : addslashes($_var_0);
	}
}
function alert_back($_var_1)
{
	die('<script type="text/javascript">alert("'.$_var_1.'");window.history.back();</script>');
}
function alert_href($_var_2, $_var_3)
{
	die('<script type="text/javascript">alert("'.$_var_2.'");window.location.href="' . $_var_3 . '"</script>');
}
function null_back($_var_4, $_var_5)
{
	if ($_var_4 == '') {
		alert_back($_var_5);
	}
}
function non_numeric_back($_var_6, $_var_7)
{
	if (!is_numeric($_var_6) || $_var_6 < 0) {
		alert_back($_var_7);
	}
}
function page_handle($_var_8, $_var_9, $_var_10)
{
	if (isset($_GET[$_var_8])) {
		$_var_11 = $_GET[$_var_8];
		if (empty($_var_11) || $_var_11 < 1 || !is_numeric($_var_11)) {
			$_var_11 = 1;
		} else {
			$_var_11 = intval($_var_11);
		}
	} else {
		$_var_11 = 1;
	}
	if ($_var_10 == 0) {
		$_var_12 = 1;
	} else {
		$_var_12 = ceil($_var_10 / $_var_9);
	}
	if ($_var_11 > $_var_12) {
		$_var_11 = $_var_12;
	}
	$_var_13 = ($_var_11 - 1) * $_var_9;
	$_var_14 = array();
	$_var_14[0] = $_var_13;
	$_var_14[1] = $_var_9;
	$_var_14[2] = $_var_12;
	$_var_14[3] = $_var_11;
	$_var_14[4] = $_var_8;
	return $_var_14;
}
function page_show($_var_15, $_var_16, $_var_17, $_var_18)
{
	$_var_19 = $_var_15;
	$_var_20 = $_var_16;
	$_var_21 = $_var_17;
	$_var_22 = $_var_18;
	$_var_23 = '';
	$_var_24 = '';
	$_var_23 = $_var_20 - $_var_22;
	if ($_var_23 <= 0) {
		$_var_23 = 1;
		$_var_24 = $_var_23 + $_var_24;
	}
	$_var_24 = $_var_20 + $_var_22;
	if ($_var_24 > $_var_19) {
		$_var_24 = $_var_19;
	}
	$_var_25 = $_SERVER['REQUEST_URI'];
	$_var_26 = parse_url($_var_25);
	if (isset($_var_26['query'])) {
		$_var_27 = $_var_26['path'];
		$_var_28 = $_var_26['query'];
		parse_str($_var_28, $_var_29);
		unset($_var_29[$_var_21]);
		if (count($_var_29) != 0) {
			$_var_25 = $_var_27 . '?' . http_build_query($_var_29) . '&';
		} else {
			$_var_25 = $_var_27 . '?';
		}
	} else {
		$_var_25 = $_var_25 . '?';
	}
	$_var_30 = '';
	$_var_31 = '';
	$_var_32 = '';
	$_var_33 = '';
	$_var_34 = '';
	$_var_35 = '';
	if ($_var_20 > $_var_22 + 1) {
		$_var_31 = '<a href="' . $_var_25 . $_var_21 . '=1" title="首页">1...</a>';
	}
	if ($_var_20 == 1) {
		$_var_30 = '';
	} else {
		$_var_30 = '<a href="' . $_var_25 . $_var_21 . '=' . ($_var_20 - 1) . '" title="上一页"><<</a>';
	}
	for ($_var_36 = $_var_23; $_var_36 <= $_var_24; $_var_36++) {
		if ($_var_36 == $_var_20) {
			$_var_32 = $_var_32 . '<a href="javascript:void(0)" class="page_current">' . $_var_36 . '</a>';
		} else {
			$_var_32 = $_var_32 . '<a href="' . $_var_25 . $_var_21 . '=' . $_var_36 . '" title="第' . $_var_36 . '页">' . $_var_36 . '</a>';
		}
	}
	if ($_var_20 < $_var_19 - $_var_22) {
		$_var_33 = '<a href="' . $_var_25 . $_var_21 . '=' . $_var_19 . '" title="尾页">...' . $_var_19 . '</a>';
	}
	if ($_var_20 == $_var_19) {
		$_var_34 = '';
	} else {
		$_var_34 = '<a href="' . $_var_25 . $_var_21 . '=' . ($_var_20 + 1) . '" title="下一页">>></a>';
	}
	$_var_35 = $_var_35 . $_var_30 . $_var_31 . $_var_32 . $_var_33 . $_var_34 . '';
	return $_var_35;
}
function page_shows($_var_37, $_var_38, $_var_39, $_var_40)
{
	$_var_41 = $_var_37;
	$_var_42 = $_var_38;
	$_var_43 = $_var_39;
	$_var_44 = $_var_40;
	$_var_45 = '';
	$_var_46 = '';
	$_var_45 = $_var_42 - $_var_44;
	if ($_var_45 <= 0) {
		$_var_45 = 1;
		$_var_46 = $_var_45 + $_var_46;
	}
	$_var_46 = $_var_42 + $_var_44;
	if ($_var_46 > $_var_41) {
		$_var_46 = $_var_41;
	}
	$_var_47 = '';
	$_var_48 = '';
	$_var_49 = '';
	$_var_50 = '';
	$_var_51 = '';
	$_var_52 = '<div class="ew-page">';
	if ($_var_42 > $_var_44 + 1) {
		$_var_48 = '<li><a href="' . $_var_43 . '1.html" title="首页">1...</a></li>';
	}
	if ($_var_42 == 1) {
		$_var_47 = '';
	} else {
		$_var_47 = '<li><a href="' . $_var_43 . ($_var_42 - 1) . '.html" title="上一页"><<</a></li>';
	}
	for ($_var_53 = $_var_45; $_var_53 <= $_var_46; $_var_53++) {
		if ($_var_53 == $_var_42) {
			$_var_49 = $_var_49 . '<li><a href="javascript:void(0)" class="on">' . $_var_53 . '</a></li>';
		} else {
			$_var_49 = $_var_49 . '<li><a href="' . $_var_43 . $_var_53 . '.html" title="第' . $_var_53 . '页">' . $_var_53 . '</a></li>';
		}
	}
	if ($_var_42 < $_var_41 - $_var_44) {
		$_var_50 = '<li><a href="' . $_var_43 . $_var_41 . '.html" title="尾页">...' . $_var_41 . '</a></li>';
	}
	if ($_var_42 == $_var_41) {
		$_var_51 = '';
	} else {
		$_var_51 = '<li><a href="' . $_var_43 . ($_var_42 + 1) . '.html" title="下一页">>></a></li>';
	}
	$_var_52 = $_var_52 . $_var_47 . $_var_48 . $_var_49 . $_var_50 . $_var_51 . '</div>';
	return $_var_52;
}
function cut_str($_var_54, $_var_55 = 10, $_var_56 = '...')
{
	$_var_57 = '';
	$_var_58 = 0;
	$_var_59 = 0.0;
	$_var_60 = strlen($_var_54);
	while ($_var_59 < $_var_55 && $_var_58 < $_var_60) {
		$_var_61 = substr($_var_54, $_var_58, 1);
		$_var_62 = ord($_var_61);
		if ($_var_62 >= 252) {
			$_var_57 = $_var_57 . substr($_var_54, $_var_58, 6);
			$_var_58 = $_var_58 + 6;
			$_var_59++;
		} else {
			if ($_var_62 >= 248) {
				$_var_57 = $_var_57 . substr($_var_54, $_var_58, 5);
				$_var_58 = $_var_58 + 5;
				$_var_59++;
			} else {
				if ($_var_62 >= 240) {
					$_var_57 = $_var_57 . substr($_var_54, $_var_58, 4);
					$_var_58 = $_var_58 + 4;
					$_var_59++;
				} else {
					if ($_var_62 >= 224) {
						$_var_57 = $_var_57 . substr($_var_54, $_var_58, 3);
						$_var_58 = $_var_58 + 3;
						$_var_59++;
					} else {
						if ($_var_62 >= 192) {
							$_var_57 = $_var_57 . substr($_var_54, $_var_58, 2);
							$_var_58 = $_var_58 + 2;
							$_var_59++;
						} else {
							if ($_var_62 >= 65 && $_var_62 <= 90 && $_var_62 != 73) {
								$_var_57 = $_var_57 . substr($_var_54, $_var_58, 1);
								$_var_58 = $_var_58 + 1;
								$_var_59++;
							} else {
								if (!(array_search($_var_62, array(37, 38, 64, 109, 119)) === false)) {
									$_var_57 = $_var_57 . substr($_var_54, $_var_58, 1);
									$_var_58 = $_var_58 + 1;
									$_var_59++;
								} else {
									$_var_57 = $_var_57 . substr($_var_54, $_var_58, 1);
									$_var_58 = $_var_58 + 1;
									$_var_59 = $_var_59 + 0.5;
								}
							}
						}
					}
				}
			}
		}
	}
	if ($_var_58 < $_var_60) {
		$_var_57 = $_var_57 . $_var_56;
	}
	return $_var_57;
}
function get_url()
{
	$_var_63 = 'http';
	if (isset($_SERVER['HTTPS']) == 'on') {
		$_var_63 .= 's';
	}
	$_var_63 .= '://';
	if ($_SERVER['SERVER_PORT'] != '80') {
		$_var_63 .= $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . $_SERVER['REQUEST_URI'];
	} else {
		$_var_63 .= $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
	}
	return $_var_63;
}
function get_ip()
{
	static $_var_64 = NULL;
	if ($_var_64 !== NULL) {
		return $_var_64;
	}
	if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
		$_var_65 = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
		$_var_66 = array_search('unknown', $_var_65);
		if (false !== $_var_66) {
			unset($_var_65[$_var_66]);
		}
		$_var_64 = trim($_var_65[0]);
	} else {
		if (isset($_SERVER['HTTP_CLIENT_IP'])) {
			$_var_64 = $_SERVER['HTTP_CLIENT_IP'];
		} else {
			if (isset($_SERVER['REMOTE_ADDR'])) {
				$_var_64 = $_SERVER['REMOTE_ADDR'];
			}
		}
	}
	$_var_64 = false !== ip2long($_var_64) ? $_var_64 : '0.0.0.0';
	return $_var_64;
}
function clear_html($_var_67)
{
	$_var_67 = strip_tags($_var_67);
	$_var_67 = trim($_var_67);
	$_var_67 = preg_replace('/\\s(?=\\s)/', '', $_var_67);
	$_var_67 = preg_replace('/[\\n\\r\\t]/', ' ', $_var_67);
	return $_var_67;
}
function random_str($_var_68 = 6)
{
	$_var_69 = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
	$_var_70 = '';
	for ($_var_71 = 0; $_var_71 < $_var_68; $_var_71++) {
		$_var_70 .= $_var_69[mt_rand(0, strlen($_var_69) - 1)];
	}
	return $_var_70;
}
function ism()
{
	$_var_72 = false;
	if (isset($_SERVER['HTTP_X_WAP_PROFILE'])) {
		$_var_72 = true;
	}
	if (isset($_SERVER['HTTP_VIA'])) {
		$_var_72 = stristr($_SERVER['HTTP_VIA'], 'wap') ? true : false;
	}
	if (isset($_SERVER['HTTP_USER_AGENT'])) {
		$_var_73 = array('nokia', 'sony', 'ericsson', 'mot', 'samsung', 'htc', 'sgh', 'lg', 'sharp', 'sie-', 'philips', 'panasonic', 'alcatel', 'lenovo', 'iphone', 'ipod', 'blackberry', 'meizu', 'android', 'netfront', 'symbian', 'ucweb', 'windowsce', 'palm', 'operamini', 'operamobi', 'openwave', 'nexusone', 'cldc', 'midp', 'wap', 'mobile');
		if (preg_match('/(' . implode('|', $_var_73) . ')/i', strtolower($_SERVER['HTTP_USER_AGENT']))) {
			$_var_72 = true;
		}
	}
	if (isset($_SERVER['HTTP_ACCEPT'])) {
		if (strpos($_SERVER['HTTP_ACCEPT'], 'vnd.wap.wml') !== false && (strpos($_SERVER['HTTP_ACCEPT'], 'text/html') === false || strpos($_SERVER['HTTP_ACCEPT'], 'vnd.wap.wml') < strpos($_SERVER['HTTP_ACCEPT'], 'text/html'))) {
			$_var_72 = true;
		}
	}
	if (isset($_COOKIE['ism'])) {
		if ($_COOKIE['ism'] == 'y') {
			$_var_72 = true;
		}
		if ($_COOKIE['ism'] == 'n') {
			$_var_72 = false;
		}
	}
	return $_var_72;
}
function arrtoinsert($_var_74)
{
	$_var_75 = '';
	$_var_76 = '';
	foreach ($_var_74 as $_var_77 => $_var_78) {
		$_var_79[] = '`' . $_var_77 . '`';
		$_var_80[] = '"' . $_var_78 . '"';
	}
	$_var_75 .= implode(',', $_var_79);
	$_var_76 .= implode(',', $_var_80);
	$_var_81[0] = $_var_75;
	$_var_81[1] = $_var_76;
	return $_var_81;
}
function arrtoupdate($_var_82)
{
	$_var_83 = '';
	$_var_84 = '';
	foreach ($_var_82 as $_var_85 => $_var_86) {
		$_var_83 .= $_var_84 . '`' . $_var_85 . '` = "' . $_var_86 . '"';
		$_var_84 = ',';
	}
	return $_var_83;
}