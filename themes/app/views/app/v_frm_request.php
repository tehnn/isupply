<?php
$basedir = Yii::app()->theme->baseUrl;
$cs = Yii::app()->getClientScript();
$cs->registerScriptFile($basedir . '/js/form.js', CClientScript::POS_BEGIN);
?>

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

                <i class="glyphicon glyphicon-plus-sign"></i>
                ใบเบิกของ
                <a href='#' data-toggle="collapse" data-target="#collapse_1" class="a-toggle">                    
                </a>
            </h3>

        </div>
        <div id="collapse_1" class="panel-collapse collapse in">
            <div class="panel-body">

                <form method="post">
                    <div class="row">
                        <div class="col-md-12">
                            <div style="border-bottom:1px solid gainsboro;">
                                <font size="5">บันทึกข้อมูลการเบิก</font>
                            </div>
                        </div>
                    </div>
                    <p>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="control-label" for="date1">
                                    วันที่
                                </label>
                                <div class="input-group">
                                    <?php
                                    $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                                        'name' => 'date1',
                                        'options' => array(
                                            'dateFormat' => 'yy-mm-dd',
                                        //'showAnim' => 'fold', //'slide','fold','slideDown','fadeIn','blind','bounce','clip','drop'
                                        ),
                                        'htmlOptions' => array(
                                            'style' => '',
                                            'class' => 'form-control'
                                        ),
                                    ));
                                    ?>
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                </div>

                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label" for="cb_depart">
                                    หน่วยงานขอเบิก
                                </label>
                                <select name="cb_depart" id="cb_depart" class="form-control">
                                    <option >01-แผนกผู้ป่วยใน</option>
                                    <option >งานอุบัติเหตุ-ฉุกเฉิน</option>           
                                </select>
                            </div>
                        </div>

                        <div class="col-md-5">
                            <div class="form-group">
                                <label class="control-label" for="name1">
                                    ชื่อ - สกุล ผู้เบิก
                                </label>
                                <input  class="form-control" type="text" id="name1" >
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div style="border-bottom:1px solid gainsboro;">

                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-4">
                            <label class="control-label" for="item_name">
                                รายการขอเบิก
                            </label>

                            <?php
                            echo CHtml::dropDownList('item_name', $select, array('สายสวนปัสสาวะ' => 'สายสวนปัสสาวะ', 'เซตทำแผล' => 'เซตทำแผล', 'ถุงมือ' => 'ถุงมือ'), array('class' => 'form-control')
                            );
                            ?>


                        </div>
                        <div class="col-sm-2">
                            <label class="control-label" for="item_amount">
                                จำนวน (หน่วย)
                            </label>
                            <input  class="form-control" type="number" id="item_amount" >
                        </div>
                        <div class="col-sm-3"><br>
                            <a class="btn btn-success" href="#" onclick="AjxAddItems($('#item_name').val(), $('#item_amount').val())">
                                <span class="glyphicon glyphicon-plus"></span> เพิมรายการ
                            </a>
                        </div>
                    </div>



                </form>



            </div>
        </div>
    </div>



    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title">
                <i class="glyphicon glyphicon-list-alt"></i>
                รายการเบิก
                <a href='#' data-toggle="collapse" data-target="#collapse_2" class="a-toggle">                    
                </a>
            </h3>
        </div>
        <div id="collapse_2" class="panel-collapse collapse in">
            <div class="panel-body">

                <div class="row">
                    <dic class="col-md-12">
                        <table class="table table-hover table-striped" id="myTable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>รายการ</th>
                                    <th>จำนวน (หน่วย)</th>
                                    <th>#</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </dic>
                </div>



                <div class="row">
                    <div class="form-group">
                        <div class="pull-left" style="padding-left:  12px;padding-top: 5px">

                            <button type="submit" class="btn btn-primary ">
                                <i class="glyphicon glyphicon-plus-sign"></i> ส่งใบเบิก
                            </button>
                            <button type="button" class="btn btn-danger ">
                                <i class="glyphicon glyphicon-remove-circle"></i> ยกเลิก
                            </button>

                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

</div>


