<?php

class m150416_133959_create_post_table extends CDbMigration
{

    public function up()
    {
        $this->createTable('post', array(
            'id' => 'integer NOT NULL',
            'title' => 'character(255) NOT NULL',
            'content' => 'text NOT NULL',
            'date_created' => 'integer NOT NULL',
            'author' => 'character(255) NOT NULL'
        ));
    }

    public function down()
    {
        $this->dropTable('post');
    }

    /*
      // Use safeUp/safeDown to do migration with transaction
      public function safeUp()
      {
      }

      public function safeDown()
      {
      }
     */
}
