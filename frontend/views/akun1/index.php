<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Akun1s';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="akun1-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Akun1', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'akun1',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, \frontend\models\Akun1 $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'akun1' => $model->akun1]);
                 }
            ],
        ],
    ]); ?>


</div>
