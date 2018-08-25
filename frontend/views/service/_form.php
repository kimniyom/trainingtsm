<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker;

/*
  use yii\jui\DatePicker;
 */
/* @var $this yii\web\View */
/* @var $model app\models\Service */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="service-form">

    <?php $form = ActiveForm::begin(); ?>


    <?= $form->field($model, 'pcu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hn')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lname')->textInput(['maxlength' => true]) ?>

    <?php //$form->field($model, 'datesetvice')->textInput() ?>
    <?=
    $form->field($model, 'datesetvice')->widget(
            DatePicker::className(), [
        // inline too, not bad
        //'inline' => true,
        //'type' => DatePicker::TYPE_COMPONENT_PREPEND,
        // modify template for custom rendering
        //'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
        'language' => 'th',
        'clientOptions' => [
            'autoclose' => true,
            'format' => 'yyyy-mm-dd'
        ]
    ]);
    /*
      'name' => 'dp_2',
      'type' => DatePicker::TYPE_COMPONENT_PREPEND,
      'value' => '23-Feb-1982',
      'pluginOptions' => [
      'autoclose'=>true,
      'format' => 'dd-M-yyyy'
      ]
     * 
     */
    ?>



    <?= $form->field($model, 'etc')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'status')->radioList(["1" => ' ปลดล็อค', "2" => "รอแก้ไข", '3' => 'lock', '4' => 'success']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
