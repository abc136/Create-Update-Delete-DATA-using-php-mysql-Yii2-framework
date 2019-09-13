<?php   
use yii\helpers\Html;   
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
<h1>All Records:</h1>  
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
    <?php foreach($model as $field){ ?>   
    <tr>   
      <td><?= $field->First; ?></td>   
      <td><?= $field->Last; ?></td>   
      <td><?= $field->Email; ?></td>  
        <td><img src="uploads/<?= ($field->img_dir) ?>" style='width:42px;height:42px;border:0;'/></td>  
        
      <td><?= $field->Marks; ?></td>  
        <td><?php if ($field->Status==1){ echo('Active'); }else{echo('Not Active'); } ?></td>   
      <td><?= Html::a("View", ['data/view', 'id' => $field->id], ['class' => 'btn btn-info']); ?> |<?= Html::a("Edit", ['data/edit', 'id' => $field->id], ['class' => 'btn btn-warning']); ?> | <?= Html::a("Delete", ['data/delete', 'id' => $field->id], ['class' => 'btn btn-danger']); ?></td>   
    </tr>   
    <?php } ?>  