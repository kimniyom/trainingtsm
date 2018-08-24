<?php

namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use backend\models\Sysreport;
use backend\models\Sysgroupreport;

/**
 * Site controller
 */
class ReportController extends Controller {

    public function actionIndex($reportID) {
        $report = Sysreport::findOne(["id=:id", ":id" => $reportID]);
        $sql = $report['sql'];
        $result = Yii::$app->db->createCommand($sql)->QueryOne();
        $Head = array();
        foreach ($result as $key => $value) {
            $Head[] = $key;
        }
        $CountColumns = count($Head);
        $str = "";
        $str .= "<table class='table' id='reports'>";
        $str .= "<thead>";
        $str .= "<tr>";
        for ($i = 0; $i <= ($CountColumns - 1); $i++) {
            $str .= "<th>" . $Head[$i] . "</th>";
        }
        $str .= "</tr>";
        $str .= "</thead>";
        $str .= "<tbody>";
        $resultbody = Yii::$app->db->createCommand($sql)->QueryAll();
        foreach ($resultbody as $rs):
            $str .= "<tr>";
            for ($i = 0; $i <= ($CountColumns - 1); $i++) {
                $str .= "<td>" . $rs[$Head[$i]] . "</td>";
            }
            $str .= "</tr>";
        endforeach;
        $str .= "</tbody>";
        $str .= "</table>";
        $data['report'] = $report;
        $data['table'] = $str;
        return $this->render('index',$data);
    }

    public function actionTestquery() {
        $sql = "SELECT 
                LEFT(p.birth,4) AS 'ปี',
                SUM(IF(SUBSTR(p.birth,6,2) BETWEEN '01' AND '03',1,0)) AS 'ไตรมาส 1',
                                SUM(IF(SUBSTR(p.birth,6,2) BETWEEN '04' AND '06',1,0)) AS 'ไตรมาส ',
                                SUM(IF(SUBSTR(p.birth,6,2) BETWEEN '07' AND '09',1,0)) AS 'ไตรมาส 3',
                                SUM(IF(SUBSTR(p.birth,6,2) BETWEEN '10' AND '10',1,0)) AS 'ไตรมาส 4'
                FROM patient p
                WHERE p.birth != ''
                GROUP BY LEFT(p.birth,4)";
        $result = Yii::$app->db->createCommand($sql)->QueryOne();
        $Head = array();
        foreach ($result as $key => $value) {
            $Head[] = $key;
        }
        $CountColumns = count($Head);
        $str = "";
        $str .= "<table class='table'>";
        $str .= "<thead>";
        $str .= "<tr>";
        for ($i = 0; $i <= ($CountColumns - 1); $i++) {
            $str .= "<th>" . $Head[$i] . "</th>";
        }
        $str .= "</tr>";
        $str .= "</thead>";
        $str .= "<tbody>";
        $resultbody = Yii::$app->db->createCommand($sql)->QueryAll();
        foreach ($resultbody as $rs):
            $str .= "<tr>";
            for ($i = 0; $i <= ($CountColumns - 1); $i++) {
                $str .= "<td>" . $rs[$Head[$i]] . "</td>";
            }
            $str .= "</tr>";
        endforeach;
        $str .= "</tbody>";
        $str .= "</table>";

        $data['table'] = $str;
        return $this->render("table", $data);
    }

    public function actionReportlist($group) {
        $data['group'] = Sysgroupreport::findOne(["id=:id", ":id" => $group]);
        $data['report'] = Sysreport::find(['groupid=:groupid', ':groupid' => $group])->all();
        return $this->render("reportlist", $data);
    }

}
