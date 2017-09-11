<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Catalagos;

/**
 * CatalagosSearch represents the model behind the search form about `app\models\Catalagos`.
 */
class CatalagosSearch extends Catalagos
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'modelo', 'nu_tipo', 'nu_categoria', 'nu_talla', 'nu_color', 'precio'], 'integer'],
            [['imagen', 'tipo.nombre'], 'safe'],
        ];
    }

    public function attributes() {
        return array_merge(parent::attributes(), ['tipo.nombre']);
    }
    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Catalagos::find()
                ->joinWith('tipo');

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'modelo' => $this->modelo,
            'nu_tipo' => $this->nu_tipo,
            'nu_categoria' => $this->nu_categoria,
            'nu_talla' => $this->nu_talla,
            'nu_color' => $this->nu_color,
            'precio' => $this->precio,
        ]);

        $query->andFilterWhere(['like', 'imagen', $this->imagen])
                ->andFilterWhere(['like', 'tipos.nombre', $this->getAttribute('tipo.nombre')]);

        return $dataProvider;
    }
}
