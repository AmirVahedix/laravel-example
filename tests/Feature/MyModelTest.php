<?php

use AmirVahedix\Example\Models\MyModel;
use Illuminate\Support\Facades\DB;

it('can create a model', function () {
    $myModel = MyModel::factory()->create();
    $this->assertModelExists($myModel);
});

it('can return uppercase value of name', function () {
    $myModel = MyModel::factory()->create(['name' => 'amir']);
    expect($myModel->getUppercasedName())->toEqual('AMIR');
});

it('can use json queries', function () {
    $models = DB::table('my_models')
        ->whereJsonContains('options->languages', 'en')
        ->get();

    expect($models)->toHaveCount(0);
});
