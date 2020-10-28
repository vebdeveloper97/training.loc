<?php

namespace app\modules\hr\models;

use Yii;

/**
 * This is the model class for table "hr_employee".
 *
 * @property int $id
 * @property string $fish
 * @property string $of_brith
 * @property string $passport_series
 * @property string $phone
 * @property int|null $inn
 * @property string $jins
 * @property string $adress
 * @property string $by_whom
 * @property string|null $add_info
 * @property int|null $created_at
 * @property int|null $updated_at
 * @property int|null $created_by
 * @property int|null $updated_by
 */
class HrEmployee extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'hr_employee';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fish', 'of_brith', 'passport_series', 'phone', 'jins', 'adress', 'by_whom'], 'required'],
            [['of_brith'], 'safe'],
            [['inn', 'created_at', 'updated_at', 'created_by', 'updated_by'], 'integer'],
            [['add_info'], 'string'],
            [['fish', 'by_whom'], 'string', 'max' => 100],
            [['passport_series', 'jins'], 'string', 'max' => 10],
            [['phone'], 'string', 'max' => 15],
            [['adress'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'fish' => Yii::t('app', 'Fish'),
            'of_brith' => Yii::t('app', 'Of Brith'),
            'passport_series' => Yii::t('app', 'Passport Series'),
            'phone' => Yii::t('app', 'Phone'),
            'inn' => Yii::t('app', 'Inn'),
            'jins' => Yii::t('app', 'Jins'),
            'adress' => Yii::t('app', 'Adress'),
            'by_whom' => Yii::t('app', 'By Whom'),
            'add_info' => Yii::t('app', 'Add Info'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
            'created_by' => Yii::t('app', 'Created By'),
            'updated_by' => Yii::t('app', 'Updated By'),
        ];
    }
}
