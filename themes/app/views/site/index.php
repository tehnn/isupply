<?php
$this->breadcrumbs = array(
    'รายการเบิกของ',
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

    <div class="panel panel-primary">
        <div class="list-group">
            <a href="#" class="list-group-item active">               
                <i class="glyphicon glyphicon-cog"></i>
                เครื่องมือ     

            </a>
            <a href="#" class="list-group-item">
                <i class="glyphicon glyphicon-search"></i>
                ค้นหารายรายการ

            </a>

        </div>
    </div>

</div>


</div>

<div class="col-sm-9">


    <div class="panel panel-primary">
        <div class="panel-heading">

            <h3 class="panel-title">

                <i class="glyphicon glyphicon-pencil"></i>
                รายการใบเบิกของ
                <a href='#collapse_1' data-toggle="collapse" data-target="#collapse_1" class="a-toggle">                    
                </a>
            </h3>

        </div>
        <div id="collapse_1" class="panel-collapse collapse in">
            <div class="panel-body">
                <div>
                    ส่งใบเบิกของจากหน่วยงานต่างๆ
                </div>

                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>หน่วยงาน</th>
                            <th>วัน-เวลา</th>
                            <th>เลขที่ใบเบิก</th>
                            <th>จำนวน(หน่วย)</th>
                            <th>#</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>ตึกผู้ป่วยใน</td>
                            <td>2014-07-10 (12:00)</td>
                            <td><a href='#'>B12</a></td>
                            <td><span class="badge">12</span></td>
                            <td>
                                <a href="#" class="btn btn-default btn-danger">
                                    <i class="glyphicon glyphicon-remove">                                  
                                    </i>
                                </a>
                                <a href="#" class="btn btn-default btn-success">
                                    <i class="glyphicon glyphicon-ok"></i>
                                </a>                            
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>ห้องชันสูตร</td>
                            <td>2014-07-10 (11:10)</td>
                            <td><a href='#'>B11</a></td>
                            <td><span class="badge">2</span></td>
                            <td>
                                <a href="#" class="btn btn-default btn-danger">
                                    <i class="glyphicon glyphicon-remove">                                  
                                    </i>
                                </a>
                                <a href="#" class="btn btn-default btn-success">
                                    <i class="glyphicon glyphicon-ok"></i>
                                </a>                            
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>ตึกอุบัติเหตุ-ฉุกเฉิน</td>
                            <td>2014-07-10 (09:00)</td>
                            <td><a href='#'>B10</a></td>
                            <td><span class="badge">12</span></td>
                            <td>
                                <a href="#" class="btn btn-default btn-danger">
                                    <i class="glyphicon glyphicon-remove">                                  
                                    </i>
                                </a>
                                <a href="#" class="btn btn-default btn-success">
                                    <i class="glyphicon glyphicon-ok"></i>
                                </a>                            
                            </td>
                        </tr>

                    </tbody>
                </table>

            </div>
        </div>
    </div>



    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title">
                <i class="glyphicon glyphicon-paperclip"></i>
                รับใบเบิกของ
                <a href='#collapse_2' data-toggle="collapse" data-target="#collapse_2" class="a-toggle">                    
                </a>
            </h3>
        </div>
        <div id="collapse_2" class="panel-collapse collapse in">
            <div class="panel-body">
                <div>
                    สถานะการรับใบเบิกของ
                </div>

                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>เลขที่ใบเบิก</th>
                            <th>จากหน่วยงาน</th>                        
                            <th>วัน-เวลา รับ</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td><a href='#'>B09</a></td>
                            <td>ห้องคลอด</td>
                            <td>2014-07-09 (13:00)</td>

                        </tr>

                    </tbody>
                </table>

            </div>
        </div>
    </div>




</div>

