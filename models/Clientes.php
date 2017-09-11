<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "clientes".
 *
 * @property string $id
 * @property string $nombre
 * @property string $paterno
 * @property string $materno
 * @property string $direccion
 * @property integer $telefono
 * @property string $correo
 * @property string $usuario
 */
class Clientes extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'clientes';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre', 'paterno', 'materno', 'telefono', 'usuario'], 'required'],
            [['nombre', 'paterno', 'materno', 'direccion', 'correo', 'usuario'], 'string'],
            [['telefono'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'nombre' => Yii::t('app', 'Nombre(s)'),
            'paterno' => Yii::t('app', 'Apellido Paterno'),
            'materno' => Yii::t('app', 'Apellido Materno'),
            'direccion' => Yii::t('app', 'Direccion'),
            'telefono' => Yii::t('app', 'Telefono'),
            'correo' => Yii::t('app', 'Correo'),
            'usuario' => Yii::t('app', 'Usuario'),
        ];
    }
}
