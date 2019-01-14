<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\CmsArticle;

/**
 * ArticleSearch represents the model behind the search form about `app\models\CmsArticle`.
 */
class ArticleSearch extends CmsArticle
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_art', 'id_cat'], 'integer'],
            [['art_title', 'art_text'], 'safe'],
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
        $query = CmsArticle::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id_art' => $this->id_art,
            'id_cat' => $this->id_cat,
        ]);

        $query->andFilterWhere(['like', 'art_title', $this->art_title])
            ->andFilterWhere(['like', 'art_text', $this->art_text]);

        return $dataProvider;
    }
}
