<?php
    use yii\helpers\Html;
    use yii\widgets\ActiveForm;
?>

<?php $form = ActiveForm::begin()?>

<?= $form->field($obat055, 'kode_obat')?>
<?= $form->field($obat055, 'harga')?>
<?= $form->field($obat055, 'stok_obat')?>
<?= Html::submitButton('Save', ['class' => 'btn btn-primary'])?>

<?php ActiveForm::end() ?>