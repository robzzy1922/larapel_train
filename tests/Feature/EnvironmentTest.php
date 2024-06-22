<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Env;
use Tests\TestCase;

use function PHPUnit\Framework\assertEquals;

class EnvironmentTest extends TestCase
{
    public function testEnv()
    {
        $appName = env("IG");

        self::assertEquals("robiasaaja", $appName);

    }

    public function testDeafaultEnv()
    {
        $author = env("AUTHOR", "Robi");

        self::assertEquals("Robi", $author);
    }


}