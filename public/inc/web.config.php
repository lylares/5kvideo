<?php

$sql = 'select * from wudu_system where id = 1';
$row=$db->getRow($sql);

$movie="";
$tv="";
$dm="";
$zy="";
$wudu_sitename = $row['sitename'];//站点名称
$wudu_domain = $row['domain'];//域名带【/】
$wudu_seoname = $row['seoname'];//seo
$wudu_keywords = $row['keywords'];//关键词
$wudu_theme = $row['theme'];//主题
$wudu_desc = $row['desc'];//站点描述
$wudu_spnum = $row['spnum'];//特别推荐数量
$wudu_recnum = $row['recnum'];//推荐数量
$wudu_cache = $row['cache'];//开启缓存
$wudu_static = $row['static'];//开启伪静态
$wudu_logo = $row['logo'];//logo
$wudu_wxqrcode = $row['wxqrcode'];//微信二维码
$wudu_reward = $row['reward'];//打赏码
$wudu_wuduapi = $row['wuduapi'];//官方播放接口
$wudu_playapi = $row['playapi'];//其他播放接口
$wudu_copyright = $row['copyright'];//版权
$wudu_changyan = $row['changyan'];//畅言代码
$wudu_tongji = $row['tongji'];//统计代码
$wudu_recaton = $row['recaton'];//推荐开启
$wudu_movie = $row['movie'];//开启首页电影
$wudu_tv = $row['tv'];//开启首页电视剧
$wudu_va = $row['va'];//开启首页综艺
$wudu_ct = $row['ct'];//开启首页动漫
$wudu_hctime= $row['hctime'];//缓存时间
$wudu_security = $row['security'];//域名防红
$wudu_post_on = $row['post'];//消息开关
$wudu_postinfo = $row['postinfo'];//首页消息内容
$wudu_play = $row['play'];//
$wudu_movienew= $row['movienew'];//最新电影
$wudu_ctnew= $row['ctnew'];//最新动漫
$wudu_vanew= $row['vanew'];//最新综艺
$wudu_partner= $row['partner'];//合作伙伴
$wudu_links= $row['links'];//友情链接
$wudu_recount= $row['recount'];//热门推荐数
$wudu_offine= $row['offline'];//下线视频
$wudu_error = $row['displayerror'];
$wudu_qrapi = $row['qrapi'];


