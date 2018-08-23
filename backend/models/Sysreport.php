<?php

namespace app\models;

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
            [['groupid','sql','reportname'],'required'],
            [['sql'], 'string'],
            [['groupid', 'userid'], 'integer'],
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
            'reportname' => 'Reportname',
            'sql' => 'Sql',
            'groupid' => 'Groupid',
            'userid' => 'Userid',
            'createdate' => 'Createdate',
            'lastupdate' => 'Lastupdate',
        ];
    }
}
