<?php

namespace common\models;
use common\models\Anchor;
use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;

/**
 * AnchorSearch represents the model behind the search form about `backend\models\Anchor`.
 */
class AnchorSearch extends Anchor
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['num', 'sort'], 'integer'],
            [['name'], 'string', 'max' => 10],
            [['url'], 'string', 'max' => 255],
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
        $query = Anchor::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 300,
            ],
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'num' => $this->num,
            'name' => $this->name,
            'url' => $this->url,
            'sort' => $this->sort,

        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'num', $this->num])
            ->andFilterWhere(['like', 'url', $this->url])
            ->andFilterWhere(['like', 'sort', $this->sort]);

        
        /* 排序 */
        $query->orderBy([
            'sort' => SORT_ASC,
            'id' => SORT_DESC,
        ]);

        return $dataProvider;
    }
}
