<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Colores */

$this->title = Yii::t('app', 'Crear Color');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Colores'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="colores-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model, 
    ]) ?>

</div>
