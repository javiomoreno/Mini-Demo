<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;
use app\models\MidSexos;
use yii\helpers\ArrayHelper;

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
            [['usuapass'], 'string', 'max' => 250],
            [['usuaemai'], 'string', 'max' => 100],
            [['usuaemai'], 'unique'],
            [['usuaemai'], 'email'],
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
            'usuaiden' => 'Identificador',
            'mid_sexos_sexoiden' => 'Sexo',
            'midSexosSexoiden.sexonomb' => 'Sexo',
            'mid_tiposUsuarios_tiusiden' => 'Tipo de Usuario',
            'midTiposUsuariosTiusiden.tiusnomb' => 'Tipo de Usuario',
            'usuanomb' => 'Nombre de Usuario',
            'usuaapel' => 'Apellido de Usuario',
            'usuacedu' => 'Cédula de Usuario',
            'usuatele' => 'Teléfono de Usuario',
            'usuadire' => 'Dirección de Usuario',
            'usuaemai' => 'Email de Usuario',
            'usuauser' => 'Usuario de Acceso',
            'usuapass' => 'Password',
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

    public static function getListaTipoUsuarios()
    {
        $opciones = MidTiposUsuarios::find()->asArray()->all();
        return ArrayHelper::map($opciones, 'tiusiden', 'tiusnomb');
    }

    public static function getListaSexos()
    {
        $opciones = MidSexos::find()->asArray()->all();
        return ArrayHelper::map($opciones, 'sexoiden', 'sexonomb');
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
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */
    public static function findByEmail($usuaemai)
    {
        return static::findOne(['usuaemai' => $usuaemai]);
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
      if (base64_decode($this->usuapass) == $password) {
        return true;
      }
      return false;
    }

    /**
     * Generates password hash from password and sets it to the model
     *
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->usuapass = base64_encode($password);
    }

    /**
     * Generates password hash from password and sets it to the model
     *
     * @return password Decodificado
     */
    public function getPassword()
    {
        return base64_decode($this->usuapass);
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
