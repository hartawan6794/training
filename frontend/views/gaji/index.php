<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\Gajisearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Gajis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="gaji-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Gaji', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            'pegawai.nip',
            'pegawai.nama',
            'gaji_pokok',
            'tunjangan_istri',
            'tunjangan_anak',
            //'tunjangan_makan',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, frontend\models\Gaji $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>



</div>
