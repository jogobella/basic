<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cms_article".
 *
 * @property integer $id_art
 * @property integer $id_cat
 * @property string $art_title
 * @property string $art_text
 *
 * @property CmsCategory $idCat
 * @property CmsCategory $cmsCategory
 */
class CmsArticle extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cms_article';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_cat'], 'integer'],
            [['art_title'], 'required'],
            [['art_text'], 'string'],
            [['art_title'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_art' => 'Id Art',
            'id_cat' => 'Id Cat',
            'art_title' => 'Art Title',
            'art_text' => 'Art Text',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdCat()
    {
        return $this->hasOne(CmsCategory::className(), ['id_cat' => 'id_cat']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCmsCategory()
    {
        return $this->hasOne(CmsCategory::className(), ['id_cat' => 'id_cat']);
    }
}
