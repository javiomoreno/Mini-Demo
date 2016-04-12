<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "mid_subCategorias".
 *
 * @property integer $sucaiden
 * @property integer $mid_categorias_cateiden
 * @property string $sucanomb
 * @property string $sucadesc
 *
 * @property MidCategorias $midCategoriasCateiden
 */
class MidSubCategorias extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mid_subCategorias';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['mid_categorias_cateiden'], 'required'],
            [['mid_categorias_cateiden'], 'integer'],
            [['sucanomb'], 'string', 'max' => 50],
            [['sucadesc'], 'string', 'max' => 200],
            [['mid_categorias_cateiden'], 'exist', 'skipOnError' => true, 'targetClass' => MidCategorias::className(), 'targetAttribute' => ['mid_categorias_cateiden' => 'cateiden']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'sucaiden' => 'Identificador',
            'mid_categorias_cateiden' => 'Categoría',
            'midCategoriasCateiden.catenomb' => 'Categoría',
            'sucanomb' => 'Nombre de Sub Categoría',
            'sucadesc' => 'Descripción',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMidCategoriasCateiden()
    {
        return $this->hasOne(MidCategorias::className(), ['cateiden' => 'mid_categorias_cateiden']);
    }

    public static function getListaCategorias()
    {
        $opciones = MidCategorias::find()->asArray()->all();
        return ArrayHelper::map($opciones, 'cateiden', 'catenomb');
    }
}
