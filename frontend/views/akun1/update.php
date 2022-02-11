<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Akun1 */

$this->title = 'Update Akun1: ' . $model->kd_akun1;
$this->params['breadcrumbs'][] = ['label' => 'Akun1s', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kd_akun1, 'url' => ['view', 'kd_akun1' => $model->kd_akun1]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="akun1-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
