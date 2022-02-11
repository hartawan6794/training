<?php

use frontend\models\Akun1;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model frontend\models\Akun3 */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="akun3-form">

    <?php $form = ActiveForm::begin(); ?>

    <!-- <?= $form->field($model, 'kd_akun1')->textInput() ?> -->

    <?= $form->field($model, 'kd_akun1')
      ->dropDownList(ArrayHelper::map(frontend\models\Akun1::find()->asArray()->all(),'kd_akun1','akun1'))
      ?>

    <!-- <?= $form->field($model, 'kd_akun2')->textInput() ?> -->

    <?= $form->field($model, 'kd_akun2')
      ->dropDownList(ArrayHelper::map(frontend\models\Akun2::find()->asArray()->all(),'kd_akun2','akun2'))
      ?>

    <?= $form->field($model, 'kd_akun3')->textInput() ?>

    <?= $form->field($model, 'akun3')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
