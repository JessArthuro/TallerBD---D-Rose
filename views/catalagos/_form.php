<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use marqu3s\summernote\SummerNote;
use kartik\widgets\DepDrop;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model app\models\Catalagos */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="catalagos-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'modelo')->textInput() ?>

    <?= $form->field($model, 'nu_tipo')->dropDownList($tipos, ['id' => 'tipos-id']); ?>

    <?= //$form->field($model, 'nu_categoria')->textInput() 
    
     $form->field($model, 'nu_categoria')->widget(DepDrop::classname(), [
        'options' => ['id' => 'categorias-id'],
        'pluginOptions' => [
            'depends' => ['tipos-id'],
            'placeholder' => 'Seleccionar la categoria...',
            'url' => Url::to(['/catalagos/categorias'])]]); ?>

    <?= $form->field($model, 'nu_talla')->dropDownList($tallas) ?>

    <?= $form->field($model, 'nu_color')->dropDownList($colores) ?>

    <?= $form->field($model, 'precio')->textInput() ?>

    <?= $form->field($model, 'imagen')->widget(Summernote::className(), ['clientOptions' => []])  ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
