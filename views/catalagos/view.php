<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Catalagos */

$this->title = "Calzado: $model->modelo";
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Catalagos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="catalagos-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Actualizar Producto'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Eliminar'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
          //  'id',
            'modelo',
            'tipo.nombre',
            'categoria.nombre',
            'talla.numero',
            'color.nombre',
            'precio',
          //  'imagen:ntext',  
            ['attribute' =>'imagen',
             'format' =>'raw'],
        ],
    ]) ?>

</div>
