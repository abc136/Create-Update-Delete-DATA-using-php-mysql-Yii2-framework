<?php   
use yii\helpers\Html;   
use yii\widgets\ActiveForm;   
?>   
   
<style>   
table th,td{
	margin-top: 100px;
	padding-bottom: 10px;
	padding-left: 10px;
	padding-right: 10px;
	padding-top: 10px;
	font-family: Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif;
}   
</style>   
<div>
<h1>View Record:</h1> 
<?= Html::a('Add Record', ['data/create'], ['class' => 'btn btn-success']); ?>  
  
<table border="1">   
   <tr>   
        <th>First Name</th>   
        <th>Last Name</th>   
        <th>Email Adress</th> 
        <th>Profile</th> 
        <th>Marks</th> 
        <th>Status</th>   
</tr>       
    <tr>   
      <td><?= $data->First; ?></td>   
      <td><?= $data->Last; ?></td>   
      <td><?= $data->Email; ?></td>  
      <td><img src="uploads/<?= ($data->img_dir) ?>" style='width:50%;height:50%;border:0;'/></td>  
        
      <td><?= $data->Marks; ?></td>  
      <td><?php if ($data->Status==1){ echo('Active'); }else{echo('Not Active'); } ?></td>   
      <td><?= Html::a("Edit", ['data/edit', 'id' => $data->id], ['class' => 'btn btn-warning']); ?> | <?= Html::a("Delete", ['data/delete', 'id' => $data->id], ['class' => 'btn btn-danger']); ?></td>  
    </tr></div>
   
    