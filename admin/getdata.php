<?php

if (isset($_GET['play'])) {
	$d_parent = $_GET['d_parent'];
	$d_player = $_GET['d_player'];
	$zhui = $_GET['zhui'];
	$player = $_GET['play'];
	if ($_GET['play'] == '') {
		echo '影片不能为空!';
	}
	$d_parent = $_GET['d_parent'];
	$d_player = $_GET['d_player'];
	$zhui = $_GET['zhui'];
	$player = base64_decode($_GET['play']);
	$tvinfo = file_get_contents($player);
	$tvpm = '#<h2>(.*?)</h2>#';
	$tvzy = '#<li>主演：<span>(.*?)</span></li>#';
	$tvtp = '#<img class="lazy" src="(.*?)" alt="(.*?)" />#';
	$tvzz = '#<li><input type="checkbox" name="copy_sel" value="(.*?)" checked="" />(.*?)</li>#';
	$jianjie = '#<div class="vodplayinfo">(.*?)</div>#';
	preg_match_all($jianjie, $tvinfo, $jjarr);
	preg_match_all($tvzz, $tvinfo, $tvarr);
	preg_match_all($tvpm, $tvinfo, $btarr);
	preg_match_all($tvzy, $tvinfo, $zyarr);
	preg_match_all($tvtp, $tvinfo, $tparr);
	$title = $btarr[1];
	$tupian = $tparr[1];
	$zhuyan = $zyarr[1];
	$dizhi = $tvarr[2];
	$jj = $jjarr[1];
	$huiche = '
';
	if (!empty($title)) {
		foreach ($title as $key => $video) {
			$titile = str_replace('<!--片名开始-->', '', "{$title[$key]}");
			$titile = str_replace('<!--片名结束-->', '', "{$titile}");
			$jieshao = str_replace('<!--介绍开始-->', '', "{$jj[$key]}");
			$jieshao = str_replace('<!--介绍结束-->', '', "{$jieshao}");
			$zyan = str_replace('<!--主演开始-->', '', "{$zhuyan[$key]}");
			$zyan = str_replace('<!--主演结束-->', '', "{$zyan}");
			$pic = str_replace('http://cj.baiwanzy.com/LdgImg.php?url=', '', "{$tupian[$key]}");
			foreach ($dizhi as $k => $vurl) {
				if (strpos($dizhi[$k], 'm3u8')) {
					$m3u8[] = $dizhi[$k] . $huiche;
				} elseif (strpos($dizhi[$k], 'mp4')) {
					$mp4[] = $dizhi[$k] . $huiche;
				} else {
					$zhilian[] = $dizhi[$k] . $huiche;
				}
			}
			if ($zhui == 0) {
				$_data['d_scontent'] = '' . implode('', $zhilian) . '';
			} elseif ($zhui == 1) {
				$_data['d_scontent'] = '' . implode('', $m3u8) . '';
			} elseif ($zhui == 2) {
				$_data['d_scontent'] = '' . implode('', $mp4) . '';
			}
			$_data['d_player'] = $d_player;
			$_data['d_name'] = $titile;
			$_data['d_zhuyan'] = $zyan;
			$_data['d_picture'] = $pic;
			$_data['d_content'] = $jieshao;
			$_data['d_parent'] = $d_parent;
			$str = arrtoinsert($_data);
			$result = mysqli_query($conn,'select * from wudu_vod where d_name= "' . $titile . '"');
			if (mysqli_fetch_array($result)) {
				$sql = 'update wudu_vod set ' . arrtoupdate($_data) . ' where d_name="' . $titile . '"';
				if (mysqli_query($conn,$sql)) {
				}
				echo '<script>alert("影片重复更新最新地址成功!");window.opener=null;window.close();</script>';
			} else {
				$sql = 'insert into wudu_vod (' . $str[0] . ') values (' . $str[1] . ')';
				if (mysqli_query($conn,$sql)) {
					echo '<script>alert("影片采集成功!");window.opener=null;window.close();</script>';
				}
			}
		}
	}
}
if (isset($_POST['execute'])) {
	null_back($_POST['id'], '请至少选中一项！');
	$s = '';
	$id = '';
	foreach ($_POST['id'] as $value) {
		$id .= $s . $value;
		$s = ',';
	}
	switch ($_POST['execute_method']) {
		case 'srec':
			$sql = 'update wudu_vod set d_rec = 1 where d_id in (' . $id . ')';
			break;
		case 'crec':
			$sql = 'update wudu_vod set d_rec = 0 where d_id in (' . $id . ')';
			break;
		case 'shot':
			$sql = 'update wudu_vod set d_hot = 1 where d_id in (' . $id . ')';
			break;
		case 'chot':
			$sql = 'update wudu_vod set d_hot = 0 where d_id in (' . $id . ')';
			break;
		case 'delete':
			$sql = 'delete from wudu_vod where d_id in (' . $id . ')';
			break;
		default:
			alert_back('请选择要执行的操作');
	}
	mysqli_query($conn,$sql);
	alert_href('执行成功!', 'wudu_detail.php?cid=0');
}
if (isset($_POST['shift'])) {
	null_back($_POST['id'], '请至少选中一项！');
	$s = '';
	$id = '';
	foreach ($_POST['id'] as $value) {
		$id .= $s . $value;
		$s = ',';
	}
	null_back($_POST['shift_target'], '请选择要转移到的频道');
	mysqli_query($conn,'update wudu_vod set d_parent = ' . $_POST['shift_target'] . ' where d_id in (' . $id . ')');
	alert_href('转移成功!', 'wudu_detail.php?cid=0');
}
