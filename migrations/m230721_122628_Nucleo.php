<?php

use yii\db\Migration;

/**
 * Class m230721_122628_Nucleo
 */
class m230721_122628_Nucleo extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('NUCLEO', [
            'ID' => $this->primaryKey(),
            'NOME' => $this->string(99),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
       $this->dropTable('NUCLEO');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230721_122628_Nucleo cannot be reverted.\n";

        return false;
    }
    */
}
