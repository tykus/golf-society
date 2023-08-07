<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder as BaseSeeder;

class Seeder extends BaseSeeder
{
    protected string $model;
    protected string $table;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        throw_unless(class_exists($this->model), new \Exception('No model class'));
        throw_unless($this->model, new \Exception('No table key provided'));

        $seeds = json_decode(file_get_contents(__DIR__ . '/seeds.json'), true);

        foreach($seeds[$this->table] ?? [] as $data) {
            $this->model::factory()->create($data);
        }
    }
}
