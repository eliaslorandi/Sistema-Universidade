<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "curso".
 *
 * @property int $ID
 * @property string $NOME
 * @property int|null $CH_TOTAL
 * @property int|null $Q_PERIODOS
 * @property string|null $SIGLA
 *
 * @property Coordena[] $coordenas
 * @property Matriz[] $matrizs
 * @property Usuario[] $uSUARIOs
 */
class Curso extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'curso';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['NOME'], 'required', 'message'=>'Preencha um nome!'],
            [['CH_TOTAL', 'Q_PERIODOS'], 'integer', 'message'=>'Preencha somente com números!'],
            [['NOME'], 'string', 'max' => 99],
            [['SIGLA'], 'string', 'max' => 10],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'NOME' => 'Nome',
            'CH_TOTAL' => 'Carga Horária Total',
            'Q_PERIODOS' => 'Quantidade de Periodos',
            'SIGLA' => 'Sigla',
        ];
    }

    /**
     * Gets query for [[Coordenas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCoordenas()
    {
        return $this->hasMany(Coordena::class, ['CURSO_ID' => 'ID']);
    }

    /**
     * Gets query for [[Matrizs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMatrizs()
    {
        return $this->hasMany(Matriz::class, ['CURSO_ID' => 'ID']);
    }

    /**
     * Gets query for [[USUARIOs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUSUARIOs()
    {
        return $this->hasMany(Usuario::class, ['ID' => 'USUARIO_ID'])->viaTable('coordena', ['CURSO_ID' => 'ID']);
    }
}
