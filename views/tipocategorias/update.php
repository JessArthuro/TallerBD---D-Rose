<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Tipocategorias */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Tipocategorias',
]) . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Tipocategorias'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="tipocategorias-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model, 'tipos' => $tipos, 'categorias' => $categorias,
    ]) ?>

</div>
