<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "coordena".
 *
 * @property int $USUARIO_ID
 * @property int $CURSO_ID
 * @property string|null $INICIO
 * @property string|null $FIM
 *
 * @property Curso $cURSO
 * @property Usuario $uSUARIO
 */
class Coordena extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'coordena';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['USUARIO_ID', 'CURSO_ID'], 'required'],
            [['USUARIO_ID', 'CURSO_ID'], 'integer'],
            [['INICIO', 'FIM'], 'safe'],
            [['USUARIO_ID', 'CURSO_ID'], 'unique', 'targetAttribute' => ['USUARIO_ID', 'CURSO_ID']],
            [['CURSO_ID'], 'exist', 'skipOnError' => true, 'targetClass' => Curso::class, 'targetAttribute' => ['CURSO_ID' => 'ID']],
            [['USUARIO_ID'], 'exist', 'skipOnError' => true, 'targetClass' => Usuario::class, 'targetAttribute' => ['USUARIO_ID' => 'ID']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'USUARIO_ID' => 'Usuario ID',
            'CURSO_ID' => 'Curso ID',
            'INICIO' => 'Inicio',
            'FIM' => 'Fim',
        ];
    }

    /**
     * Gets query for [[CURSO]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCURSO()
    {
        return $this->hasOne(Curso::class, ['ID' => 'CURSO_ID']);
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
