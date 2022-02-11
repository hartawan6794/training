<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Akun2 */

$this->title = 'Update Akun2: ' . $model->kd_akun1;
$this->params['breadcrumbs'][] = ['label' => 'Akun2s', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kd_akun1, 'url' => ['view', 'kd_akun1' => $model->kd_akun1, 'kd_akun2' => $model->kd_akun2]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="akun2-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
