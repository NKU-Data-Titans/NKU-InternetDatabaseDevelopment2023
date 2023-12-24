<?php
/**
 * Team: NKU Data Titans
 * Coding by 周钰宸 2111408, 20231213
 * 获取JSON数据
 */
header('Content-Type:application/json; charset=utf-8');

$result = Yii::$app->db->createCommand('SELECT * FROM detection')
            ->queryAll();
$data="";
$array= array();
class Detection{
    public $date;
    public $rcount;
    public $ucount;
}

foreach($result as $row){
    $detection=new Detection();
    $detection->date = $row['deplace'];
    $detection->rcount = $row['dejingwei'];
    $detection->ucount = $row['deaverage'];
    $array[]=$detection;
}

$data=json_encode($array);
exit($data);
?>