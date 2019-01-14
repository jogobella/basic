<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cms_category".
 *
 * @property integer $id_cat
 * @property string $cat_title
 *
 * @property CmsArticle[] $cmsArticles
 * @property CmsArticle $idCat
 */
class CmsCategory extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cms_category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cat_title'], 'required'],
            [['cat_title'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_cat' => 'Id Cat',
            'cat_title' => 'Cat Title',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCmsArticles()
    {
        return $this->hasMany(CmsArticle::className(), ['id_cat' => 'id_cat']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdCat()
    {
        return $this->hasOne(CmsArticle::className(), ['id_cat' => 'id_cat']);
    }
}
