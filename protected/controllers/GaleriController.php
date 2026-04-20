<?php

class GaleriController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/belakang';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			// 'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow', 
				'expression'=>'Yii::app()->user->level == 0'
			),
			array('allow', 
				'expression'=>'Yii::app()->user->level == 1'
			),
			array('allow',  // Guest
				'actions'=>array('foto','modalgaleri'),
				'users'=>array('*'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	public function actionFoto($id)
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->layout='beranda-l';
		// $this->render('');

		$criteria=new CDbCriteria();
		$criteria->condition="direktori = $id";
	    $count=Galeri::model()->count($criteria);
	    $pages=new CPagination($count);

	    // results per page
	    $pages->pageSize=9;
	    $pages->applyLimit($criteria);
	    $models=Galeri::model()->findAll($criteria);

	    $this->render('foto', array(
	    	'models' => $models,
	    	'id'=>$id,
	         'pages' => $pages,
	    ));
	}

	public function actionModalgaleri()
	{
		$this->renderpartial('modalgaleri');
	}


	public function actionDetail()
	{
		$this->renderpartial('detail');
	}
	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Galeri;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Galeri']))
		{
			$model->attributes=$_POST['Galeri'];
			$uploadedFile=CUploadedFile::getInstance($model,'gambar');
			$fileName = "{$uploadedFile}"; 
			$model->gambar = $fileName;

			if($model->save()) {
				$uploadedFile->saveAs(Yii::app()->basePath.'/../images/galeri/'.$fileName); 
				$this->redirect(array('admin'));
			}
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Galeri']))
		{
			$model->attributes=$_POST['Galeri'];

			$uploadedFile=CUploadedFile::getInstance($model,'gambar');
			$fileName = "{$uploadedFile}"; 
			$model->gambar = $fileName;

			if($model->save()){
				if(!empty($uploadedFile))  // check if uploaded file is set or not
				{
					$uploadedFile->saveAs(Yii::app()->basePath.'/../images/galeri/'.$fileName);
				}
				$this->redirect(array('admin'));
			}
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Galeri');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Galeri('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Galeri']))
			$model->attributes=$_GET['Galeri'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Galeri the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Galeri::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Galeri $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='galeri-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
