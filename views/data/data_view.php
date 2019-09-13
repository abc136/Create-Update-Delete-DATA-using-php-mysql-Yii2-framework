<?php   
use yii\helpers\Html;   
use yii\widgets\ActiveForm;   
?>   
<h1>Insert New Record:</h1> 
<?php $form = ActiveForm::begin(); ?>   
   
    <?= $form->field($model, 'First')->label('First Name:') ?>   
    <?= $form->field($model, 'Last')->label('Last Name:')  ?>   
    <?= $form->field($model, 'Email')->input('email')->label('Email Adress:')  ?>   
    
    <?= $form->field($model, 'img_dir')->fileInput(['skipOnEmpty' => false, 'extensions' => 'png, jpeg'])->label('Profile Picture:')  ?>   
    <?= $form->field($model, 'Marks')->textInput(['type' => 'number' ,'min'=>0,'max'=>100])->label('Your Mark:')  ?>   
    <?= $form->field($model, 'Status')->dropDownList(['1' => 'Active', '0' => 'Not Active'])->label('Your Status:') ; ?>  
    
      
    <?= Html::submitButton($model->isNewRecord ? 'Save' : 'Update', ['class' => $model->   
     isNewRecord ? 'btn btn-success' : 'btn btn-primary']); ?>   
   
   <?php ActiveForm::end(); ?>  