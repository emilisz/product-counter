<?php

namespace Tests\Unit;

use Illuminate\Support\Facades\Artisan;
use Tests\TestCase;


class ConsoleCommandTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_console_command_exits_successful()
    {
        $this->artisan('inspire')->assertExitCode(0);
        
    }
}
