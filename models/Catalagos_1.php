<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "catalagos".
 *
 * @property string $id
 * @property integer $modelo
 * @property integer $nu_tipo
 * @property string $nu_categoria
 * @property string $nu_talla
 * @property string $nu_color
 * @property integer $precio
 * @property string $imagen
 *
 * @property Categorias $nuCategoria
 * @property Colores $nuColor
 * @property Tallas $nuTalla
 * @property Tipos $nuTipo
 */
class Catalagos_1 extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sddssd';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['modelo', 'nu_tipo', 'nu_categoria', 'nu_talla', 'nu_color', 'precio', 'imagen'], 'required'],
            [['modelo', 'nu_tipo', 'nu_categoria', 'nu_talla', 'nu_color', 'precio'], 'integer'],
            [['imagen'], 'string'],
            [['nu_categoria'], 'exist', 'skipOnError' => true, 'targetClass' => Categorias::className(), 'targetAttribute' => ['nu_categoria' => 'id']],
            [['nu_color'], 'exist', 'skipOnError' => true, 'targetClass' => Colores::className(), 'targetAttribute' => ['nu_color' => 'id']],
            [['nu_talla'], 'exist', 'skipOnError' => true, 'targetClass' => Tallas::className(), 'targetAttribute' => ['nu_talla' => 'id']],
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
            'modelo' => Yii::t('app', 'Codigo'),
            'nu_tipo' => Yii::t('app', 'Tipo de Calzado'),
            'tipo.nombre' => Yii::t('app', 'Tipo de Calzado'),
            'nu_categoria' => Yii::t('app', 'Categoria'),
            'categoria.nombre' => Yii::t('app', 'Categoria'),
            'nu_talla' => Yii::t('app', 'Talla'),
            'talla.numero' => Yii::t('app', 'Talla'),
            'nu_color' => Yii::t('app', 'Modelo'),
            'color.nombre' => Yii::t('app', 'Modelo'),
            'precio' => Yii::t('app', 'Precio'),
            'imagen' => Yii::t('app', 'Imagen'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNuCategoria()
    {
        return $this->hasOne(Categorias::className(), ['id' => 'nu_categoria']);
    }
    
     public function getCategoria()
    {
        return $this->hasOne(Categorias::className(), ['id' => 'nu_categoria']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNuColor()
    {
        return $this->hasOne(Colores::className(), ['id' => 'nu_color']);
    }
    
     public function getColor()
    {
        return $this->hasOne(Colores::className(), ['id' => 'nu_color']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNuTalla()
    {
        return $this->hasOne(Tallas::className(), ['id' => 'nu_talla']);
    }

      public function getTalla()
    {
        return $this->hasOne(Tallas::className(), ['id' => 'nu_talla']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNuTipo()
    {
        return $this->hasOne(Tipos::className(), ['id' => 'nu_tipo']);
    }
    
        public function getTipo()
    {
        return $this->hasOne(Tipos::className(), ['id' => 'nu_tipo']);
    }
    
}
