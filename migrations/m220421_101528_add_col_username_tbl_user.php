<?php

use yii\db\Migration;

/**
 * Class m220421_101528_add_col_username_tbl_user
 */
class m220421_101528_add_col_username_tbl_user extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('tbl_user', 'username', $this->string(128));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('tbl_user', 'username');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220421_101528_add_col_username_tbl_user cannot be reverted.\n";

        return false;
    }
    */
}
