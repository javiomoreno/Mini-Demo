<?php

namespace app\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\MidSubCategorias;

/**
 * MidSubCategoriasSearch represents the model behind the search form about `app\models\MidSubCategorias`.
 */
class MidSubCategoriasSearch extends MidSubCategorias
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sucaiden', 'mid_categorias_cateiden'], 'integer'],
            [['sucanomb', 'sucadesc'], 'safe'],
        ];
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
        $query = MidSubCategorias::find();

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
            'sucaiden' => $this->sucaiden,
            'mid_categorias_cateiden' => $this->mid_categorias_cateiden,
        ]);

        $query->andFilterWhere(['like', 'sucanomb', $this->sucanomb])
            ->andFilterWhere(['like', 'sucadesc', $this->sucadesc]);

        return $dataProvider;
    }
}
