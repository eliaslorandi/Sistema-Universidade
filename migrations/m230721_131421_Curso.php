<?php

use yii\db\Migration;

/**
 * Class m230721_131421_Curso
 */
class m230721_131421_Curso extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('CURSO', [
            'ID' => $this->primaryKey(),
            'NOME' => $this->string(99)->notNull(),
            'CH_TOTAL' => $this->integer(),
            'Q_PERIODOS' => $this->smallInteger(),
            'SIGLA' => $this->string(10),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('CURSO');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230721_131421_Curso cannot be reverted.\n";

        return false;
    }
    */
}
