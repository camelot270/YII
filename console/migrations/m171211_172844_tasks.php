<?php

use yii\db\Migration;

/**
 * Handles the creation of table `tasks`.
 */
class m171211_172844_tasks extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
		$this->createTable('{{%tasks}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull()->unique(),
            'id_project' => $this->integer(11),
        ], $tableOptions);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('tasks');
    }
}
