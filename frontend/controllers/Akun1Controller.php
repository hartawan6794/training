<?php

namespace frontend\controllers;

use frontend\models\Akun1;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * Akun1Controller implements the CRUD actions for Akun1 model.
 */
class Akun1Controller extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Akun1 models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Akun1::find(),
            /*
            'pagination' => [
                'pageSize' => 50
            ],
            'sort' => [
                'defaultOrder' => [
                    'akun1' => SORT_DESC,
                ]
            ],
            */
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Akun1 model.
     * @param int $akun1 Akun1
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($akun1)
    {
        return $this->render('view', [
            'model' => $this->findModel($akun1),
        ]);
    }

    /**
     * Creates a new Akun1 model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Akun1();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'akun1' => $model->akun1]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Akun1 model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $akun1 Akun1
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($akun1)
    {
        $model = $this->findModel($akun1);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'akun1' => $model->akun1]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Akun1 model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $akun1 Akun1
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($akun1)
    {
        $this->findModel($akun1)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Akun1 model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $akun1 Akun1
     * @return Akun1 the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($akun1)
    {
        if (($model = Akun1::findOne(['akun1' => $akun1])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
