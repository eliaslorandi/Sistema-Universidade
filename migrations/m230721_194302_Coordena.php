<?php

use yii\db\Migration;

/**
 * Class m230721_194302_Coordena
 */
class m230721_194302_Coordena extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('COORDENA', [
            'USUARIO_ID' => $this->integer(),
            'CURSO_ID' => $this->integer(),
            'INICIO' => $this->date(),
            'FIM' => $this->date(),
        ]);
        $this->addPrimaryKey('coordena_pk', 'COORDENA', ['USUARIO_ID', 'CURSO_ID']);
        $this->addForeignKey('usuario_fk_coo', 'COORDENA', 'USUARIO_ID', 'USUARIO', 'ID', 'RESTRICT', 'RESTRICT');
        $this->addForeignKey('curso_fk_coo', 'COORDENA', 'CURSO_ID', 'CURSO', 'ID', 'RESTRICT', 'RESTRICT');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('usuario_fk_coo', 'COORDENA');
        $this->dropForeignKey('curso_fk_coo', 'COORDENA');
        $this->dropTable('COORDENA');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230721_194302_Coordena cannot be reverted.\n";

        return false;
    }
    */
}
