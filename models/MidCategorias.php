<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mid_categorias".
 *
 * @property integer $cateiden
 * @property integer $mid_usuarios_usuaiden
 * @property string $catenomb
 * @property string $catedesc
 *
 * @property MidUsuarios $midUsuariosUsuaiden
 * @property MidSubCategorias[] $midSubCategorias
 */
class MidCategorias extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mid_categorias';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['mid_usuarios_usuaiden'], 'required'],
            [['mid_usuarios_usuaiden'], 'integer'],
            [['catenomb'], 'string', 'max' => 50],
            [['catedesc'], 'string', 'max' => 200],
            [['mid_usuarios_usuaiden'], 'exist', 'skipOnError' => true, 'targetClass' => MidUsuarios::className(), 'targetAttribute' => ['mid_usuarios_usuaiden' => 'usuaiden']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'cateiden' => 'Identificador',
            'mid_usuarios_usuaiden' => 'Usuario',
            'midSubCategorias.usuanomb' => 'Usuario',
            'catenomb' => 'Nombre de Categoría',
            'catedesc' => 'Descipción de Categora',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMidUsuariosUsuaiden()
    {
        return $this->hasOne(MidUsuarios::className(), ['usuaiden' => 'mid_usuarios_usuaiden']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMidSubCategorias()
    {
        return $this->hasMany(MidSubCategorias::className(), ['mid_categorias_cateiden' => 'cateiden']);
    }
}
