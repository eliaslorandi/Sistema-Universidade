<?php

use yii\db\Migration;

/**
 * Class m230721_191819_DetalheOferta
 */
class m230721_191819_DetalheOferta extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('DETALHEOFERTA', [
            'ID' => $this->primaryKey(),
            'ANOSEMESTRE' => $this->string(10)->notNull(),
            'DISCIPLINA_ID' => $this->integer(),
            'OFERTA_ID' => $this->integer(),
        ]);
        $this->addForeignKey('disciplina_fk_det', 'DETALHEOFERTA', 'DISCIPLINA_ID', 'DISCIPLINA', 'ID', 'RESTRICT');
        $this->addForeignKey('oferta_fk_det', 'DETALHEOFERTA', 'OFERTA_ID', 'OFERTA', 'ID', 'RESTRICT');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('disciplina_fk_det', 'DETALHEOFERTA');
        $this->dropForeignKey('oferta_fk_det', 'DETALHEOFERTA');
        $this->dropTable('DETALHEOFERTA');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230721_191819_DetalheOferta cannot be reverted.\n";

        return false;
    }
    */
}
