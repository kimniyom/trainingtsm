<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'รายงาน';
$this->params['breadcrumbs'][] = $this->title;
?>

<h4>กลุ่มรายงาน</h4>
<div class="row">
    <?php foreach($group as $rs): ?>
    <div class="col-col-md-3 col-lg-3 col-sm-6 col-xs-12">
        
        <?php echo $rs['groupname'] ?>
    </div>
    <?php endforeach;?>
</div>
