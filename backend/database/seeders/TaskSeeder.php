<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Task;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // очищаем таблицу
        Task::query()->delete();

        // вставляем тестовые данные
        Task::insert([
            [
                'title' => 'Task 1',
                'description' => 'First task',
                'status' => 'todo',
                'album_number' => '78719',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Task 2',
                'description' => 'Second task',
                'status' => 'doing',
                'album_number' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Task 3',
                'description' => 'Third task',
                'status' => 'done',
                'album_number' => '78719',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
