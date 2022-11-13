<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Products extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
               'type' => 'INT',
               'unsigned' => true,
               'auto_increment' => true,
             ],
            'title' => [
               'type' => 'VARCHAR',
               'constraint' => 100,
             ],
            'body' => [
               'type' => 'TEXT',
             ],
            'picture' => [
                 'type' => 'VARCHAR',
                 'constraint' => 100,
             ],
            'created_at DATETIME DEFAULT CURRENT_TIMESTAMP',
            'updated_at DATETIME DEFAULT CURRENT_TIMESTAMP'
         ]);
      
         $this->forge->addPrimaryKey('id');
         $this->forge->createTable('tbl_post');
    }

    public function down()
    {
        $this->forge->dropTable('tbl_post');
    }
}
