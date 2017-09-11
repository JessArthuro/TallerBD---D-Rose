<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tallas".
 *
 * @property string $id
 * @property string $numero
 *
 * @property Catalagos[] $catalagos
 */
class Tallas extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tallas';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['numero'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'numero' => Yii::t('app', 'Numero'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCatalagos()
    {
        return $this->hasMany(Catalagos::className(), ['nu_talla' => 'id']);
    }
    
        
             public static function getAll() {
	$grupos [] = "Seleccionar...";
	foreach (Tallas::find()->all() as $registro) {
	$grupos [$registro -> id] = $registro-> numero;
	
	}
	return $grupos;
}
    
}
