<?php
$this->breadcrumbs = array(
    'รายการประวัติ',
);
?>
<div class="col-sm-3">

    <div class="panel panel-primary">
        <div class="list-group">
            <a href="#" class="list-group-item active">               
                <i class="glyphicon glyphicon-list"></i>
                เมนูหลัก              
            </a>
            <a href="#" class="list-group-item">
                <i class="glyphicon glyphicon-briefcase"></i>
                ประเภทวัสดุ  <span class="badge">42</span>
            </a>
            <a href="#" class="list-group-item">
                <i class="glyphicon glyphicon-check"></i>
                หน่วยงาน<span class="badge">10</span>
            </a>
            <a href="#" class="list-group-item">
                <i class="glyphicon glyphicon-list-alt"></i>
                รายงาน/สถิติ
            </a>
        </div>
    </div>

    <div class="list-group">
        <a href="#" class="list-group-item active">
            <i class="glyphicon glyphicon-th-list"></i>
            Cras justo odio
        </a>
        <a href="#" class="list-group-item">Dapibus ac facilisis in</a>
        <a href="#" class="list-group-item">Morbi leo risus</a>
        <a href="#" class="list-group-item">Porta ac consectetur ac</a>
        <a href="#" class="list-group-item">Vestibulum at eros</a>
    </div>


</div>

<div class="col-sm-9">

    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title">
                <i class="glyphicon glyphicon-map-marker"></i>
                ร้อยละสถานบริการส่งข้อมูลทันเวลาในเดือนที่ผ่านมา
            </h3>
        </div>
        <div class="panel-body">
            <?php
            $this->widget(
                    'booster.widgets.TbHighCharts', array(
                'options' => array(
                    'series' => array(
                        [
                            'data' => [1, 2, 3, 4, 5, 1, 2, 1, 4, 3, 1, 5]
                        ]
                    )
                )
                    )
            );
            ?>
        </div>
    </div>


</div>
