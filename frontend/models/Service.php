<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "service".
 *
 * @property int $id
 * @property string $pcu หน่วยงาน
 * @property string $hn hn
 * @property string $name ชื่อ
 * @property string $lname นามสกุล
 * @property string $datesetvice วันที่
 * @property string $etc รายละเอียด
 * @property int $status สถานนะ 1 = ปลดล็อค  2 = รอแก้ไข 3 = lock 4 = success
 */
class Service extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'service';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['datesetvice'], 'safe'],
            [['etc'], 'string'],
            [['status'], 'integer'],
            [['pcu', 'name', 'lname'], 'string', 'max' => 100],
            [['hn'], 'string', 'max' => 9],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'pcu' => 'หน่วยงาน',
            'hn' => 'hn',
            'name' => 'ชื่อ',
            'lname' => 'นามสกุล',
            'datesetvice' => 'วันที่',
            'etc' => 'รายละเอียด',
            'status' => 'สถานนะ',
        ];
    }
}
