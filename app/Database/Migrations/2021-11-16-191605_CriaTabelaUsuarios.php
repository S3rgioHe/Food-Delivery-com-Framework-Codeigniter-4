<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CriaTabelaUsuarios extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => '128',
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => '128',
            ],
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => '128',
            ],      
            'cpf' => [
                'type' => 'VARCHAR',
                'constraint' => '15',
                'null' => true,
            ],  
            'telefone' => [
                'type' => 'VARCHAR',
                'constraint' => '20',
            ], 
            'is_admin' => [
                'type' => 'BOOLEAN',
                'null' => false,
                'default' => false,
            ],
            'ativo' => [
                'type' => 'BOOLEAN',
                'null' => false,
                'default' => false,
            ],
            'password_hash' => [
                'constraint' => '64',
                'unique' => true,
            ],
            'ativacao_hash' => [
                'type' => 'varchar',
                'constraint' => '64',
                'unique' => true,
            ],
            'reset_hash' => [
                'type' => 'varchar',
                'constraint' => '64',
                'unique' => true,
            ],
            'reset_expira_em' => [
                'type' => 'DATETIME',
                'null' => true,
                'default' => null,
            ],
            'criado_em' => [
                'type' => 'DATETIME',
                'null' => true,
                'default' => null,
            ],
            'atualizado_em' => [
                'type' => 'DATETIME',
                'null' => true,
                'default' => null,
            ],
            'deletado_em' => [
                'type' => 'DATETIME',
                'null' => true,
                'default' => null,
            ],
        ]);
        $this->forge->addKey('id')->addUniqueKey('email');
        $this->forge->createTable('usuarios');
    }

    public function down()
    {
        $this->forge->dropTable('users');
    }
}
