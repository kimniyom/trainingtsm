
<?php
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
use yii\helpers\Url;

$this->title = $report['reportname'];
$this->params['breadcrumbs'][] = ['label' => $group['groupname'], 'url' => ['report/reportlist', 'group' => $report['groupid']]];
$this->params['breadcrumbs'][] = $this->title;
$years = date("Y");
if (!empty($year)) {
    $yearactive = $year;
} else {
    $yearactive = $years;
}
?>
<style type="text/css">
    #reports thead tr th{
        text-align: center;
    }
    #reports tbody tr td{
        text-align: right;
    }
    #reports tfoot tr td{
        text-align: right;
        font-weight: bold;
    }
    .row{
        margin-bottom: 10px;
    }
</style>

<h4>รายงาน(<?php echo $this->title ?>)</h4>
<hr/>
<div class="row">
    <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
        <label>ปี พ.ศ.</label>
        <select id="year" class="form-control">
            <?php for ($i = $years; $i >= ($years - 2); $i--): ?>
                <option value="<?php echo $i ?>" <?php echo ($yearactive == $i) ? "selected" : "";?>><?php echo $i ?></option>
            <?php endfor; ?>
        </select>
    </div>
</div>
<div class="row">
    <div class="col-md-12 col-lg-12">
        <button type="button" class="btn btn-default" onclick="sendparam()"><i class="glyphicon glyphicon-ok"></i> ตกลง</button>
    </div>
</div>
<hr/>

<?php echo $table ?>

<?php
$this->registerJs('
        $(document).ready(function(){
            $("#reports").dataTable({
                "searching": false,
                dom: "Bfrtip",
                buttons: [
                    "copyHtml5",
                    "excelHtml5",
                    "csvHtml5",
                    "pdfHtml5",
                    "pageLength"
                ],
                lengthMenu: [
                    [ 10, 25, 50, -1 ],
                    [ "10 rows", "25 rows", "50 rows", "Show all" ]
                ]
            });
        });
            ');
?>

<script type="text/javascript">
    function sendparam(){
        var year = $("#year").val();
        var url = "<?php echo Url::to(['report/index','reportID' => $report['id']]) ?>" + "&year=" + year;
        window.location=url;
    }
</script>

