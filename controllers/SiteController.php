<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\MidUsuarios;

class SiteController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionLogin()
    {
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            if(\Yii::$app->user->can('administrador')){
                /*if(ApsUsuarios::findOne(\Yii::$app->user->getId())->usuaesta == 1){
                    return Yii::$app->getResponse()->redirect(array('/aps-usuarios/registrar'));
                }*/
                return Yii::$app->getResponse()->redirect(array('/administrador/index'));
            }
            else if(\Yii::$app->user->can('usuario')){
                /*if(ApsUsuarios::findOne(\Yii::$app->user->getId())->usuaesta == 1){
                    return Yii::$app->getResponse()->redirect(array('/aps-usuarios/registrar'));
                }*/
                return Yii::$app->getResponse()->redirect(array('/usuario/index'));
            }
            return $this->goBack();
        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    public function actionRegistrar()
    {
      $model = new MidUsuarios();

      if ($model->load(Yii::$app->request->post())) {
          $model->mid_tiposUsuarios_tiusiden = 2;
          $model->setPassword($model->usuapass);
          if ($user = $model->save()) {
              $auth = \Yii::$app->authManager;
              $role = $auth->getRole('usuario');
              $auth->assign($role, $model->getId());
              if (Yii::$app->getUser()->login($model)) {
                  return Yii::$app->getResponse()->redirect(array('/usuario/index'));
              }
          }
      } else {
          return $this->render('registrar', [
              'model' => $model,
          ]);
      }
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    public function actionAbout()
    {
        return $this->render('about');
    }
}
