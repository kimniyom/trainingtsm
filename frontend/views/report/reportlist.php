<?php
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
use yii\helpers\Url;

$this->title = 'รายงาน';
$this->params['breadcrumbs'][] = $this->title;
?>

<h4>กลุ่มรายงาน(<?php echo $group['groupname'] ?>)</h4>
<div class="list-group">
    <?php
    $i = 0;
    foreach ($report as $rs): $i++;
        ?>
        <a href="<?php echo Url::to(['report/index', 'reportID' => $rs['id']]) ?>" class="list-group-item"><?php echo $i ?>. <?php echo $rs['reportname'] ?></a>
    <?php endforeach; ?>
</div>
ทั้งหมด <?php echo $i ?> รายการ

