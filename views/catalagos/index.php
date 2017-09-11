<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CatalagosSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Catalago ');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="catalagos-index">

    <h1><?= Html::encode($this->title) ?></h1>
<?php // echo $this->render('_search', ['model' => $searchModel]);  ?>

    <p>
    <?= Html::a(Yii::t('app', 'Create Catalagos'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?php Pjax::begin(); ?>    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            //'id',
            'modelo',
            'tipo.nombre',
            'categoria.nombre',
            'talla.numero',
            'color.nombre',
            'precio',
            ['attribute' => 'imagen',
                'format' => 'raw'
            ],
            [
                'class' => 'yii\grid\ActionColumn',
                'buttons' => [
                    'update' => function ($url, $model) {
                        return Html::a("Texto", $url);
                    }
                ],
            ],
        ]
    ]);
    ?>
    <?php Pjax::end(); ?></div>
