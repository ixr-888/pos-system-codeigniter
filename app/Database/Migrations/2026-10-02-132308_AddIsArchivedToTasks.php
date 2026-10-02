<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddIsArchivedToTasks extends Migration
{
    public function up()
    {
        $this->forge->addColumn('tasks', [
            'is_archived' => [
                'type'       => 'BOOLEAN',
                'default'    => false,
                'after'      => 'created_at',
            ],
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('tasks', 'is_archived');
    }
}