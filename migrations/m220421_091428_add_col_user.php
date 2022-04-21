<?php

use yii\db\Migration;

/**
 * Class m220421_091428_add_col_user
 */
class m220421_091428_add_col_user extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('tbl_user', 'email', $this->string(128));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('tbl_user', 'email');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220421_091428_add_col_user cannot be reverted.\n";

        return false;
    }
    */
}
