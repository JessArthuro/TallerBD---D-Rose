<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Catalagos */

$this->title = Yii::t('app', 'Create Catalagos');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Catalagos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="catalagos-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model, 'tipos' => $tipos, 'colores' => $colores, 'tallas' => $tallas,
    ]) ?>

</div>
