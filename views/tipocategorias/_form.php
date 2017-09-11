<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Tipocategorias */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tipocategorias-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nu_tipo')->dropDownList($tipos) ?>

    <?= $form->field($model, 'nu_categoria')->dropDownList($categorias) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
