<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tipocategorias".
 *
 * @property string $id
 * @property string $nu_tipo
 * @property string $nu_categoria
 *
 * @property Categorias $nuCategoria
 * @property Tipos $nuTipo
 */
class Tipocategorias extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tipocategorias';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nu_tipo', 'nu_categoria'], 'required'],
            [['nu_tipo', 'nu_categoria'], 'integer'],
            [['nu_categoria'], 'exist', 'skipOnError' => true, 'targetClass' => Categorias::className(), 'targetAttribute' => ['nu_categoria' => 'id']],
            [['nu_tipo'], 'exist', 'skipOnError' => true, 'targetClass' => Tipos::className(), 'targetAttribute' => ['nu_tipo' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'nu_tipo' => Yii::t('app', 'Nu Tipo'),
            'tipo.nombre' => Yii::t('app', 'Tipo de Calzado'),
            'nu_categoria' => Yii::t('app', 'Nu Categoria'),
            'categoria.nombre' => Yii::t('app', 'Categoria(s)'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getnuCategoria()
    {
        return $this->hasOne(Categorias::className(), ['id' => 'nu_categoria']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTipo()
    {
        return $this->hasOne(Tipos::className(), ['id' => 'nu_tipo']);
    }
}
