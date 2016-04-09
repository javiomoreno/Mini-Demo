<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;

/**
 * This is the model class for table "mid_usuarios".
 *
 * @property integer $usuaiden
 * @property integer $mid_sexos_sexoiden
 * @property integer $mid_tiposUsuarios_tiusiden
 * @property string $usuanomb
 * @property string $usuaapel
 * @property string $usuacedu
 * @property string $usuatele
 * @property string $usuadire
 * @property string $usuauser
 * @property string $useapass
 *
 * @property MidCategorias[] $midCategorias
 * @property MidTiposUsuarios $midTiposUsuariosTiusiden
 * @property MidSexos $midSexosSexoiden
 */
class MidUsuarios extends ActiveRecord implements IdentityInterface
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mid_usuarios';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['mid_sexos_sexoiden', 'mid_tiposUsuarios_tiusiden'], 'required'],
            [['mid_sexos_sexoiden', 'mid_tiposUsuarios_tiusiden'], 'integer'],
            [['usuanomb', 'usuaapel', 'usuacedu', 'usuatele', 'usuauser'], 'string', 'max' => 50],
            [['usuadire'], 'string', 'max' => 200],
            [['useapass'], 'string', 'max' => 250],
            [['mid_tiposUsuarios_tiusiden'], 'exist', 'skipOnError' => true, 'targetClass' => MidTiposUsuarios::className(), 'targetAttribute' => ['mid_tiposUsuarios_tiusiden' => 'tiusiden']],
            [['mid_sexos_sexoiden'], 'exist', 'skipOnError' => true, 'targetClass' => MidSexos::className(), 'targetAttribute' => ['mid_sexos_sexoiden' => 'sexoiden']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'usuaiden' => 'Usuaiden',
            'mid_sexos_sexoiden' => 'Mid Sexos Sexoiden',
            'mid_tiposUsuarios_tiusiden' => 'Mid Tipos Usuarios Tiusiden',
            'usuanomb' => 'Usuanomb',
            'usuaapel' => 'Usuaapel',
            'usuacedu' => 'Usuacedu',
            'usuatele' => 'Usuatele',
            'usuadire' => 'Usuadire',
            'usuauser' => 'Usuauser',
            'usuapass' => 'Usuapass',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMidCategorias()
    {
        return $this->hasMany(MidCategorias::className(), ['mid_usuarios_usuaiden' => 'usuaiden']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMidTiposUsuariosTiusiden()
    {
        return $this->hasOne(MidTiposUsuarios::className(), ['tiusiden' => 'mid_tiposUsuarios_tiusiden']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMidSexosSexoiden()
    {
        return $this->hasOne(MidSexos::className(), ['sexoiden' => 'mid_sexos_sexoiden']);
    }

    public static function findIdentity($id)
    {
        return static::findOne(['usuaiden' => $id]);
    }

    /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */
    public static function findByUsername($username)
    {
        return static::findOne(['usuauser' => $username]);
    }

    /**
     * @inheritdoc
     */
    public function getId()
    {
        return $this->getPrimaryKey();
    }

    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return boolean if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        return Yii::$app->security->validatePassword($password, $this->usuapass);
    }

    public function verificarPassword(){
        return $this->usuapass;
    }

    /**
     * Generates password hash from password and sets it to the model
     *
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->usuapass = Yii::$app->security->generatePasswordHash($password);
    }

        /**
     * @inheritdoc
     */
    public function getAuthKey()
    {
    }

    /**
     * @inheritdoc
     */
    public function validateAuthKey($authKey)
    {
    }

        /**
     * @inheritdoc
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
    }

    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function signup()
    {
        if ($this->validate()) {
            $user = new ApsUsuarios();
            $user->aps_tipousuarios_tiusiden = $this->aps_tipousuarios_tiusiden;
            $user->usuauser = $this->usuauser;
            $user->usuanomb = $this->usuanomb;
            $user->setPassword($this->usuapass);
            if ($user->save()) {
                return $user;
            }
        }

        return null;
    }
}
