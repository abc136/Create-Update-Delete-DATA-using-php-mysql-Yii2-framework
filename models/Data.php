<?php   
namespace app\models;   
   
use Yii;   
   
class Data extends \yii\db\ActiveRecord   
{   
    /**  
     * @inheritdoc  
     */   
    public static function tableName()   
    {   
        return 'Data';   
    }   
       
    /**  
     * @inheritdoc  
     */   
    public function rules()   
    {   
        return [   
            [['First', 'Last', 'Email', 'Marks', 'Status'], 'required'],  
            [['First', 'Last', 'Email'], 'string', 'max' => 300],   
            [['img_dir'], 'string', 'max' => 300],		
			[['Marks'], 'number', 'max' => 100],
			[['Status'], 'integer', 'max' => 1]
			
        ];   
    }   
}  