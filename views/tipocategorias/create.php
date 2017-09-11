<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Tipocategorias */

$this->title = Yii::t('app', 'Create Tipocategorias');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Tipocategorias'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tipocategorias-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model, 'tipos' => $tipos, 'categorias' => $categorias,
    ]) ?>

</div>
