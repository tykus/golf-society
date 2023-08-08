<?php

use App\Models\Course;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

uses(TestCase::class, RefreshDatabase::class);

it('has a total par for the Course', function () {
    $course = Course::factory()
        ->hasHoles(18, ['par' => 4])
        ->create();

    expect($course->par)->toBe(72);
});
