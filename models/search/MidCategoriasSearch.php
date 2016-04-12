<?php

namespace app\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\MidCategorias;

/**
 * MidCategoriasSearch represents the model behind the search form about `app\models\MidCategorias`.
 */
class MidCategoriasSearch extends MidCategorias
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cateiden', 'mid_usuarios_usuaiden'], 'integer'],
            [['catenomb', 'catedesc'], 'safe'],
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
        $query = MidCategorias::find();

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
            'cateiden' => $this->cateiden,
            'mid_usuarios_usuaiden' => $this->mid_usuarios_usuaiden,
        ]);

        $query->andFilterWhere(['like', 'catenomb', $this->catenomb])
            ->andFilterWhere(['like', 'catedesc', $this->catedesc]);

        return $dataProvider;
    }
}
