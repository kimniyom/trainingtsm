<?php
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
use yii\helpers\Url;

$this->title = $report['reportname'];
$this->params['breadcrumbs'][] = $this->title;
?>

<h4>รายงาน(<?php echo $this->title ?>)</h4>

<?php echo $table ?>

<?php 
    $this->registerJs('
        $(document).ready(function(){
            $("#reports).dataTable();
        });
            ');
?>

