<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "nucleo".
 *
 * @property int $ID
 * @property string|null $NOME
 *
 * @property Disciplina[] $disciplinas
 * @property Usuario[] $usuarios
 */
class Nucleo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'nucleo';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['NOME'], 'string', 'max' => 99],
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
        ];
    }

    /**
     * Gets query for [[Disciplinas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDisciplinas()
    {
        return $this->hasMany(Disciplina::class, ['NUCLEO_ID' => 'ID']);
    }

    /**
     * Gets query for [[Usuarios]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUsuarios()
    {
        return $this->hasMany(Usuario::class, ['NUCLEO_ID' => 'ID']);
    }
}
