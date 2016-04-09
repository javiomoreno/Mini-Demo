<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mid_sexos".
 *
 * @property integer $sexoiden
 * @property string $sexonomb
 * @property string $sexodesc
 *
 * @property MidUsuarios[] $midUsuarios
 */
class MidSexos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mid_sexos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sexonomb'], 'string', 'max' => 50],
            [['sexodesc'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'sexoiden' => 'Sexoiden',
            'sexonomb' => 'Sexonomb',
            'sexodesc' => 'Sexodesc',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMidUsuarios()
    {
        return $this->hasMany(MidUsuarios::className(), ['mid_sexos_sexoiden' => 'sexoiden']);
    }
}
