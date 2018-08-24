<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "sysgroupreport".
 *
 * @property int $id
 * @property string $groupname
 */
class Sysgroupreport extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sysgroupreport';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['groupname'],'required'],
            [['groupname'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'groupname' => 'กลุ่มรายงาน',
        ];
    }
}
