<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "categorias".
 *
 * @property string $id
 * @property string $nombre
 *
 * @property Catalagos[] $catalagos
 * @property Tipocategorias[] $tipocategorias
 */
class Categorias extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'categorias';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre'], 'required'],
            [['nombre'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'nombre' => Yii::t('app', 'Nombre'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCatalagos()
    {
        return $this->hasMany(Catalagos::className(), ['nu_categoria' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTipocategorias()
    {
        return $this->hasMany(Tipocategorias::className(), ['nu_categoria' => 'id']);
    }
    
                public static function getAll() {
	$grupos [] = "Seleccionar...";
	foreach (Categorias::find()->all() as $registro) {
	$grupos [$registro -> id] = $registro-> nombre;
	
	}
	return $grupos;
}
    
}
