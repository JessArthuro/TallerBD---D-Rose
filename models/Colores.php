<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "colores".
 *
 * @property string $id
 * @property string $nombre
 *
 * @property Catalagos[] $catalagos
 */
class Colores extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'colores';
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
        return $this->hasMany(Catalagos::className(), ['nu_color' => 'id']);
    }
    
             public static function getAll() {
	$grupos [] = "Seleccionar...";
	foreach (Colores::find()->all() as $registro) {
	$grupos [$registro -> id] = $registro-> nombre;
	
	}
	return $grupos;
}
    
}
