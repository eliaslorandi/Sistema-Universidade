<?php

use yii\db\Migration;

/**
 * Class m230721_133345_Matriz
 */
class m230721_133345_Matriz extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('MATRIZ', [
            'ID' => $this->primaryKey(),
            'SIGLA' => $this->string(99),
            'CH_TOTAL' => $this->integer(),
            'CURSO_ID' => $this->integer(),

        ]);
        $this->addForeignKey(
            'curso_fk_mat',
            'MATRIZ',
            'CURSO_ID',
            'CURSO',
            'ID',
            'RESTRICT',
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('curso_fk_mat', 'MATRIZ');
        $this->dropTable('MATRIZ');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230721_133345_Matriz cannot be reverted.\n";

        return false;
    }
    */
}
