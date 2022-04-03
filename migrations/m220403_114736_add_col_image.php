<?php

use yii\db\Migration;

/**
 * Class m220403_114736_add_col_image
 */
class m220403_114736_add_col_image extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('category', 'image', $this->string(64));

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('category', 'image');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220403_114736_add_col_image cannot be reverted.\n";

        return false;
    }
    */
}
