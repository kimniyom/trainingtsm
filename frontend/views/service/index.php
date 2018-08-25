<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ServiceSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Services';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="service-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Service', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'pcu',
            'hn',
            'name',
            'lname',
            'datesetvice',
            //'etc:ntext',
            //'status',
            [
                'label' => 'สถานะ',
                'format' => 'raw',
                'value' => function($data){
                    if($data->status == "1"){
                        $status = "ปลดล็อค";
                    } else if($data->status == "2"){
                        $status = "รอแก้ไข";
                    } else if($data->status == "3"){
                        $status = "lock";
                    } else if($data->status == "4"){
                        $status = "success";
                    }
                    return $status;
                }
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
