<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SysreportSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Sysreports';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sysreport-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Sysreport', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'reportname',
            'sql:ntext',
            'groupid',
            'userid',
            //'createdate',
            //'lastupdate',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
