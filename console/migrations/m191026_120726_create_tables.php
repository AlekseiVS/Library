<?php

use yii\db\Migration;

/**
 * Class m191026_120726_create_tables
 */
class m191026_120726_create_tables extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('author', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'surname' => $this->string()->notNull(),
            'age' => $this->integer(),
        ]);

        $this->createTable('book', [
            'id' => $this->primaryKey(),
            'author_id' => $this->integer()->notNull(),
            'title' => $this->string(),
            'numbers_of_pages' => $this->integer(),
            'genre' => $this->string(),
        ]);

        $this->addForeignKey(
            'fk-book-author_id',
            'book',
            'author_id',
            'author',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('author');
        $this->dropTable('book');
        $this->dropForeignKey(
            'fk-book-author_id',
            'book'
        );
    }
}
