<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "book".
 *
 * @property int $id
 * @property int $author_id
 * @property string $title
 * @property int $numbers_of_pages
 * @property string $genre
 *
 * @property Author $author
 */
class Book extends \yii\db\ActiveRecord
{
    public $authorFullName;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'book';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['author_id', 'numbers_of_pages', 'title', 'genre'], 'required'],
            [['author_id', 'numbers_of_pages'], 'integer'],
            [['title', 'genre'], 'string', 'max' => 255],
            [['author_id'], 'exist', 'skipOnError' => true, 'targetClass' => Author::className(), 'targetAttribute' => ['author_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'author_id' => 'Author',
            'title' => 'Title',
            'numbers_of_pages' => 'Numbers Of Pages',
            'genre' => 'Genre',
            'authorFullName' => 'Author',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAuthor()
    {
        return $this->hasOne(Author::className(), ['id' => 'author_id']);
    }
}