<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use backend\models\Sysgroupreport;

/* @var $this yii\web\View */
/* @var $model app\models\Sysreport */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sysreport-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'reportname')->textInput(['maxlength' => true]) ?>

    <?php
    echo $form->field($model, 'groupid')->widget(Select2::classname(), [
        'data' => ArrayHelper::map(Sysgroupreport::find()->all(), 'id', 'groupname'),
        //'language' => 'th',
        'options' => ['placeholder' => 'กลุ่มรายงาน ...'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]);
    ?>
    <?= $form->field($model, 'sql')->textarea(['rows' => 10]) ?>
    <?= $form->field($model, 'rowsum')->radioList(['0' => 'ไม่แสดง', '1' => 'แสดง']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
