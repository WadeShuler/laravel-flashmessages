<?php

namespace wadeshuler\FlashMessages\Tests;

use wadeshuler\FlashMessages\FlashMessagesProvider;

class TestCase extends \Orchestra\Testbench\TestCase
{
    //protected $loadEnvironmentVariables = true;

    public function setUp(): void
    {
        // Code before application created.

        parent::setUp();

        // Code after application created.
    }

    /**
     * Get package providers.
     *
     * @param  \Illuminate\Foundation\Application  $app
     *
     * @return array
     */
    protected function getPackageProviders($app)
    {
        return [
            FlashMessagesProvider::class,
        ];
    }

    /**
     * Override application aliases.
     *
     * @param  \Illuminate\Foundation\Application  $app
     *
     * @return array
     */
    protected function overrideApplicationProviders($app)
    {
        return [
            'FlashMessages' => 'wadeshuler\FlashMessages\Facades\FlashMessages',
        ];
    }

    protected function getEnvironmentSetUp($app)
    {
        // perform environment setup
    }
}
