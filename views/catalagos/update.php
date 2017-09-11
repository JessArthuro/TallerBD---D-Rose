<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Catalagos */

$this->title = Yii::t('app', 'Actualizar {modelClass}: ', [
    'modelClass' => 'modelo',
]) . $model->modelo;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Catalagos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Actualizar');
?>
<div class="catalagos-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model, 'tipos' => $tipos, 'colores' => $colores, 'tallas' => $tallas,
    ]) ?>

</div>
