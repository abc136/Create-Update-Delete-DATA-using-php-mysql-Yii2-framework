<?php   
namespace app\controllers;   
   
use Yii;   
use app\models\Data;   
use yii\web\Controller;   
use yii\web\UploadedFile;
  
/**  
 * Create, Read, Delete, Edit 
 **/   
class DataController extends Controller   
{    
 
    
	
 	 /**  
     * Read all status
     */   
    public function actionIndex()   
    {   
       $data = Data::find()->all(); 
	   if($data === null)   
            throw new NotFoundHttpException('The requested page does not exist.'); 
	    
        return $this->render('index', ['model' => $data]);   
    }  
	
	
	/**  
     * View all Active status
     */   
    public function actionActiveview()   
    {   
       $data = Data::find()->where(['Status' => 1])->all(); 
	   if($data === null)   
            throw new NotFoundHttpException('The requested page does not exist.'); 
	    
        return $this->render('index', ['model' => $data]);   
    }
	
 	 /**  
     * View  specific id
     */ 
    public function actionView($id)   
    {   
       
        $data = Data::find()->where(['id' => $id])->one(); 
		        // $id not found in database   
        if($data === null)   
            throw new NotFoundHttpException('The requested page does not exist.');  
			
		return $this->render('view', ['data' => $data]);	
      //  return $this->render('index2', ['model' => $data]);   
    }	
	
	
	    /**  
     * Create  
     */   

	 
    public function actionCreate()   
    {   
          
        $model = new Data();   
   
        // new record   
        if($model->load(Yii::$app->request->post()) ){   
		//$model->save();
		$image= UploadedFile::getInstance($model, 'img_dir');
		$img_ext=($image->getExtension());
		$img_basename=($image->baseName);	

		if ($img_ext=="jpeg" or $img_ext=="png"){
			$model->save();
			$recordid = ($model->id);
		    $imagename= 'record_' .$recordid. '.' .$img_ext;
			$image->saveAs('uploads/' .$imagename);
			$model->img_dir = $imagename;
			$model->save();
			return $this->redirect(['index']);  
		}else{
			return $this->render('create', ['model' => $model]);
		}
			
				
         
        }   
                   
        return $this->render('create', ['model' => $model]);   
    } 
	
	
	/**  
     * Edit  
     * @param integer $id  
     */   
    public function actionEdit($id)   
    {   
        $model = Data::find()->where(['id' => $id])->one();   
   
        // $id not found in database   
        if($model === null)   
            throw new NotFoundHttpException('The requested page does not exist.');   
           
		   
		   
		 

		  
        // update record   
        if($model->load(Yii::$app->request->post()) ){   
		//$model->save();
		$image= UploadedFile::getInstance($model, 'img_dir');
		$img_ext=($image->getExtension());
		$img_basename=($image->baseName);	

		if ($img_ext=="jpeg" or $img_ext=="png"){
			$model->save();
			$recordid = ($model->id);
		    $imagename= 'record_' .$recordid. '.' .$img_ext;
			$image->saveAs('uploads/' .$imagename);
			$model->img_dir = $imagename;
			$model->save();
			return $this->redirect(['index']);  
		}else{
			return $this->render('edit', ['model' => $model]);
		}
			
				
         
        }     
           
        return $this->render('edit', ['model' => $model]);   
    }   
	
	/**  
    * Delete  
     * @param integer $id  
     */   
     public function actionDelete($id)   
     {   
         $model = Data::findOne($id);   
           
        // $id not found in database   
        if($model === null)   
            throw new NotFoundHttpException('The requested page does not exist.');   
               
        // delete record   
        $model->delete();   
           
        return $this->redirect(['index']);   
     }      
	

	
	
    }  	