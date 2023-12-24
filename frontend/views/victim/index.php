<?php
/**
 * Team: NKU Data Titans
 * Coding by 周钰宸 2111408, 20231213
 * 伤亡折线图
 */

use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\widgets\ActiveForm;

$this->title = '伤亡';
$this->params['breadcrumbs'][] = $this->title;
?>

<h2 data-text="VICTIM" class="victim-title">VICTIM</h2>
<div id="victim-container" class="victim-container"></div>
    <!-- 引入 echarts.js -->
    <script src="https://cdn.bootcdn.net/ajax/libs/echarts/5.4.3/echarts.js"></script>
    <!-- 引入 百度地图JS API 脚本 -->
    <script type="text/javascript" src="https://api.map.baidu.com/api?v=3.0&ak=jfhHvq8ay3DPZyO6WgREMZFAuwGjAdBy"></script>

    <!-- 引入 百度地图扩展 -->
    <script src="https://cdn.bootcdn.net/ajax/libs/echarts/5.4.3/extension/bmap.js"></script>

    <script>
   var chartDom = document.getElementById('victim-container');
    var myChart = echarts.init(chartDom);
    var option;

    var data = [
        { name: '奥林匹克森林公园站', value: 75.4 },
        { name: '万柳中路站', value: 90.0 },
        { name: '门头沟西苑路站', value: 64.9 },
        { name: '昌平昌赤路站', value: 72.2 },
        { name: '亦庄博大公园站', value: 73.7 },
        { name: '平谷赵赵路站', value: 57.2 },
        { name: '延庆夏都公园站', value: 68.6 },
        { name: '南开复康路站', value: 71.2 },
        { name: '津南咸水沽小学站', value: 70.6 },
        { name: '北辰西平道站', value: 59.5 },
        { name: '天津武清安监局站', value: 69.7 },
        { name: '宝坻建设路站', value: 63.1 },
        { name: '滨海新区世纪大道站', value: 63.1 },
        { name: '天津滨海新区监测中心站', value: 73.0 },
        { name: '天津宁河环保局站', value: 66.9 },
        { name: '天津市静海区西钓台站', value: 68.7 },
        { name: '天津蓟州北六里屯站', value: 64.2 },
        { name: '石家庄市省辐射站', value: 92.0 },
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
        { name: '沈阳市东陵站', value: 68.0 },
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
        { name: '集安市活龙村站', value: 87.4 }
    ];
    var geoCoordMap = {
        奥林匹克森林公园站: [116.392159, 40.018635],
        万柳中路站: [116.296976, 39.968225],
        门头沟西苑路站: [116.13759, 39.907227],
        昌平昌赤路站: [116.222678, 40.466851],
        亦庄博大公园站: [116.503292, 39.796373],
        平谷赵赵路站: [117.084852, 40.132114],
        延庆夏都公园站: [115.97762, 40.454152],
        南开复康路站: [117.141275, 39.099004],
        津南咸水沽小学站: [117.386494, 38.9832],
        北辰西平道站: [117.081338, 39.23043],
        天津武清安监局站: [117.04456, 39.384108],
        宝坻建设路站: [117.309748, 39.717054],
        滨海新区世纪大道站: [117.544314, 38.877244],
        天津滨海新区监测中心站: [117.704273, 38.994016],
        天津宁河环保局站: [117.826674, 39.329749],
        天津市静海区西钓台站: [116.937187, 38.938952],
        天津蓟州北六里屯站: [117.395323, 40.012027],
        石家庄市省辐射站: [114.514976, 38.042007],
        石家庄槐岭路站: [114.538315, 38.025152],
        唐山路北区站: [118.201085, 39.625079],
        秦皇岛秦皇东大街站: [119.60477, 39.948179],
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
        临汾市开发区西大街站: [111.50708, 36.10893],
        内蒙古环境监测中心站: [111.638141, 40.802957],
        呼和浩特市环境监测站: [111.748814, 40.842127],
        包头市乌兰计站: [109.628384, 40.633695],
        包头市标准站: [109.95315, 40.621327],
        通辽市环境监测站: [122.243309, 43.653566],
        呼伦贝尔市扎兰屯路站: [119.766374, 49.227379],
        沈阳市东陵站: [123.59108, 41.85179],
        大连市旅顺口区站: [121.261982, 38.851742],
        大连市庄河站: [122.95357, 39.704433],
        鞍山铁西区站: [122.969531, 41.119719],
        抚顺市新宾站: [125.039994, 41.734031],
        本溪市桓仁站: [125.361061, 41.267048],
        丹东市振兴区站: [124.383382, 40.129706],
        丹东市东港站: [124.152581, 39.863193],
        丹东市凤城站: [124.066873, 40.45218],
        锦州松山新区站: [121.150372, 41.028553],
        营口市鲅鱼圈站: [122.094481, 40.188026],
        阜新细河区站: [121.680157, 42.025412],
        盘锦双台子区站: [122.07597, 41.212401],
        铁岭凡河新区站: [123.734223, 42.23377],
        朝阳双塔区站: [120.453717, 41.565814],
        葫芦岛市龙港站: [120.98832, 40.720991],
        长春卫星路站: [125.341138, 43.833271],
        长春青年路站: [125.323643, 43.816996],
        吉林丰满区站: [126.561351, 43.821192],
        四平铁西区站: [124.345994, 43.146288],
        集安市活龙村站: [126.193172, 41.125805]
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
            text: '全国主要城市空气质量',
            subtext: 'data from PM25.in',
            sublink: 'http://www.pm25.in',
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
            center: [121,18],
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
                name: 'pm2.5',
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

