<?php

use yii\db\Migration;

/**
 * Class m230721_124237_Usuario
 */
class m230721_124237_Usuario extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('USUARIO', [
            'ID' => $this->primaryKey(),
            'LOGIN' => $this->string(99),
            'SENHA' => $this->string(99),
            'NOME' => $this->string(99)->notNull(),
            'NUCLEO_ID' => $this->integer(),
        ]);

        $this->addForeignKey(
            'nucleo_fk_usu',
            'USUARIO',
            'NUCLEO_ID',
            'NUCLEO',
            'ID',
            'RESTRICT',
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('nucleo_fk_usu', 'USUARIO');
        $this->dropTable('USUARIO');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230721_124237_Usuario cannot be reverted.\n";

        return false;
    }
    */
}
