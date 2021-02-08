<?php

use CocoaStudio\Component\Testing\TestCase as BaseTestCase;

/**
 * Class TestCase
 *
 * @author Luyanda Siko <sikoluyanda@gmail.com>
 */
abstract class TestCase extends BaseTestCase
{
    /**
     * Creates the application.
     *
     * @return \Laravel\Lumen\Application
     */
    public function createApplication()
    {
        return require __DIR__ . '/../bootstrap/app.php';
    }
}
