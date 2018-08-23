<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Sysreport;

/**
 * SysreportSearch represents the model behind the search form of `app\models\Sysreport`.
 */
class SysreportSearch extends Sysreport
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'groupid', 'userid'], 'integer'],
            [['reportname', 'sql', 'createdate', 'lastupdate'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Sysreport::find();

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
            'groupid' => $this->groupid,
            'userid' => $this->userid,
            'createdate' => $this->createdate,
            'lastupdate' => $this->lastupdate,
        ]);

        $query->andFilterWhere(['like', 'reportname', $this->reportname])
            ->andFilterWhere(['like', 'sql', $this->sql]);

        return $dataProvider;
    }
}
