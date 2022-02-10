<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Akun1 */

$this->title = $model->akun1;
$this->params['breadcrumbs'][] = ['label' => 'Akun1s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="akun1-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'akun1' => $model->akun1], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'akun1' => $model->akun1], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'akun1',
        ],
    ]) ?>

</div>
