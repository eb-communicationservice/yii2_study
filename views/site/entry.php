<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<?php $form = ActiveForm::begin(); ?>

	<?= $form->field($model, 'name') ?>
	
	<?= $form->field($model, 'email') ?>
	
	<div class="form-group">
		<?= Html::submitButton('‘—M', ['class' => 'btn btn-primary']) ?>
	</div>
	
<?php ActiveFrom::end(); ?>