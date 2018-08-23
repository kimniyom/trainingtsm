<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Sysgroupreport */

$this->title = 'Create Sysgroupreport';
$this->params['breadcrumbs'][] = ['label' => 'Sysgroupreports', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sysgroupreport-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
