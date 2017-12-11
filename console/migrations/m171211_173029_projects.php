<?php

use yii\db\Migration;

/**
 * Class m171211_173029_projects
 */
class m171211_173029_projects extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {

    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m171211_173029_projects cannot be reverted.\n";

        return false;
    }

    
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
		$this->createTable('{{%projects}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull()->unique(),
            'id_user' => $this->integer(11),
        ], $tableOptions);
    }

    public function down()
    {
        echo "m171211_173029_projects cannot be reverted.\n";

        return false;
    }
    
}
