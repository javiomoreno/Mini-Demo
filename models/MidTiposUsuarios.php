<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mid_tiposUsuarios".
 *
 * @property integer $tiusiden
 * @property string $tiusnomb
 * @property string $tiusdesc
 *
 * @property MidUsuarios[] $midUsuarios
 */
class MidTiposUsuarios extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mid_tiposUsuarios';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tiusnomb'], 'string', 'max' => 50],
            [['tiusdesc'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'tiusiden' => 'Tiusiden',
            'tiusnomb' => 'Tiusnomb',
            'tiusdesc' => 'Tiusdesc',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMidUsuarios()
    {
        return $this->hasMany(MidUsuarios::className(), ['mid_tiposUsuarios_tiusiden' => 'tiusiden']);
    }
}
