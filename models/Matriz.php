<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "matriz".
 *
 * @property int $ID
 * @property string|null $SIGLA
 * @property int|null $CH_TOTAL
 * @property int|null $CURSO_ID
 *
 * @property Curso $cURSO
 * @property Disciplina[] $disciplinas
 * @property Oferta[] $ofertas
 */
class Matriz extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'matriz';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['CH_TOTAL', 'CURSO_ID'], 'integer'],
            [['SIGLA'], 'string', 'max' => 99],
            [['CURSO_ID'], 'exist', 'skipOnError' => true, 'targetClass' => Curso::class, 'targetAttribute' => ['CURSO_ID' => 'ID']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'SIGLA' => 'Sigla',
            'CH_TOTAL' => 'Ch Total',
            'CURSO_ID' => 'Curso ID',
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
     * Gets query for [[Disciplinas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDisciplinas()
    {
        return $this->hasMany(Disciplina::class, ['MATRIZ_ID' => 'ID']);
    }

    /**
     * Gets query for [[Ofertas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOfertas()
    {
        return $this->hasMany(Oferta::class, ['MATRIZ_ID' => 'ID']);
    }
}
