<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Sysreport */

$this->title = 'Create Sysreport';
$this->params['breadcrumbs'][] = ['label' => 'Sysreports', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sysreport-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
