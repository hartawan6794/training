<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Akun1 */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="akun1-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'akun1')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
