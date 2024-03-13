<?php
/**@var $model */
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>

<?php $form=ActiveForm::begin()?>
<?= $form->field($model, 'firstName')->textInput() ?>
<?= $form->field($model, 'nastName')->textInput() ?>
<?= $form->field($model, 'patronymic')->textInput() ?>
<?= $form->field($model, 'email')->textInput() ?>
<?= $form->field($model, 'password')->passwordInput() ?>
<?= $form->field($model, 'passwordRepeat')->textInput() ?>
<?= Html::submitButton('отправить') ?>

<?php ActiveForm::end() ?>

