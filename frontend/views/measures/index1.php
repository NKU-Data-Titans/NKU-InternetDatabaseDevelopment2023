<?php
/**
 * Team: NKU Data Titans
 * Coding by 纪潇洋 2110611, 20231210
 * 战损图表
 */
use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\widgets\ActiveForm;

$this->title = '武器装备战损';
$this->params['breadcrumbs'][] = $this->title;
?>

<h2 data-text="MEASURE" class="measures-title">MEASURES</h2>
<div id="measures-container" class="measures-container"></div>
<script src="https://cdn.bootcss.com/echarts/3.5.4/echarts.js"></script>
<!-- 为ECharts准备一个具备大小（宽高）的Dom --> 
<script>
    // 初始化两个数组，盛装从数据库中获取到的数据
    var dates = [], dmgTank = [],dmgUAV=[],dmgCar=[],dmgTankAll=[],dmgUAVAll=[],dmgCarAll=[];
    //调用ajax来实现异步的加载数据
    function getusers() {
        var pathName = window.location.href
        var DirName = pathName == '' ? '' : pathName.substring(0, pathName.lastIndexOf('/')); 
        $.ajax({
            type: "GET",//使用POST会出现多余的数据，导致无法解析
            async: false,
            url:DirName+'/echart',
            data: {},
            dataType: "json",
            success: function(result){
                if(result){
                   for(var i = 0 ; i < result.length; i++){
                        dates.push(result[i].date);
                        dmgTank.push(result[i].tank);
                        dmgUAV.push(result[i].UAV);
                        dmgCar.push(result[i].car);    
                        dmgTankAll.push(result[i].tankAll);
                        dmgUAVAll.push(result[i].UAVAll);
                        dmgCarAll.push(result[i].carAll);    
                    }
                }
            },
            error: function(errmsg) {
                console.log("Ajax获取服务器数据出错了！"+ errmsg);
            }
        });
        return dates, dmgTank,dmgUAV,dmgCar,dmgTankAll,dmgUAVAll,dmgCarAll;
    }
    // 执行异步请求
    getusers();

    // 初始化 图表对象
    var mychart = echarts.init(document.getElementById("measures-container"));
    // 进行相关项的设置，也就是所谓的搭搭骨架，方便待会的ajax异步的数据填充
    var option = {
        title : {
            text : '武器受损统计',
            textStyle:{
                color:"#B4B4B4",
                fontSize:'30'
            },
            left:'center',
            top:0,
        },
        tooltip : {
            show : true
        },
        legend : {
            data : [ '坦克','无人机','装甲车' ],
            textStyle:{
                color:"#B4B4B4",
                fontSize:'15'
            },
            top:36,
        },
        xAxis : [ {
            data : dates,
            name:'日期',
            nameTextStyle:{
                fontFamily:'微软雅黑',
                color:"#fff",
                fontSize:'25'
            },
            nameGap:35,
            nameLocation:"middle",
            axisLabel:{
                textStyle:{
                    show:true,
                    fontFamily:'微软雅黑',
                    color:"#fff",
                    fontSize:'25'
                }
            },
            axisLine:{
                lineStyle:{
                    color:'#fff',
                }
            },
            padding:[]
        } ],
        yAxis : [ {
            type : 'value',
            name:'单日武器损毁',
            nameTextStyle:{
                show:true,
                    fontFamily:'微软雅黑',
                    color:"#fff",
                    fontSize:'25'
            },
            axisLabel:{
                textStyle:{
                    show:true,
                    fontFamily:'微软雅黑',
                    color:"#fff",
                    fontSize:'25'
                }
            }
        },{
            type : 'value',
            name:'累计武器损毁',
            nameTextStyle:{
                show:true,
                    fontFamily:'微软雅黑',
                    color:"#fff",
                    fontSize:'25'
            },
            axisLabel:{
                textStyle:{
                    fontFamily:'微软雅黑',
                    color:"#fff",
                    fontSize:'25'
                }
            },
            axisLine:{
                show:false
            },
            splitLine:{
                show:false,
            },
            axisTick:{
                show:false
            },
        } ],
        series : [ {
            "name" : "坦克",
            type : 'bar',
            "data" : this.dmgTank,
            barWidth:'15%',
        } ,{
            "name" : "无人机",
            type : 'bar',
            "data" : this.dmgUAV,
            barWidth:'15%'
        } ,{
            "name" : "装甲车",
            type : 'bar',
            "data" : this.dmgCar,
            barWidth:'15%'
        } , {
            "name" : "坦克",
            type : 'line',
            "data" : this.dmgTankAll,
            yAxisIndex:1,
        } ,{
            "name" : "无人机",
            type : 'line',
            "data" : this.dmgUAVAll,
            yAxisIndex:1,
        } ,{
            "name" : "装甲车",
            type : 'line',
            "data" : this.dmgCarAll,
            yAxisIndex:1,
        } ]
    };
    // 将配置项赋给chart对象，来显示相关的数据
    mychart.setOption(option);
</script>
