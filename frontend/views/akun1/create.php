<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Akun1 */

$this->title = 'Create Akun1';
$this->params['breadcrumbs'][] = ['label' => 'Akun1s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="akun1-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
