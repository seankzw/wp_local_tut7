<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UserAuthentication extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => ['type' => 'INT', 'auto_increment' => true],
            'email' => ['type'=> 'VARCHAR', 'constraint' => 200],
            'password'=>['type'=>'VARCHAR', 'constraint' => 200],
            'security_question'=>['type'=>'VARCHAR', 'constraint' => 200],
            'security_answer'=>['type'=>'VARCHAR', 'constraint' => 200],
            'account_balance'=>['type'=>'decimal', 'constraint' => '10,2'],
        ]);

        $this->forge->addKey('id',true);
        $this->forge->createTable('users');
    }

    public function down()
    {
        //
    }
}
