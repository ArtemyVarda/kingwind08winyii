<?php
/** @var $model */

use yii\helpers\Html;
use \yii\widgets\ActiveForm;
?>

<?php $form=ActiveForm::begin() ?>
<?= $form->field($model, 'name')->textInput() ?>
<?= $form->field($model, 'email')->textInput() ?>
<?= $form->field($model, 'age')->textInput() ?>
<?= $form->field($model, 'password')->passwordInput() ?>
<?= $form->field($model, 'passwordRepeat')->textInput() ?>
<?= Html::submitButton('Регистрация макак')?>
<?php ActiveForm::end() ?>
