<?php

namespace app\controllers;

use Yii;
use app\models\Catalagos;
use app\models\CatalagosSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use kartik\widgets\DepDrop;
use yii\helpers\Json;
use app\models\Tipos;

/**
 * CatalagosController implements the CRUD actions for Catalagos model.
 */
class CatalagosController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Catalagos models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new CatalagosSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Catalagos model.
     * @param string $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Catalagos model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Catalagos();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model, 'tipos' => \app\models\Tipos::getAll(),
                'colores' => \app\models\Colores::getAll(),
                'tallas' => \app\models\Tallas::getAll(),
            ]);
        }
    }
    
            public function actionCategorias() {
        $out = [];
        if (isset($_POST['depdrop_parents'])) {
            $parens = $_POST['depdrop_parents'];
            if ($parens != null) {
                $tutor_id = $parens[0];
                $tutor = Tipos::findOne($tutor_id);
                //$nu_grupo = $parens[nu_grupo];
                $out = $tutor->tipocategorias; //self::getGrupos($grupos);
                $out2 = [];
                foreach ($out as $categorias) {
                    array_push($out2, ['id' => $categorias->nu_categoria, 'name' => $categorias->nuCategoria->nombre]);
                }

                echo Json::encode(['output' => $out2, 'selected' => '']);
                return;
            }
        }
        echo Json::encode(['output' => '', 'selected' => '']);
    }

    /**
     * Updates an existing Catalagos model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model, 'tipos' => \app\models\Tipos::getAll(),
                'colores' => \app\models\Colores::getAll(),
                'tallas' => \app\models\Tallas::getAll(),
            ]);
        }
    }

    /**
     * Deletes an existing Catalagos model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Catalagos model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return Catalagos the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Catalagos::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
