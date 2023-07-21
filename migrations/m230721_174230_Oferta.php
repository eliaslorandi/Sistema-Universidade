<?php

use yii\db\Migration;

/**
 * Class m230721_174230_Oferta
 */
class m230721_174230_Oferta extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('OFERTA',[
           'ID' => $this->primaryKey(),
           'SEMESTRE_INICIO' => $this->string(10)->notNull(),
           'MATRIZ_ID' => $this->integer(),
           'USUARIO_ID' => $this->integer(),
           'DATA_REGISTRO' => $this->string()->notNull(),
        ]);
        $this->addForeignKey('matriz_fk_ofe', 'OFERTA', 'MATRIZ_ID', 'MATRIZ', 'ID', 'RESTRICT');
        $this->addForeignKey('usuario_fk_ofe', 'OFERTA', 'USUARIO_ID', 'USUARIO', 'ID', 'RESTRICT');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('matriz_fk_ofe', 'OFERTA');
        $this->dropForeignKey('usuario_fk_ofe', 'OFERTA');
        $this->dropTable('OFERTA');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230721_174230_Oferta cannot be reverted.\n";

        return false;
    }
    */
}
