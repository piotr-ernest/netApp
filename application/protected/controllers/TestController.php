<?php

/**
 * Description of TestController
 *
 * @author rnest
 */
class TestController extends CController
{

    public function actionIndex($text = 'Lorem Ipsum')
    {

        return $this->render('index', ['text' => $text]);
    }

    public function actionShow()
    {
        $conn = Yii::app()->db;
        $sql = $conn->createCommand('SELECT * FROM users');
        $users = $sql->query();
        return $this->render('show', array('users' => $users));
    }
    
    public function actionAdd()
    {
        $conn = Yii::app()->db;
        $sql = $conn->createCommand("INSERT INTO users (name,age,city) VALUES ('Lola', 24, 'Gliwice')");
        $sql->execute();
        return $this->render('add');
    }
    
    public function actionFetchAll()
    {
        $conn = Yii::app()->db;
        $sql = $conn->createCommand('SELECT * FROM users');
        $results = $sql->queryAll();
        return $this->render('fetchAll', ['results' => $results]);
    }
    
    public function actionAddSecond()
    {
        $users = new Users();
        $users->name = 'Valentine';
        $users->age = 16;
        $users->city = 'Ibiza';
        $users->save();
        
        return $this->render('addSecond');
        
    }
    

}
