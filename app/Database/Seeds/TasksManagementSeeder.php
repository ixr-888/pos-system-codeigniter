<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class TasksManagementSeeder extends Seeder
{
    public function run()
    {
        $this->db->table('tasks')->insertBatch([
            [
                'title' => 'Check daily sales report',
                'status' => 'pending',
                'task_date' => '2026-09-28',
                'created_at' => '2026-09-28 08:00:00'
            ],
            [
                'title' => 'Review customer accounts',
                'status' => 'pending',
                'task_date' => '2026-09-28',
                'created_at' => '2026-09-28 09:00:00'
            ],
            [
                'title' => 'Update inventory records',
                'status' => 'done',
                'task_date' => '2026-09-28',
                'created_at' => '2026-09-28 10:00:00'
            ],
            [
                'title' => 'Prepare weekly report',
                'status' => 'pending',
                'task_date' => '2026-09-29',
                'created_at' => '2026-09-28 11:00:00'
            ],
            [
                'title' => 'Check product stock',
                'status' => 'pending',
                'task_date' => '2026-09-29',
                'created_at' => '2026-09-28 12:00:00'
            ],
            [
                'title' => 'Review employee schedules',
                'status' => 'done',
                'task_date' => '2026-09-30',
                'created_at' => '2026-09-28 13:00:00'
            ],
            [
                'title' => 'Organize sales documents',
                'status' => 'pending',
                'task_date' => '2026-09-30',
                'created_at' => '2026-09-28 14:00:00'
            ],
            [
                'title' => 'Backup system records',
                'status' => 'pending',
                'task_date' => '2026-09-30',
                'created_at' => '2026-09-28 15:00:00'
            ]
        ]);

        $this->db->table('users')->insert([
            'username' => 'demo_user',
            'full_name' => 'Juan Dela Cruz',
            'email' => 'juan.delacruz@example.com',
            'created_at' => '2026-09-28 08:00:00'
        ]);
    }
}