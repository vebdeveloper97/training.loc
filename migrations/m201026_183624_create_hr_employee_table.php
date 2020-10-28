<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%hr_employee}}`.
 */
class m201026_183624_create_hr_employee_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%hr_employee}}', [
            'id' => $this->primaryKey(),
            'fish' => $this->char(100)->notNull(),
            'of_brith' => $this->date()->notNull(),
            'passport_series' => $this->char(10)->notNull(),
            'phone' => $this->char(15)->notNull(),
            'inn' => $this->integer(15),
            'jins' => $this->char(10)->notNull(),
            'adress' => $this->char(50)->notNull(),
            'by_whom' => $this->char(100)->notNull(),
            'add_info' => $this->text(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
            'created_by' => $this->integer(),
            'updated_by' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%hr_employee}}');
    }
}
