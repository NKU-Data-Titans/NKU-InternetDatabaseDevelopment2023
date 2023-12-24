<?php
/**
 * Team: NKU Data Titans
 * Coding by 纪潇洋 2110611, 20231210
 * 获取查询json数据
 */
header("Content-type=text/json;charset=UTF-8");
$result = Yii::$app->db->createCommand('SELECT * FROM measures')
            ->queryAll();
$data="";
$array= array();
class Measures{
    public $date;
    public $tank;
    public $tankAll;
    public $UAV;
    public $UAVAll;
    public $car;
    public $carAll;
}

foreach($result as $row){
    $measures=new Measures();
    $measures->date = $row['mname'];
    $measures->tank = $row['mdescription'];
    // $damage->tankAll=$row['dtankAll'];
    // $damage->UAV=$row['dUAV'];
    // $damage->UAVAll=$row['dUAVAll'];
    // $damage->car=$row['dcar'];
    // $damage->carAll=$row['dcarAll'];
    $array[]=$measures;
}

$data=json_encode($array);
exit($data);
?>