<?php

namespace app\controllers;

use Yii;
use app\models\MidCategorias;
use app\models\search\MidCategoriasSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

/**
 * MidCategoriasController implements the CRUD actions for MidCategorias model.
 */
class MidCategoriasController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['index', 'create', 'update', 'delete'],
                'rules' => [
                    [
                        'actions' => ['index', 'create', 'update', 'delete'],
                        'allow' => true,
                        'roles' => ['administrador'],
                    ],
                    [
                        'actions' => ['index', 'create', 'update', 'delete'],
                        'allow' => true,
                        'roles' => ['usuario'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all MidCategorias models.
     * @return mixed
     */
    public function actionIndex()
    {
        if(\Yii::$app->user->can('administrador')){
          $this->layout ="administradorLayout";
        }
        else if(\Yii::$app->user->can('usuario')){
          $this->layout ="usuarioLayout";
        }

        $searchModel = new MidCategoriasSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single MidCategorias model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        if(\Yii::$app->user->can('administrador')){
          $this->layout ="administradorLayout";
        }
        else if(\Yii::$app->user->can('usuario')){
          $this->layout ="usuarioLayout";
        }
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new MidCategorias model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        if(\Yii::$app->user->can('administrador')){
          $this->layout ="administradorLayout";
        }
        else if(\Yii::$app->user->can('usuario')){
          $this->layout ="usuarioLayout";
        }

        $model = new MidCategorias();

        if ($model->load(Yii::$app->request->post())) {
          $model->mid_usuarios_usuaiden = \Yii::$app->user->getId();
          $model->save();
          return $this->redirect(['view', 'id' => $model->cateiden]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing MidCategorias model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        if(\Yii::$app->user->can('administrador')){
          $this->layout ="administradorLayout";
        }
        else if(\Yii::$app->user->can('usuario')){
          $this->layout ="usuarioLayout";
        }
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->cateiden]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing MidCategorias model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the MidCategorias model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return MidCategorias the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = MidCategorias::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
