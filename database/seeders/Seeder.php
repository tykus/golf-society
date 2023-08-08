<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder as BaseSeeder;

class Seeder extends BaseSeeder
{
    protected string $modelClass;
    protected string $seedKey;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        throw_unless(class_exists($this->modelClass), new \Exception('No model class'));
        throw_unless($this->modelClass, new \Exception('No seed key provided'));

        $seeds = json_decode(file_get_contents(__DIR__ . '/seeds.json'), true);

        foreach($seeds[$this->seedKey] ?? [] as $data) {
            $this->modelClass::factory()->create($data);
        }
    }
}
