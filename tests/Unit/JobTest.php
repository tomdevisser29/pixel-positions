<?php

test('that it belongs to an employer', function () {
    /**
     * Arrange, Act, Assert
     */
    $employer = App\Models\Employer::factory()->create();
    $job = App\Models\Job::factory(['employer_id' => $employer->id])->create();

    expect($job->employer)->is($employer)->toBeTrue();
});
