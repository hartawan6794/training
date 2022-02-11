<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Akun2 */

$this->title = 'Create Akun2';
$this->params['breadcrumbs'][] = ['label' => 'Akun2s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="akun2-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'akun1' => $akun1,
    ]) ?>

</div>
