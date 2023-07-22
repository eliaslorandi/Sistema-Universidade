<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "oferta".
 *
 * @property int $ID
 * @property string $SEMESTRE_INICIO
 * @property int|null $MATRIZ_ID
 * @property int|null $USUARIO_ID
 * @property string $DATA_REGISTRO
 *
 * @property Matriz $mATRIZ
 * @property Usuario $uSUARIO
 */
class Oferta extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'oferta';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['SEMESTRE_INICIO', 'DATA_REGISTRO'], 'required'],
            [['MATRIZ_ID', 'USUARIO_ID'], 'integer'],
            [['SEMESTRE_INICIO'], 'string', 'max' => 10],
            [['DATA_REGISTRO'], 'string', 'max' => 255],
            [['MATRIZ_ID'], 'exist', 'skipOnError' => true, 'targetClass' => Matriz::class, 'targetAttribute' => ['MATRIZ_ID' => 'ID']],
            [['USUARIO_ID'], 'exist', 'skipOnError' => true, 'targetClass' => Usuario::class, 'targetAttribute' => ['USUARIO_ID' => 'ID']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'SEMESTRE_INICIO' => 'Semestre Inicio',
            'MATRIZ_ID' => 'Matriz ID',
            'USUARIO_ID' => 'Usuario ID',
            'DATA_REGISTRO' => 'Data Registro',
        ];
    }

    /**
     * Gets query for [[MATRIZ]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMATRIZ()
    {
        return $this->hasOne(Matriz::class, ['ID' => 'MATRIZ_ID']);
    }

    /**
     * Gets query for [[USUARIO]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUSUARIO()
    {
        return $this->hasOne(Usuario::class, ['ID' => 'USUARIO_ID']);
    }
}
