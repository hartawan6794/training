<?php

namespace frontend\controllers;

use frontend\models\Akun1;
use frontend\models\Akun2;
use frontend\models\Akun3;
use frontend\models\Pegawai;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * Akun3Controller implements the CRUD actions for Akun3 model.
 */
class Akun3Controller extends Controller
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
     * Lists all Akun3 models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Akun3::find(),
            /*
            'pagination' => [
                'pageSize' => 50
            ],
            'sort' => [
                'defaultOrder' => [
                    'kd_akun1' => SORT_DESC,
                    'kd_akun2' => SORT_DESC,
                    'kd_akun3' => SORT_DESC,
                ]
            ],
            */
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Akun3 model.
     * @param int $kd_akun1 Kd Akun1
     * @param int $kd_akun2 Kd Akun2
     * @param int $kd_akun3 Kd Akun3
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($kd_akun1, $kd_akun2, $kd_akun3)
    {
        return $this->render('view', [
            'model' => $this->findModel($kd_akun1, $kd_akun2, $kd_akun3),
        ]);
    }

    /**
     * Creates a new Akun3 model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Akun3();
        $akun1 = Akun1::find()->asArray()->all();
        $akun2 = Akun2::find()->asArray()->all();


        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'kd_akun1' => $model->kd_akun1, 'kd_akun2' => $model->kd_akun2, 'kd_akun3' => $model->kd_akun3]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
            'akun1' => $akun1,
            'akun2' => $akun2,

        ]);
    }

    /**
     * Updates an existing Akun3 model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $kd_akun1 Kd Akun1
     * @param int $kd_akun2 Kd Akun2
     * @param int $kd_akun3 Kd Akun3
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($kd_akun1, $kd_akun2, $kd_akun3)
    {
        $model = $this->findModel($kd_akun1, $kd_akun2, $kd_akun3);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'kd_akun1' => $model->kd_akun1, 'kd_akun2' => $model->kd_akun2, 'kd_akun3' => $model->kd_akun3]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Akun3 model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $kd_akun1 Kd Akun1
     * @param int $kd_akun2 Kd Akun2
     * @param int $kd_akun3 Kd Akun3
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($kd_akun1, $kd_akun2, $kd_akun3)
    {
        $this->findModel($kd_akun1, $kd_akun2, $kd_akun3)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Akun3 model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $kd_akun1 Kd Akun1
     * @param int $kd_akun2 Kd Akun2
     * @param int $kd_akun3 Kd Akun3
     * @return Akun3 the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($kd_akun1, $kd_akun2, $kd_akun3)
    {
        if (($model = Akun3::findOne(['kd_akun1' => $kd_akun1, 'kd_akun2' => $kd_akun2, 'kd_akun3' => $kd_akun3])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
