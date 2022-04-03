<?php

use yii\db\Migration;

/**
 * Class m220403_103116_category
 */
class m220403_103116_category extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('user',[
            'id'=>$this->primaryKey(),
            'username'=>$this->string(128),
            'password'=>$this->string(128)
        ],'engine = InnoDb, charset = utf8mb4');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('user');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220403_103116_category cannot be reverted.\n";

        return false;
    }
    */
}
