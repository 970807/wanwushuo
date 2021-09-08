<?php
  header('Access-Control-Allow-Origin: *');
  header('content-type:application/json;charset=utf-8');
  date_default_timezone_set("PRC");
  // 设置时间 $day：返回$day天之前的日期
  function getBeforeDate($day) {
    $d = date('Y-m-d', strtotime('-'.$day.' day'));
    return $d;
  }
  $res = new stdClass();
  $news = array(
    array('time' => getBeforeDate(6).' 10:08', 'text' => '2025年智能家居市场规模将达到1440亿美元', 'link' => 'http://wanwushuo.qianjia.com/html/2020-08/28_370005.html'),
    array('time' => getBeforeDate(8).' 09:49', 'text' => 'Z-Wave联盟正式转为标准制定组织并确定创始成员', 'link' => 'http://wanwushuo.qianjia.com/html/2020-08/26_369890.html'),
    array('time' => getBeforeDate(22).' 09:55', 'text' => '2020年第二季度全球智能音箱销量增长6%，达3000万台', 'link' => 'http://wanwushuo.qianjia.com/html/2020-08/12_369283.html'),
    array('time' => getBeforeDate(22).' 09:39', 'text' => 'ADT加入Zigbee，共同开发统一的智能家居协议', 'link' => 'http://wanwushuo.qianjia.com/html/2020-08/12_369279.html'),
    array('time' => getBeforeDate(30).' 16:04', 'text' => '推荐活动|智能建筑与智慧酒店应用高峰论坛', 'link' => 'http://wanwushuo.qianjia.com/html/2020-08/04_368957.html'),
    array('time' => getBeforeDate(30).' 09:16', 'text' => '谷歌4.5亿美元投资ADT，将联合开拓智能家居业务', 'link' => 'http://wanwushuo.qianjia.com/html/2020-08/04_368910.html'),
    array('time' => getBeforeDate(36).' 10:22', 'text' => '九号机器人凭实力“单飞”，小米生态链加速解体？', 'link' => 'http://wanwushuo.qianjia.com/html/2020-07/29_368692.html'),
    array('time' => getBeforeDate(38).' 10:07', 'text' => 'Codelocks推出用于智能锁的WiFi网关', 'link' => 'http://wanwushuo.qianjia.com/html/2020-07/27_368575.html'),
    array('time' => getBeforeDate(38).' 08:57', 'text' => '未来五年，全球智能家居产业将迎来快速增长', 'link' => 'http://wanwushuo.qianjia.com/html/2020-07/27_368565.html'),
    array('time' => getBeforeDate(44).' 10:40', 'text' => '微软与三星联手共同开拓智能家居业务', 'link' => 'http://wanwushuo.qianjia.com/html/2020-07/21_368328.html')
  );
  $hot = array(
    array('category' => '行业新闻', 'img' => 'http://wanwushuo.ggh0807.cn/images/hot/01.png', 'title' => '智能温控器仍在主导欧洲智能家居市场', 'time' => getBeforeDate(0), 'tags' => array('人工智能', '智慧家居'), 'link' => 'http://wanwushuo.qianjia.com/html/2020-09/03_370248.html'),
    array('category' => '产品推荐', 'img' => 'http://wanwushuo.ggh0807.cn/images/hot/02.jpg', 'title' => '你真的了解智能家居吗？', 'time' => getBeforeDate(2), 'tags' => array('智能家居'), 'link' => 'http://wanwushuo.qianjia.com/html/2020-09/01_370164.html'),
    array('category' => '产品推荐', 'img' => 'http://wanwushuo.ggh0807.cn/images/hot/03.jpg', 'title' => 'HomeKit：哪些智能家居产品支持苹果Home应用？', 'time' => getBeforeDate(3), 'tags' => array('智能家居', '物联网'), 'link' => 'http://wanwushuo.qianjia.com/html/2020-08/31_370088.html'),
    array('category' => '行业新闻', 'img' => 'http://wanwushuo.ggh0807.cn/images/hot/04.jpg', 'title' => '2025年智能家居市场规模将达到1440亿美元', 'time' => getBeforeDate(6), 'tags' => array('智能家居', '物联网'), 'link' => 'http://wanwushuo.qianjia.com/html/2020-08/28_370005.html'),
    array('category' => '产品分析', 'img' => 'http://wanwushuo.ggh0807.cn/images/hot/05.jpg', 'title' => '物联网应用爆发，越来越多的机器身份被滥用', 'time' => getBeforeDate(7), 'tags' => array('网络安全', '物联网'), 'link' => 'http://wanwushuo.qianjia.com/html/2020-08/27_369982.html')
  );
  $speaker = array(
    array('category' => '智能音箱', 'img' => 'http://wanwushuo.ggh0807.cn/images/speaker/01.png', 'title' => '微软智能音箱新专利，能否让Cortana重新焕发活力？', 'time' => getBeforeDate(98), 'tags' => array('人工智能', '智能家居', '智能语音'), 'link' => 'http://wanwushuo.qianjia.com/html/2020-05/28_365936.html'),
    array('category' => '智能音箱', 'img' => 'http://wanwushuo.ggh0807.cn/images/speaker/02.jpg', 'title' => '三星Galaxy Home智能音箱还有戏吗?', 'time' => getBeforeDate(105), 'tags' => array('智能音箱', '人工智能', '智能家居'), 'link' => 'http://wanwushuo.qianjia.com/html/2020-05/21_365608.html'),
    array('category' => '智能音箱', 'img' => 'http://wanwushuo.ggh0807.cn/images/speaker/03.jpg', 'title' => '阿里巴巴计划投资100亿重振智能音箱市场', 'time' => getBeforeDate(105), 'tags' => array('智能音箱', '智能家居', '人工智能'), 'link' => 'http://wanwushuo.qianjia.com/html/2020-05/21_365593.html'),
    array('category' => '智能音箱', 'img' => 'http://wanwushuo.ggh0807.cn/images/speaker/04.jpg', 'title' => '关于苹果智能音箱HomePod 2的所有传言', 'time' => getBeforeDate(111), 'tags' => array('智能音箱', '智能家居', '人工智能'), 'link' => 'http://wanwushuo.qianjia.com/html/2020-05/15_365343.html'),
    array('category' => '智能音箱', 'img' => 'http://wanwushuo.ggh0807.cn/images/speaker/05.jpg', 'title' => '在2020年，如何通过Alexa打造一个智能家居', 'time' => getBeforeDate(164), 'tags' => array('智能家居', 'Alexa', '亚马逊'), 'link' => 'http://wanwushuo.qianjia.com/html/2020-03/23_363013.html')
  );
  $uav = array(
    array('category' => '无人机', 'img' => 'http://wanwushuo.ggh0807.cn/images/uav/01.jpg', 'title' => '无人机是如何崛起并改变市场需求的', 'time' => getBeforeDate(29), 'tags' => array('无人机'), 'link' => 'http://wanwushuo.qianjia.com/html/2020-08/05_368985.html'),
    array('category' => '无人机', 'img' => 'http://wanwushuo.ggh0807.cn/images/uav/01.jpg', 'title' => '为什么无人机不使用小型商用飞机引擎？', 'time' => getBeforeDate(344), 'tags' => array('无人机'), 'link' => 'http://wanwushuo.qianjia.com/html/2019-09/25_350970.html'),
    array('category' => '无人机', 'img' => 'http://wanwushuo.ggh0807.cn/images/uav/02.jpg', 'title' => '无人机在智能交通领域有哪一些应用', 'time' => getBeforeDate(363), 'tags' => array('无人机'), 'link' => 'http://wanwushuo.qianjia.com/html/2019-09/6_349241.html')
  );
  $vr = array(
    array('category' => 'VR/AR', 'img' => 'http://wanwushuo.ggh0807.cn/images/vr/01.jpg', 'title' => '外媒：华为智能AR/VR眼镜或于IFA 2019亮相', 'time' => getBeforeDate(18), 'tags' => array('VR', 'AR'), 'link' => 'http://wanwushuo.qianjia.com/html/2019-08/16_347266.html')
  );
  $earphone = array(
    array('category' => '智能耳机', 'img' => 'http://wanwushuo.ggh0807.cn/images/earphone/01.jpg', 'title' => ' 智能硬件众筹新品：Pearl人工智能无线耳机，还可以太阳能充电', 'time' => getBeforeDate(184), 'tags' => array('无线耳机', '蓝牙', '智能硬件'), 'link' => 'http://wanwushuo.qianjia.com/html/2020-03/03_361862.html'),
    array('category' => '智能耳机', 'img' => 'http://wanwushuo.ggh0807.cn/images/earphone/02.jpg', 'title' => '亚马逊正在开发一款内置健身追踪器的Alexa无线耳机', 'time' => getBeforeDate(345), 'tags' => array('无线耳机', '亚马逊'), 'link' => 'http://wanwushuo.qianjia.com/html/2019-09/24_350889.html'),
    array('category' => '智能耳机', 'img' => 'http://wanwushuo.ggh0807.cn/images/earphone/03.jpg', 'title' => '耳机评测 | 捷波朗 Elite 85h 臻籁无线智能耳机使用体验', 'time' => getBeforeDate(409), 'tags' => array('捷波朗', '蓝牙耳机'), 'link' => 'http://wanwushuo.qianjia.com/html/2019-07/22_344564.html')
  );
  $router = array(
    array('category' => '智能路由器', 'img' => 'http://wanwushuo.ggh0807.cn/images/router/01.jpg', 'title' => '评测 | 网件(NETGEAR)夜鹰RAX80 AX WiFi智能高速路由器', 'time' => getBeforeDate(18), 'tags' => array('智能路由器', '网件', '智能家居'), 'link' => 'http://wanwushuo.qianjia.com/html/2019-08/16_347155.html')
  );
  exit(json_encode(array('news' => $news, 'hot' => $hot, 'speaker' => $speaker, 'uav' => $uav, 'vr' => $vr, 'earphone' => $earphone, 'router' => $router)));
?>