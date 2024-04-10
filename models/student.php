<?php

namespace app\modules\dev_subodh\models;

use yii\db\ActiveRecord;

class Student extends ActiveRecord
{
    public static function tableName()
    {
        return 'student_details';
    }

    public function rules()
    {
        return [
            [['name', 'email', 'phone', 'address'], 'required'],
            ['email', 'email'], // Ensure email format is valid
            ['phone', 'string', 'max' => 15], // Assuming phone number should not exceed 15 characters
        ];
    }

    public function attributeLabels()
    {
        return [
            'name' => \Yii::t('app', 'Full Name'),
            'email' => \Yii::t('app', 'Email Address'),
            'phone' => \Yii::t('app', 'Phone Number'),
            'address' => \Yii::t('app', 'Address'),
        ];
    }
}
