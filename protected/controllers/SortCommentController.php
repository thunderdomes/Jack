<?php

class SortCommentController extends Controller
{
	public function actionList()
	{
		 $criteria = new CDbCriteria();
		 
		 $criteria->compare('id',@$_GET['id']);
		 $criteria->compare('comment',@$_GET['comment'],true);
		 $criteria->compare('finger_id',@$_GET['finger_id'],true);
		 
		 $models = SortComment::model()->findAll($criteria);
		 if(empty($models)) {
			  // No
			  $this->sendResponse(200, CJSON::encode(array()),'application/json');
		 } else {
			  // Prepare response
			  $rows = array();
			  foreach($models as $model)
					$rows[] = $model->attributes;
			  // Send the response
			  $this->sendResponse(200, CJSON::encode($rows),'application/json');
		 }
	}
	
	public function actionCreate()
	{
		$model = new SortComment;
		 
		foreach($_POST as $var=>$value) {
        // Does the model have this attribute? If not raise an error
        if($model->hasAttribute($var))
            $model->$var = $value;
        else
            $this->sendResponse(500, 
                array('status'=>0,'msg'=>'Parameter '.$var.' Tidak Diijinkan'));
		}
			
		if($model->save())
        $this->sendResponse(200, CJSON::encode($model),'application/json');
		else {
        // Errors occurred
		 $error = array();
        foreach($model->errors as $attribute=>$attr_errors) {
				
            foreach($attr_errors as $attr_error)
					$error[]=$attr_error;
        }
        $this->sendResponse(500, CJSON::encode(array('status'=>0,'error'=>$error)),'application/json');
    }
		
	}
}
