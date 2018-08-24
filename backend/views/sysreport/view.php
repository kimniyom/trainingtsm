<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use backend\models\Sysgroupreport;
use dektrium\user\models\User;
/* @var $this yii\web\View */
/* @var $model app\models\Sysreport */

$this->title = $model->reportname;
$this->params['breadcrumbs'][] = ['label' => 'Sysreports', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sysreport-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id',
            'reportname',
            'sql:ntext',
            //'groupid',
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
            'createdate',
            'lastupdate',
        ],
    ]) ?>

</div>
