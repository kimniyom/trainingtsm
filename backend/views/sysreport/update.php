<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Sysreport */

$this->title = 'Update Sysreport: ' . $model->reportname;
$this->params['breadcrumbs'][] = ['label' => 'รายงาน', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->reportname, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="sysreport-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
