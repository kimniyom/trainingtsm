<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "sysreport".
 *
 * @property int $id
 * @property string $reportname
 * @property string $sql
 * @property int $groupid
 * @property int $userid
 * @property string $createdate
 * @property string $lastupdate
 */
class Sysreport extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sysreport';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['groupid','sql','reportname','rowsum'],'required'],
            [['sql'], 'string'],
            [['groupid', 'userid','rowsum'], 'integer'],
            [['createdate', 'lastupdate'], 'safe'],
            [['reportname'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'reportname' => 'ชื่อรายงาน',
            'sql' => 'คำสั่ง Sql',
            'groupid' => 'กลุ่มรายงาน',
            'userid' => 'Userid',
            'createdate' => 'วันที่บันทึก',
            'lastupdate' => 'แก้ไขล่าสุด',
            'rowsum' => 'ผลรวม',
        ];
    }
}
