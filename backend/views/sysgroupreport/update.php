<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Sysgroupreport */

$this->title = 'Update Sysgroupreport: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Sysgroupreports', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="sysgroupreport-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
