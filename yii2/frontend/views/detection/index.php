<?php
/**
 * Team: NKUF4
 * Coding by 胡亚飞 2111690, 20231222
 */

use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\widgets\ActiveForm;

$this->title = '核污染监测数据';
$this->params['breadcrumbs'][] = $this->title;
?>

<h2 data-text="DETECTION" class="detection-title">DETECTION</h2>
<div id="detection-container" class="detection-container"></div>
    <!-- 引入 echarts.js -->
    <script src="https://cdn.bootcdn.net/ajax/libs/echarts/5.4.3/echarts.js"></script>
    <!-- 引入 百度地图JS API 脚本 -->
    <script type="text/javascript" src="https://api.map.baidu.com/api?v=3.0&ak=jfhHvq8ay3DPZyO6WgREMZFAuwGjAdBy"></script>

    <!-- 引入 百度地图扩展 -->
    <script src="https://cdn.bootcdn.net/ajax/libs/echarts/5.4.3/extension/bmap.js"></script>

    <!-- 去掉logo -->
    <style type="text/css">
    .anchorBL{
        display:none
    }
    </style>

    <script>
    var chartDom = document.getElementById('detection-container');
    var myChart = echarts.init(chartDom);
    var option;

    var data = [
  { name: '奥林匹克森林公园站', value: 75.4 },
  { name: '北京万柳中路站', value: 90 },
  { name: '北京门头沟西苑路站', value: 64.9 },
  { name: '北京昌平昌赤路站', value: 72.2 },
  { name: '亦庄博大公园站', value: 73.7 },
  { name: '北京平谷赵赵路站', value: 57.2 },
  { name: '北京延庆夏都公园站', value: 68.6 },
  { name: '南开复康路站', value: 71.2 },
  { name: '天津津南咸水沽小学站', value: 70.6 },
  { name: '天津北辰西平道站', value: 59.5 },
  { name: '天津武清安监局站', value: 69.7 },
  { name: '宝坻建设路站', value: 63.1 },
  { name: '天津滨海新区监测中心站', value: 73 },
  { name: '天津宁河环保局站', value: 66.9 },
  { name: '天津市静海区西钓台站', value: 68.7 },
  { name: '天津蓟州北六里屯站', value: 64.2 },
  { name: '石家庄市省辐射站', value: 92 },
  { name: '石家庄槐岭路站', value: 65.8 },
  { name: '唐山路北区站', value: 74.9 },
  { name: '秦皇岛秦皇东大街站', value: 74.3 },
  { name: '邯郸丛台区站', value: 68.6 },
  { name: '邢台桥东区站', value: 66.3 },
  { name: '保定竞秀区站', value: 84.4 },
  { name: '雄安新区容城站', value: 74.3 },
  { name: '张家口纬一路站', value: 85.5 },
  { name: '承德开发区站', value: 75.2 },
  { name: '沧州运河区站', value: 64.6 },
  { name: '廊坊安次区站', value: 77.5 },
  { name: '衡水桃城区站', value: 69.3 },
  { name: '太原市省环保局站', value: 91.7 },
  { name: '太原长治路站', value: 88.1 },
  { name: '大同市文兴路站', value: 76.1 },
  { name: '临汾市开发区西大街站', value: 80.6 },
  { name: '内蒙古环境监测中心站', value: 106.8 },
  { name: '呼和浩特市环境监测站', value: 95.4 },
  { name: '包头市乌兰计站', value: 109.8 },
  { name: '包头市标准站', value: 113.2 },
  { name: '通辽市环境监测站', value: 82.4 },
  { name: '呼伦贝尔市扎兰屯路站', value: 85.1 },
  { name: '沈阳市东陵站', value: 68 },
  { name: '大连市旅顺口区站', value: 70.4 },
  { name: '大连市庄河站', value: 101.8 },
  { name: '鞍山铁西区站', value: 73.2 },
  { name: '抚顺市新宾站', value: 82.9 },
  { name: '本溪市桓仁站', value: 93.1 },
  { name: '丹东市振兴区站', value: 87.9 },
  { name: '丹东市东港站', value: 93.4 },
  { name: '丹东市凤城站', value: 112.1 },
  { name: '锦州松山新区站', value: 67.1 },
  { name: '营口市鲅鱼圈站', value: 80.2 },
  { name: '阜新细河区站', value: 75.2 },
  { name: '盘锦双台子区站', value: 65.2 },
  { name: '铁岭凡河新区站', value: 69.6 },
  { name: '朝阳双塔区站', value: 69.6 },
  { name: '葫芦岛市龙港站', value: 74.8 },
  { name: '长春卫星路站', value: 83.2 },
  { name: '长春青年路站', value: 71.5 },
  { name: '吉林丰满区站', value: 75.8 },
  { name: '四平铁西区站', value: 72.1 },
  { name: '集安市活龙村站', value: 87.4 },
  { name: '长白山北山门站', value: 93.1 },
  { name: '临江市鸭绿江大街站', value: 65 },
  { name: '白山市三道沟镇站', value: 101.3 },
  { name: '松原临江西路站', value: 73.1 },
  { name: '白城工业园区站', value: 84.5 },
  { name: '延边珲春龙源公园站', value: 64.2 },
  { name: '图们市环保局站', value: 87.5 },
  { name: '龙井市海蓝公园站', value: 82.6 },
  { name: '和龙市气象局站', value: 96 },
  { name: '哈尔滨南直路站', value: 72.5 },
  { name: '齐齐哈尔龙沙区站', value: 70.1 },
  { name: '鸡西市虎林站', value: 74.5 },
  { name: '鹤岗兴安区站', value: 90.5 },
  { name: '双鸭山尖山区站', value: 81.3 },
  { name: '大庆黑鱼湖水厂站', value: 79.6 },
  { name: '伊春伊春区站', value: 83.5 },
  { name: '佳木斯江心岛站', value: 81.5 },
  { name: '佳木斯市抚远站', value: 67.9 },
  { name: '七台河桃山区站', value: 83.6 },
  { name: '牡丹江十二条站', value: 85.6 },
  { name: '黑河卡伦山村站', value: 77 },
  { name: '绥化北林区站', value: 78.3 },
  { name: '大兴安岭地区漠河站', value: 85.9 },
  { name: '普陀沪太路站', value: 65.8 },
  { name: '浦东新区临港站', value: 72 },
  { name: '金山临桂路站', value: 71.8 },
  { name: '崇明汲浜路站', value: 81 },
  { name: '南京新城科技园站', value: 58.7 },
  { name: '无锡周新东路站', value: 72.6 },
  { name: '徐州市自来水厂站', value: 49.6 },
  { name: '常州新北区站', value: 83.2 },
  { name: '苏州独墅湖站', value: 74.6 },
  { name: '南通崇川区站', value: 82.9 },
  { name: '连云港新浦站', value: 100 },
  { name: '淮安清河站', value: 69.4 },
  { name: '盐城市文港北路站', value: 94.5 },
  { name: '扬州扬子江北路站', value: 70.5 },
  { name: '镇江丹徒区站', value: 83.3 },
  { name: '泰州海陵区站', value: 92 },
  { name: '宿迁市自来水厂站', value: 54.5 },
  { name: '杭州省辐射站', value: 99.2 },
  { name: '杭州三义村站', value: 84.5 },
  { name: '宁波宝善路站', value: 87.4 },
  { name: '温州三垟湿地公园站', value: 74.1 },
  { name: '嘉兴凌公塘路站', value: 69.1 },
  { name: '湖州市沿圩湾站', value: 106.6 },
  { name: '绍兴市环保局站', value: 88.6 },
  { name: '金华金东区站', value: 93.4 },
  { name: '衢州西区站', value: 96.9 },
  { name: '舟山市体育路站', value: 93.1 },
  { name: '台州椒江区站', value: 73.4 },
  { name: '丽水经济开发区站', value: 91.6 },
  { name: '合肥怀宁路站', value: 75.4 },
  { name: '芜湖赭山路站', value: 67.6 },
  { name: '蚌埠胜利东路站', value: 67.1 },
  { name: '滁州清流西路站', value: 66.3 },
  { name: '宿州市人民路站', value: 71.9 },
  { name: '宣城宣州区站', value: 69.9 },
  { name: '福州市福飞北路站', value: 108.8 },
  { name: '福州连江站', value: 94 },
  { name: '厦门杏林南路站', value: 94.5 },
  { name: '南昌洪都北大道站', value: 77.1 },
  { name: '景德镇市景东大道站', value: 96.5 },
  { name: '九江浔阳路站', value: 77.1 },
  { name: '鹰潭月湖区站', value: 75.8 },
  { name: '赣州贺兰山路站', value: 86 },
  { name: '上饶滨江路站', value: 109 },
  { name: '济南市省辐射站', value: 85.2 },
  { name: '济南经十路站', value: 68.2 },
  { name: '济南市花园北路站', value: 75.9 },
  { name: '青岛市环保局站', value: 89.2 },
  { name: '青岛崂山区南窑站', value: 101.4 },
  { name: '青岛崂山区登瀛站', value: 91.9 },
  { name: '淄博柳泉路站', value: 59.2 },
  { name: '枣庄薛城区站', value: 64.9 },
  { name: '东营东营区站', value: 77.5 },
  { name: '烟台青年南路站', value: 70.2 },
  { name: '潍坊新华路站', value: 71.6 },
  { name: '济宁汶上县站', value: 65.1 },
  { name: '荣成市观海东路站', value: 91 },
  { name: '威海市环保局站', value: 92.7 },
  { name: '郑州大王庄站', value: 75.9 },
  { name: '洛阳中州东路站', value: 65.8 },
  { name: '漯河龙江路站', value: 76.6 },
  { name: '武汉市公正路站', value: 81.9 },
  { name: '黄石市苏州路站', value: 61.3 },
  { name: '宜昌胜利四路站', value: 68.6 },
  { name: '襄阳新华路站', value: 77.9 },
  { name: '长沙望城区环保局站', value: 93.8 },
  { name: '长沙万家丽中路站', value: 68.6 },
  { name: '张家界大庸路站', value: 86.6 },
  { name: '怀化怀黔路站', value: 71.2 },
  { name: '广州大道站', value: 96.2 },
  { name: '韶关武江区站', value: 81 },
  { name: '珠海市中山大学站', value: 139.2 },
  { name: '汕头龙湖区站', value: 92.4 },
  { name: '佛山禅城区站', value: 86.2 },
  { name: '江门蓬江区站', value: 90.2 },
  { name: '湛江开发区站', value: 63.8 },
  { name: '茂名乙烯生活区站', value: 87 },
  { name: '肇庆端州区站', value: 74.2 },
  { name: '惠州市红花湖站', value: 83.2 },
  { name: '梅州梅江区站', value: 81.5 },
  { name: '汕尾海滨大道站', value: 75 },
  { name: '河源市紫金县站', value: 119 },
  { name: '清远佛冈县站', value: 108 },
  { name: '东莞市植物园站', value: 87.1 },
  { name: '中山市横栏镇站', value: 90.1 },
  { name: '潮州凤新东路站', value: 89.3 },
  { name: '揭阳榕城区站', value: 113.8 },
  { name: '云浮云安区站', value: 77.2 },
  { name: '广西辐射站', value: 75 },
  { name: '柳州城中区站', value: 60.7 },
  { name: '桂林市市民广场站', value: 81 },
  { name: '梧州长洲区站', value: 76.6 },
  { name: '北海海城区站', value: 62.2 },
  { name: '防城港万鹤路站', value: 66.3 },
  { name: '钦州钦州学院站', value: 75.8 },
  { name: '贵港港北区站', value: 64.8 },
  { name: '玉林人民东路站', value: 67.1 },
  { name: '百色辐射站', value: 77.8 },
  { name: '贺州南环路站', value: 73.9 },
  { name: '河池金城江区站', value: 67.3 },
  { name: '来宾新桥路站', value: 60.7 },
  { name: '崇左江州区站', value: 79.5 },
  { name: '海口市白驹大道站', value: 62.1 },
  { name: '海口红旗镇站', value: 60.8 },
  { name: '三亚榆亚路站', value: 92.3 },
  { name: '三亚海棠湾青田水厂站', value: 95.3 },
  { name: '三亚海棠湾301医院站', value: 74.7 },
  { name: '三亚亚龙湾站', value: 94.4 },
  { name: '三沙市永兴岛站', value: 65.7 },
  { name: '儋州第一中学站', value: 69 },
  { name: '五指山阿驼岭站', value: 87.8 },
  { name: '琼海金海北路站', value: 76.3 },
  { name: '白沙邦溪镇站', value: 88.6 },
  { name: '天城大道站', value: 67.2 },
  { name: '李渡站', value: 88.6 },
  { name: '大礼堂站', value: 80 },
  { name: '白市驿站', value: 78.3 },
  { name: '成都市温江区花土路站', value: 87.2 },
  { name: '成都熊猫基地站', value: 74 },
  { name: '成都锦江区站', value: 71 },
  { name: '攀枝花机场路站', value: 87.5 },
  { name: '泸州纳溪区站', value: 73.9 },
  { name: '德阳泰山南路站', value: 72.8 },
  { name: '绵阳三水厂站', value: 72.5 },
  { name: '眉山眉州大道站', value: 80.1 },
  { name: '宜宾敬业路站', value: 74.5 },
  { name: '达州通川区站', value: 87.4 },
  { name: '雅安雨城区站', value: 81.6 },
  { name: '资阳雁江区站', value: 67 },
  { name: '甘孜康定榆林路站', value: 119 },
  { name: '西昌海南乡站', value: 102.2 },
  { name: '贵州省辐射环境监理站', value: 78 },
  { name: '贵阳青云路站', value: 81.3 },
  { name: '六盘水明湖路站', value: 75.1 },
  { name: '遵义市三贤路站', value: 89.9 },
  { name: '昆明环城西路站', value: 85.3 },
  { name: '保山九龙路站', value: 69.2 },
  { name: '拉萨东嘎镇站', value: 193.8 },
  { name: '林芝迎宾路站', value: 152.5 },
  { name: '陕西省环保大厦站', value: 84 },
  { name: '西安北郊污水处理厂站', value: 77.7 },
  { name: '宝鸡眉县站', value: 92.9 },
  { name: '延安市双拥大道站', value: 83.4 },
  { name: '汉中民主街站', value: 78.4 },
  { name: '兰州市金昌路站', value: 101.5 },
  { name: '兰州市东岗站', value: 98.4 },
  { name: '嘉峪关嘉北工业园站', value: 117 },
  { name: '金昌市公园路站', value: 96.9 },
  { name: '西宁市共和路站', value: 90.8 },
  { name: '西宁市纳家山站', value: 125 },
  { name: '瓦里关站', value: 181.4 },
  { name: '玉树通天河站', value: 152.3 },
  { name: '格尔木昆仑路站', value: 136.7 },
  { name: '银川市环保局西夏分局站', value: 86.3 },
  { name: '宁夏放射性废物库站', value: 89.7 },
  { name: '固原市污水处理厂站', value: 92.5 },
  { name: '中卫黄河站', value: 91.4 },
  { name: '乌鲁木齐长春北路站', value: 81.7 },
  { name: '乌鲁木齐北京中路站', value: 73.2 },
  { name: '克拉玛依准噶尔路站', value: 74.8 },
  { name: '哈密翰林路站', value: 116.4 },
  { name: '喀什人民东路站', value: 92.8 },
  { name: '伊犁新华西路站', value: 103.7 }
];
    var geoCoordMap = {
  奥林匹克森林公园站: [116.392159, 40.018635],
  北京万柳中路站: [116.296976, 39.968225],
  北京门头沟西苑路站: [116.137590, 39.907227],
  北京昌平昌赤路站: [116.222678, 40.466851],
  亦庄博大公园站: [116.503292, 39.796373],
  北京平谷赵赵路站: [117.084852, 40.132114],
  北京延庆夏都公园站: [115.977620, 40.454152],
  南开复康路站: [117.141275, 39.099004],
  天津津南咸水沽小学站: [117.386494, 38.983200],
  天津北辰西平道站: [117.081338, 39.230430],
  天津武清安监局站: [117.044560, 39.384108],
  宝坻建设路站: [117.309748, 39.717054],
  滨海新区世纪大道站: [117.544314, 38.877244],
  天津滨海新区监测中心站: [117.704273, 38.994016],
  天津宁河环保局站: [117.826674, 39.329749],
  天津市静海区西钓台站: [116.937187, 38.938952],
  天津蓟州北六里屯站: [117.395323, 40.012027],
  石家庄市省辐射站: [114.514976, 38.042007],
  石家庄槐岭路站: [114.538315, 38.025152],
  唐山路北区站: [118.201085, 39.625079],
  秦皇岛秦皇东大街站: [119.604770, 39.948179],
  邯郸丛台区站: [114.492875, 36.636434],
  邢台桥东区站: [114.507443, 37.071314],
  保定竞秀区站: [115.458671, 38.877318],
  雄安新区容城站: [115.888965, 39.034787],
  张家口纬一路站: [114.885895, 40.768931],
  承德开发区站: [117.971436, 40.890749],
  沧州运河区站: [116.842964, 38.283456],
  廊坊安次区站: [116.694544, 39.502569],
  衡水桃城区站: [115.675208, 37.735152],
  太原市省环保局站: [112.549656, 37.870451],
  太原长治路站: [112.562398, 37.818955],
  大同市文兴路站: [113.345642, 40.076559],
  临汾市开发区西大街站: [111.507080, 36.108930],
  内蒙古环境监测中心站: [111.638141, 40.802957],
  呼和浩特市环境监测站: [111.748814, 40.842127],
  包头市乌兰计站: [109.628384, 40.633695],
  包头市标准站: [109.953150, 40.621327],
  通辽市环境监测站: [122.243309, 43.653566],
  呼伦贝尔市扎兰屯路站: [119.766374, 49.227379],
  沈阳市东陵站: [123.591080, 41.851790],
  大连市旅顺口区站: [121.261982, 38.851742],
  大连市庄河站: [122.953570, 39.704433],
  鞍山铁西区站: [122.969531, 41.119719],
  抚顺市新宾站: [125.039994, 41.734031],
  本溪市桓仁站: [125.361061, 41.267048],
  丹东市振兴区站: [124.383382, 40.129706],
  丹东市东港站: [124.152581, 39.863193],
  丹东市凤城站: [124.066873, 40.452180],
  锦州松山新区站: [121.150372, 41.028553],
  营口市鲅鱼圈站: [122.094481, 40.188026],
  阜新细河区站: [121.680157, 42.025412],
  盘锦双台子区站: [122.075970, 41.212401],
  铁岭凡河新区站: [123.734223, 42.233770],
  朝阳双塔区站: [120.453717, 41.565814],
  葫芦岛市龙港站: [120.988320, 40.720991],
  长春卫星路站: [125.341138, 43.833271],
  长春青年路站: [125.323643, 43.816996],
  吉林丰满区站: [126.561351, 43.821192],
  四平铁西区站: [124.345994, 43.146288],
  集安市活龙村站: [126.193172, 41.125805],
  长白山北山门站: [128.021666, 42.003029],
  临江市鸭绿江大街站: [126.914002, 41.803093],
  白山市三道沟镇站: [126.517638, 41.647393],
  松原临江西路站: [124.805337, 45.178863],
  白城工业园区站: [122.888813, 45.585034],
  延边珲春龙源公园站: [130.361682, 42.862002],
  图们市环保局站: [129.843807, 42.968039],
  龙井市海蓝公园站: [129.426529, 42.767172],
  和龙市气象局站: [129.010932, 42.546434],
  哈尔滨南直路站: [126.705821, 45.759628],
  齐齐哈尔龙沙区站: [123.958447, 47.317103],
  鸡西市虎林站: [132.976549, 45.765031],
  鹤岗兴安区站: [130.239289, 47.252805],
  双鸭山尖山区站: [131.158372, 46.646083],
  大庆黑鱼湖水厂站: [125.112563, 46.788182],
  伊春伊春区站: [128.907156, 47.728257],
  佳木斯江心岛站: [130.318916, 46.800002],
  佳木斯市抚远站: [134.402466, 48.345465],
  七台河桃山区站: [131.020046, 45.765733],
  牡丹江十二条站: [129.632928, 44.551486],
  黑河卡伦山村站: [127.528865, 50.098446],
  绥化北林区站: [126.984995, 46.638114],
  大兴安岭地区漠河站: [122.504983, 52.987888],
  普陀沪太路站: [121.419369, 31.288830],
  浦东新区临港站: [121.817447, 30.889007],
  金山临桂路站: [121.339708, 30.720329],
  崇明汲浜路站: [121.794969, 31.575378],
  南京新城科技园站: [118.740551, 31.994186],
  无锡周新东路站: [120.331106, 31.515620],
  徐州市自来水厂站: [117.283752, 34.204224],
  常州新北区站: [119.960925, 31.863550],
  苏州独墅湖站: [120.705950, 31.268295],
  南通崇川区站: [120.857253, 32.010277],
  连云港新浦站: [119.192653, 34.619707],
  淮安清河站: [119.113166, 33.551495],
  盐城市文港北路站: [120.156172, 33.397183],
  扬州扬子江北路站: [119.407778, 32.419843],
  镇江丹徒区站: [119.433854, 32.132118],
  泰州海陵区站: [119.923825, 32.492480],
  宿迁市自来水厂站: [118.275228, 33.963186],
  杭州省辐射站: [120.210792, 30.246026],
  杭州三义村站: [120.235058, 30.365930],
  宁波宝善路站: [121.526377, 29.865088],
  温州三垟湿地公园站: [120.719760, 27.980090],
  嘉兴凌公塘路站: [120.793264, 30.743839],
  湖州市沿圩湾站: [120.122738, 30.919458],
  绍兴市环保局站: [120.582886, 30.051549],
  金华金东区站: [119.692821, 29.099822],
  衢州西区站: [118.845207, 28.959428],
  舟山市体育路站: [122.207395, 29.985578],
  台州椒江区站: [121.442859, 28.673334],
  丽水经济开发区站: [119.905319, 28.394652],
  合肥怀宁路站: [117.222677, 31.814505],
  芜湖赭山路站: [118.375069, 31.349929],
  蚌埠胜利东路站: [117.436037, 32.925762],
  滁州清流西路站: [118.319978, 32.290049],
  宿州市人民路站: [116.964190, 33.647726],
  宣城宣州区站: [118.786098, 30.944356],
  福州市福飞北路站: [119.302604, 26.135015],
  福州连江站: [119.567120, 26.194316],
  厦门杏林南路站: [118.040642, 24.558376],
  三明麒麟公园站: [117.638919, 26.263455],
  南昌洪都北大道站: [115.922484, 28.695042],
  景德镇市景东大道站: [117.226768, 29.314158],
  九江浔阳路站: [115.988820, 29.724023],
  鹰潭月湖区站: [117.102470, 28.266999],
  赣州贺兰山路站: [114.937396, 25.823873],
  上饶滨江路站: [117.733403, 28.303822],
  济南市省辐射站: [117.120128, 36.652069],
  济南经十路站: [117.191771, 36.665679],
  济南市花园北路站: [117.685016, 36.222588],
  青岛市环保局站: [120.382665, 36.066938],
  青岛崂山区南窑站: [120.597347, 36.119820],
  青岛崂山区登瀛站: [120.574385, 36.133254],
  淄博柳泉路站: [118.050364, 36.808826],
  枣庄薛城区站: [117.263524, 34.795339],
  东营东营区站: [118.582182, 37.449035],
  烟台青年南路站: [121.360857, 37.514651],
  潍坊新华路站: [119.161721, 36.707668],
  济宁汶上县站: [116.497277, 35.711891],
  荣成市观海东路站: [122.472546, 37.153993],
  威海市环保局站: [122.120519, 37.513315],
  郑州大王庄站: [113.475630, 34.519431],
  洛阳中州东路站: [112.537047, 34.693208],
  漯河龙江路站: [114.009686, 33.611052],
  武汉市公正路站: [114.304569, 30.593354],
  黄石市苏州路站: [115.024628, 30.192728],
  宜昌胜利四路站: [111.303479, 30.686910],
  襄阳新华路站: [112.121743, 32.010161],
  长沙望城区环保局站: [112.831250, 28.353221],
  长沙万家丽中路站: [113.029717, 28.163165],
  张家界大庸路站: [110.486824, 29.111672],
  怀化怀黔路站: [109.965821, 27.504777],
  广州大道站: [115.995805, 24.029046],
  韶关武江区站: [113.587920, 24.792900],
  珠海市中山大学站: [113.576892, 22.271644],
  汕头龙湖区站: [116.716464, 23.372211],
  佛山禅城区站: [113.122532, 23.009475],
  江门蓬江区站: [113.078914, 22.595285],
  湛江开发区站: [110.404184, 21.246483],
  茂名乙烯生活区站: [110.932257, 21.652890],
  肇庆端州区站: [112.485577, 23.051847],
  惠州市红花湖站: [114.384440, 23.074537],
  梅州梅江区站: [116.116686, 24.310650],
  汕尾海滨大道站: [116.076881, 22.870847],
  河源市紫金县站: [115.183814, 23.635597],
  清远佛冈县站: [113.531559, 23.879455],
  东莞市植物园站: [113.751884, 23.021016],
  中山市横栏镇站: [113.249104, 22.534847],
  潮州凤新东路站: [116.613472, 23.675877],
  揭阳榕城区站: [116.367140, 23.525918],
  云浮云安区站: [112.002947, 23.070334],
  广西辐射站: [108.327537, 22.816659],
  柳州城中区站: [109.427398, 24.366964],
  桂林市市民广场站: [110.179330, 25.231778],
  梧州长洲区站: [111.274276, 23.486279],
  北海海城区站: [109.117256, 21.474914],
  防城港万鹤路站: [108.369379, 21.685834],
  钦州钦州学院站: [108.619579, 21.895535],
  贵港港北区站: [109.572227, 23.111360],
  玉林人民东路站: [110.181381, 22.643247],
  百色辐射站: [106.618690, 23.903070],
  贺州南环路站: [111.567216, 24.404182],
  河池金城江区站: [108.037384, 24.689475],
  来宾新桥路站: [109.221243, 23.750105],
  崇左江州区站: [107.353694, 22.406090],
  海口市白驹大道站: [110.429686, 20.006518],
  海口红旗镇站: [110.511769, 19.817365],
  三亚榆亚路站: [109.546891, 18.235184],
  三亚海棠湾青田水厂站: [109.702830, 18.270284],
  三亚海棠湾301医院站: [109.720100, 18.289702],
  三亚亚龙湾站: [109.602503, 18.302125],
  三沙市永兴岛站: [112.339573, 16.831118],
  儋州第一中学站: [109.580812, 19.520948],
  五指山阿驼岭站: [109.516784, 18.774827],
  琼海金海北路站: [110.474524, 19.259112],
  白沙邦溪镇站: [109.109731, 19.368309],
  天城大道站: [108.371506, 30.834453],
  李渡站: [107.271480, 29.746691],
  大礼堂站: [106.555873, 29.563254],
  白市驿站: [106.377554, 29.481291],
  成都市温江区花土路站: [103.880203, 30.671426],
  成都熊猫基地站: [104.144993, 30.732065],
  成都锦江区站: [104.117262, 30.598726],
  攀枝花机场路站: [101.718460, 26.582417],
  泸州纳溪区站: [105.371324, 28.772888],
  德阳泰山南路站: [104.395014, 31.118717],
  绵阳三水厂站: [104.679127, 31.467673],
  眉山眉州大道站: [103.876288, 30.073576],
  宜宾敬业路站: [104.610199, 28.789282],
  达州通川区站: [107.505053, 31.214665],
  雅安雨城区站: [103.032868, 30.005718],
  资阳雁江区站: [104.676814, 30.107778],
  甘孜康定榆林路站: [101.954999, 29.995078],
  西昌海南乡站: [102.291726, 27.807120],
  贵州省辐射环境监理站: [106.705251, 26.600328],
  贵阳青云路站: [106.710807, 26.563812],
  六盘水明湖路站: [104.826481, 26.584167],
  遵义市三贤路站: [107.031922, 27.721931],
  昆明环城西路站: [102.690323, 25.035846],
  保山九龙路站: [99.172414, 25.116224],
  景洪市民航路站: [100.779933, 21.981718],
  拉萨东嘎镇站: [91.013233, 29.644884],
  日喀则市青岛路站: [88.880423, 29.266838],
  林芝迎宾路站: [94.372869, 29.634166],
  陕西省环保大厦站: [108.886068, 34.226462],
  西安北郊污水处理厂站: [108.939645, 34.343207],
  宝鸡眉县站: [107.712342, 34.309020],
  延安市双拥大道站: [109.519883, 36.614850],
  汉中民主街站: [107.013392, 33.067877],
  兰州市金昌路站: [103.838745, 36.057085],
  兰州市东岗站: [103.925549, 36.045218],
  嘉峪关嘉北工业园站: [98.261762, 39.814809],
  金昌市公园路站: [102.188486, 38.515389],
  西宁市共和路站: [101.799896, 36.613039],
  西宁市纳家山站: [101.787707, 36.574891],
  瓦里关站: [100.888201, 36.296984],
  玉树通天河站: [97.149621, 33.106933],
  格尔木昆仑路站: [94.905722, 36.422528],
  银川市环保局西夏分局站: [106.162445, 38.503404],
  固原市污水处理厂站: [106.296107, 36.034592],
  中卫黄河站: [105.196770, 37.500185],
  乌鲁木齐长春北路站: [87.553346, 43.945001],
  乌鲁木齐北京中路站: [87.555772, 43.879236],
  克拉玛依准噶尔路站: [84.892012, 45.603363],
  哈密翰林路站: [93.515053, 42.819346],
  喀什人民东路站: [75.989746, 39.470492],
  伊犁新华西路站: [81.293607, 43.911264]
};
    var convertData = function (data) {
        var res = [];
        for (var i = 0; i < data.length; i++) {
            var geoCoord = geoCoordMap[data[i].name];
            if (geoCoord) {
                res.push({
                    name: data[i].name,
                    value: geoCoord.concat(data[i].value)
                });
            }
        }
        return res;
    };
    function renderItem(params, api) {
        var coords = [
            // [116.7, 39.53],
            // [103.73, 36.03],
            // [112.91, 27.87],
            // [120.65, 28.01],
            // [119.57, 39.95]
        ];
        var points = [];
        for (var i = 0; i < coords.length; i++) {
            points.push(api.coord(coords[i]));
        }
        var color = api.visual('color');
        return {
            type: 'polygon',
            shape: {
                points: echarts.graphic.clipPointsByRect(points, {
                    x: params.coordSys.x,
                    y: params.coordSys.y,
                    width: params.coordSys.width,
                    height: params.coordSys.height
                })
            },
            style: api.style({
                fill: color,
                stroke: echarts.color.lift(color)
            })
        };
    }
    option = {
        backgroundColor: 'transparent',
        title: {
            text: '全国辐射环境质量监测自动站空气吸收剂量率监测结果',
            subtext: 'data from rmtc.org.cn',
            sublink: 'https://www.rmtc.org.cn/',
            left: 'center',
            textStyle: {
                color: '#fff'
            }
        },
        tooltip: {
            trigger: 'item'
        },
        bmap: {
            // center: [104.114129, 37.550339],
            center: [119, 27],
            zoom: 5,
            roam: true,
            mapStyle: {
                styleJson: [
                    {
                        featureType: 'water',
                        elementType: 'all',
                        stylers: {
                            color: '#044161'
                        }
                    },
                    {
                        featureType: 'land',
                        elementType: 'all',
                        stylers: {
                            color: '#004981'
                        }
                    },
                    {
                        featureType: 'boundary',
                        elementType: 'geometry',
                        stylers: {
                            color: '#064f85'
                        }
                    },
                    {
                        featureType: 'railway',
                        elementType: 'all',
                        stylers: {
                            visibility: 'off'
                        }
                    },
                    {
                        featureType: 'highway',
                        elementType: 'geometry',
                        stylers: {
                            color: '#004981'
                        }
                    },
                    {
                        featureType: 'highway',
                        elementType: 'geometry.fill',
                        stylers: {
                            color: '#005b96',
                            lightness: 1
                        }
                    },
                    {
                        featureType: 'highway',
                        elementType: 'labels',
                        stylers: {
                            visibility: 'off'
                        }
                    },
                    {
                        featureType: 'arterial',
                        elementType: 'geometry',
                        stylers: {
                            color: '#004981'
                        }
                    },
                    {
                        featureType: 'arterial',
                        elementType: 'geometry.fill',
                        stylers: {
                            color: '#00508b'
                        }
                    },
                    {
                        featureType: 'poi',
                        elementType: 'all',
                        stylers: {
                            visibility: 'off'
                        }
                    },
                    {
                        featureType: 'green',
                        elementType: 'all',
                        stylers: {
                            color: '#056197',
                            visibility: 'off'
                        }
                    },
                    {
                        featureType: 'subway',
                        elementType: 'all',
                        stylers: {
                            visibility: 'off'
                        }
                    },
                    {
                        featureType: 'manmade',
                        elementType: 'all',
                        stylers: {
                            visibility: 'off'
                        }
                    },
                    {
                        featureType: 'local',
                        elementType: 'all',
                        stylers: {
                            visibility: 'off'
                        }
                    },
                    {
                        featureType: 'arterial',
                        elementType: 'labels',
                        stylers: {
                            visibility: 'off'
                        }
                    },
                    {
                        featureType: 'boundary',
                        elementType: 'geometry.fill',
                        stylers: {
                            color: '#029fd4'
                        }
                    },
                    {
                        featureType: 'building',
                        elementType: 'all',
                        stylers: {
                            color: '#1a5787'
                        }
                    },
                    {
                        featureType: 'label',
                        elementType: 'all',
                        stylers: {
                            visibility: 'off'
                        }
                    }
                ]
            }
        },
        series: [
            {
                name: '空气吸收剂量率月均值',
                type: 'scatter',
                coordinateSystem: 'bmap',
                data: convertData(data),
                encode: {
                    value: 2
                },
                symbolSize: function (val) {
                    return val[2] / 10;
                },
                label: {
                    formatter: '{b}',
                    position: 'right'
                },
                itemStyle: {
                    color: '#ddb926'
                },
                emphasis: {
                    label: {
                        show: true
                    }
                }
            },
            {
                name: 'Top 5',
                type: 'effectScatter',
                coordinateSystem: 'bmap',
                data: convertData(
                    data
                        .sort(function (a, b) {
                            return b.value - a.value;
                        })
                        .slice(0, 6)
                ),
                encode: {
                    value: 2
                },
                symbolSize: function (val) {
                    return val[2] / 10;
                },
                showEffectOn: 'emphasis',
                rippleEffect: {
                    brushType: 'stroke'
                },
                hoverAnimation: true,
                label: {
                    formatter: '{b}',
                    position: 'right',
                    show: true
                },
                itemStyle: {
                    color: '#f4e925',
                    shadowBlur: 10,
                    shadowColor: '#333'
                },
                zlevel: 1
            },
            {
                type: 'custom',
                coordinateSystem: 'bmap',
                renderItem: renderItem,
                itemStyle: {
                    opacity: 0.5
                },
                animation: false,
                silent: true,
                data: [0],
                z: -10
            }
        ]
    };

    option && myChart.setOption(option);

                
    </script>

