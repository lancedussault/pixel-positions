<?php

it('belongs to employer', function () {
    //Arrange
    $employer = App\Models\Employer::factory()->create();
    $job = App\Models\Job::factory()->create([
        'employer_id' => $employer->id
    ]);
    //Act & Assert
    expect($job->employer->is($employer))->toBeTrue();
});

it('can have tags', function () {
    $job = App\Models\Job::factory()->create();

    $job->tag('Frontend');

    expect($job->tags)->toHaveCount(1);
});