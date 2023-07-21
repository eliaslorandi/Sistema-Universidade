<?php

use yii\db\Migration;

/**
 * Class m230721_173118_Disciplina
 */
class m230721_173118_Disciplina extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('DISCIPLINA', [
            'ID' => $this->primaryKey(),
            'NOME' => $this->string(99)->notNull(),
            'CH' => $this->integer()->notNull(),
            'PERIODO' => $this->integer()->notNull(),
            'NUCLEO_ID' => $this->integer(),
            'MATRIZ_ID' => $this->integer(),
        ]);
        $this->addForeignKey('nucleo_fk_dis', 'DISCIPLINA', 'NUCLEO_ID', 'NUCLEO', 'ID', 'RESTRICT');
        $this->addForeignKey('matriz_fk_dis', 'DISCIPLINA', 'MATRIZ_ID', 'MATRIZ', 'ID', 'RESTRICT');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('nucleo_fk_dis', 'DISCIPLINA');
        $this->dropForeignKey('matriz_fk_dis', 'DISCIPLINA');
        $this->dropTable('DISCIPLINA');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230721_173118_Disciplina cannot be reverted.\n";

        return false;
    }
    */
}
