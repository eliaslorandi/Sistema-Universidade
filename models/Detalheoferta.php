<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "detalheoferta".
 *
 * @property int $ID
 * @property string $ANOSEMESTRE
 * @property int|null $DISCIPLINA_ID
 * @property int|null $OFERTA_ID
 */
class Detalheoferta extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'detalheoferta';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ANOSEMESTRE'], 'required'],
            [['DISCIPLINA_ID', 'OFERTA_ID'], 'integer'],
            [['ANOSEMESTRE'], 'string', 'max' => 10],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'ANOSEMESTRE' => 'Anosemestre',
            'DISCIPLINA_ID' => 'Disciplina ID',
            'OFERTA_ID' => 'Oferta ID',
        ];
    }
}
