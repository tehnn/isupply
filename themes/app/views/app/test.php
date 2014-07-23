
<div class="date-form">

    <div class="form-horizontal">
        <div class="control-group">

            <div class="controls">
                <br>
                <?php
                $this->widget('booster.widgets.TbDatePicker', array(
                    'name' => 'some_date',
                    'htmlOptions' => array('class' => 'col-md-3'),
                ));
                ?>
            </div>
        </div>

    </div>