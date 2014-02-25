<?php
class Index_Slideshow extends CWidget{
    public function init(){
        $date_now = date('Y-m-d H:i:s');
        //echo $date_now;
        $criteria = new CDbCriteria;
        $criteria->condition ="hot = 1 and active = 2 and create_date <="."'".$date_now."'"." and endhot_date >= "."'".$date_now."'";
        $criteria->order='id DESC';
        $criteria->limit=5;
        $model = Articles::model()->findAll($criteria);
        $this->render('index_slideshow',array('model'=>$model));
    }
}
?>