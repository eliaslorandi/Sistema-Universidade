<?php

namespace app\controllers;

use app\models\Coordena;
use app\models\CoordenaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * CoordenaController implements the CRUD actions for Coordena model.
 */
class CoordenaController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Coordena models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new CoordenaSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Coordena model.
     * @param int $USUARIO_ID Usuario ID
     * @param int $CURSO_ID Curso ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($USUARIO_ID, $CURSO_ID)
    {
        return $this->render('view', [
            'model' => $this->findModel($USUARIO_ID, $CURSO_ID),
        ]);
    }

    /**
     * Creates a new Coordena model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Coordena();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'USUARIO_ID' => $model->USUARIO_ID, 'CURSO_ID' => $model->CURSO_ID]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Coordena model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $USUARIO_ID Usuario ID
     * @param int $CURSO_ID Curso ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($USUARIO_ID, $CURSO_ID)
    {
        $model = $this->findModel($USUARIO_ID, $CURSO_ID);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'USUARIO_ID' => $model->USUARIO_ID, 'CURSO_ID' => $model->CURSO_ID]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Coordena model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $USUARIO_ID Usuario ID
     * @param int $CURSO_ID Curso ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($USUARIO_ID, $CURSO_ID)
    {
        $this->findModel($USUARIO_ID, $CURSO_ID)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Coordena model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $USUARIO_ID Usuario ID
     * @param int $CURSO_ID Curso ID
     * @return Coordena the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($USUARIO_ID, $CURSO_ID)
    {
        if (($model = Coordena::findOne(['USUARIO_ID' => $USUARIO_ID, 'CURSO_ID' => $CURSO_ID])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
