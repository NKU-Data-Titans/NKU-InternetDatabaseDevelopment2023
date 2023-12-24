<!--
   Team: NKU Data Titans
   Coding by 周钰宸 2111408
   轮播图
 -->
<div class="lunbo">
   <div class="lb-content">
   <ul id="lb-item">
   <li class="lb-item">
    <a href="#"><img class="lb-img" src=<?= $data[0]['wimg']?> >
    <div>
        <div class="header">
            <span class="name"><?=$data[0]['wname']?></span>
            <span class="country"><?=$data[0]['wcountry']?></span>
        </div>
    </a>
        <div class="description"><?=$data[0]['wdescription']?></div>
    </div>    
    </li>
    <li class="lb-item">
    <a href="#"><img class="lb-img" src=<?= $data[1]['wimg']?> >
    <div>
        <div class="header">
            <span class="name"><?=$data[1]['wname']?></span>
            <span class="country"><?=$data[1]['wcountry']?></span>
        </div>
    </a>
        <div class="description"><?=$data[1]['wdescription']?></div>
    </div>    
    </li>
    <li class="lb-item">
    <a href="#"><img class="lb-img" src=<?= $data[2]['wimg']?> >
    <div>
        <div class="header">
            <span class="name"><?=$data[2]['wname']?></span>
            <span class="country"><?=$data[2]['wcountry']?></span>
        </div>
    </a>
        <div class="description"><?=$data[2]['wdescription']?></div>
    </div>    
    </li>
    <li class="lb-item">
    <a href="#"><img class="lb-img" src=<?= $data[3]['wimg']?> >
    <div>
        <div class="header">
            <span class="name"><?=$data[3]['wname']?></span>
            <span class="country"><?=$data[3]['wcountry']?></span>
        </div>
    </a>
        <div class="description"><?=$data[3]['wdescription']?></div>
    </div>    
    </li>
    <li class="lb-item">
    <a href="#"><img class="lb-img" src=<?= $data[4]['wimg']?> >
    <div>
        <div class="header">
            <span class="name"><?=$data[4]['wname']?></span>
            <span class="country"><?=$data[4]['wcountry']?></span>
        </div>
    </a>
        <div class="description"><?=$data[4]['wdescription']?></div>
    </div>    
    </li>
   </ul>
   <div id="btn-left"><</div>
   <div id="btn-right">></div>
   <ul id="circle">
     
    <li class="circle"></li>
    <li class="circle"></li>
    <li class="circle"></li>
    <li class="circle"></li>
    <li class="circle"></li>
   </ul>
   </div>
</div>
