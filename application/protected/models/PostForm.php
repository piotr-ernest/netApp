<?php


/**
 * Description of PostForm
 *
 * @author rnest
 */
class PostForm extends CActiveRecord
{
    public $title;
    public $content;
    public $date_created;
    public $author;
    
    public static function model($className = __CLASS__)
    {
        parent::model($className);
    }
    
    public function tableName()
    {
        return 'post';
    }
    
    public function attributeLabels()
    {
        return array(
            'title' => 'tytuł',
            'content' => 'treść',
            'date_created' => 'data utworzenia',
            'author' => 'autor',
        );
    }
    
    public function rules()
    {
        return array(
            array(
                'title', 'required'
            ),
            array(
                'content', 'required'
            ),
            array(
                'author', 'required'
            ),
            array(
                'date_created', 'required'
            ),
        );
    }
    
}
