<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use frontend\models\Akun1;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model frontend\models\Akun2 */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="akun2-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kd_akun2')->textInput() ?>

    <!-- <?= $form->field($model, 'kd_akun1')->textInput() ?> -->

    <?= $form->field($model, 'kd_akun1')
      ->dropDownList(ArrayHelper::map(Akun1::find()->asArray()->all(),'kd_akun1','akun1'))
      ?>


    <?= $form->field($model, 'akun2')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
