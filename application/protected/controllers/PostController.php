<?php

/**
 * Description of PostController
 *
 * @author rnest
 */
class PostController extends CController
{

    public function actionIndex()
    {
        $form = new PostForm();
        $saved = false;
        
        if (isset($_POST['PostForm'])) {
            $_POST['PostForm']['date_created'] = time();
            $form->attributes = $_POST['PostForm'];
            
            if ($form->validate()) {
                
                $form->save();
                $saved = true;
                //$form = new PostForm();
                $this->redirect('post');
            } 
        }

        $conn = Yii::app()->db;
        $sql = $conn->createCommand('SELECT * FROM post ORDER BY id DESC');
        $results = $sql->queryAll();
        
        $this->render('form', array('model' => $form, 'saved' => $saved, 'results' => $results));
    }

}
