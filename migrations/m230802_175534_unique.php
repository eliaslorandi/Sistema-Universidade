<?php

use yii\db\Migration;

/**
 * Class m230802_175534_unique
 */
class m230802_175534_unique extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->alterColumn('usuario', 'LOGIN', 'string unique');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->alterColumn('usuario', 'LOGIN', 'string');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230802_175534_unique cannot be reverted.\n";

        return false;
    }
    */
}
