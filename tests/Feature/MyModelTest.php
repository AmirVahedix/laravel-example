<?php

use AmirVahedix\Example\Models\MyModel;

it('can create a model', function () {
    $myModel = MyModel::factory()->create();
    $this->assertModelExists($myModel);
});

it ('can return uppercase value of name', function () {
   $myModel = MyModel::factory()->create(['name' => 'amir']);
   expect($myModel->getUppercasedName())->toEqual('AMIR');
});
