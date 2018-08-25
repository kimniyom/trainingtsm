<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Service */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Services', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="service-view">

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
            'pcu',
            'hn',
            'name',
            'lname',
            'datesetvice',
            'etc:ntext',
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
        ],
    ]) ?>

</div>
