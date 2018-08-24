<?php

use yii\helpers\Html;
use yii\grid\GridView;
use backend\models\Sysgroupreport;
use dektrium\user\models\User;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SysreportSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'รายงาน';
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

            //'id',
            'reportname',
            'sql:ntext',
             [
              'label' => 'กลุ่ม',
                'format' => 'raw',
                'value' => function($data){
                    return Sysgroupreport::findOne(['id=:id',':id' => $data['groupid']])['groupname'];
                }
            ],
            [
              'label' => 'ผู้บันทึก',
                'format' => 'raw',
                'value' => function($data){
                    return User::findOne(['id=:id',':id' => $data['userid']])['username'];
                }
            ],
            //'createdate',
            //'lastupdate',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
