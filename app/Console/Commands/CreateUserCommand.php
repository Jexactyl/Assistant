<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\Hashing\Hasher;

class CreateUserCommand extends Command
{
    private Hasher $hasher;

    /**
     * @var string
     */
    protected $description = 'Creates a user.';

    /**
     * @var string
     */
    protected $signature = 'p:user:create {--email=} {--password=}';

    /**
     * CreationService constructor.
     */
    public function __construct(Hasher $hasher)
    {
        parent::__construct();
        $this->hasher = $hasher;
    }

    /**
     * Handle command request to create a new user.
     *
     * @throws \Exception
     */
    public function handle()
    {
        $email = $this->option('email') ?? $this->ask('Email Address');
        $password = $this->option('password') ?? $this->ask('Password');

        DB::table('users')->insert([
            'email' => $email,
            'password' => $this->hasher->make($password),
        ]);
    }
}