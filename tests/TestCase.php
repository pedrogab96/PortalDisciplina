<?php

namespace Tests;

use Faker\Factory;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    /**
     * @var \Faker\Generator
     */
    protected $faker;

    /**
     * @var string
     */
    protected $path = '/api/v1/';

    /**
     * Setup the test environment.
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        Artisan::call('db:seed');
        $this->faker = Factory::create('pt_BR');
    }
}
