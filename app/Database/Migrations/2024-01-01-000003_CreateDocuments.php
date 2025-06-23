<?php
namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateDocuments extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => ['type' => 'INT', 'auto_increment' => true],
            'title' => ['type' => 'VARCHAR', 'constraint' => 255],
            'filename' => ['type' => 'VARCHAR', 'constraint' => 255],
            'category_id' => ['type' => 'INT', 'null' => true],
            'uploaded_by' => ['type' => 'INT', 'null' => true],
            'created_at' => [
            'type' => 'DATETIME',
            'null' => true,
            'default' => null,
]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('documents');
    }

    public function down()
    {
        $this->forge->dropTable('documents');
    }
}