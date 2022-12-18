<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Comment extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'=> 'INT',
                'constraint' => 5,
                'unsigned' => True,
                'auto_increment' => True
        ],
            'title' => [
                'type'=> 'TEXT',
                'constraint' => '20',
                'null' => True
        ],
            'comment' => [
                'type'=> 'TEXT',
                'constraint' => '30',
                'null' => True
        ],
    
        ]);
        $this->forge->addKey('id',True);
        $this->forge->createTable('COMMENTS');
    }

    public function down()
    {
        $this->forge->dropTable('COMMENTS');
    }
}
