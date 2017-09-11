<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tipos".
 *
 * @property string $id
 * @property string $nombre
 *
 * @property Catalagos[] $catalagos
 * @property Tipocategorias[] $tipocategorias
 */
class Tipos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tipos';
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
        return $this->hasMany(Catalagos::className(), ['nu_tipo' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTipocategorias()
    {
        return $this->hasMany(Tipocategorias::className(), ['nu_tipo' => 'id']);
    }
    
            public static function getAll() {
	$grupos [] = "Seleccionar...";
	foreach (Tipos::find()->all() as $registro) {
	$grupos [$registro -> id] = $registro-> nombre;
	
	}
	return $grupos;
}
}
