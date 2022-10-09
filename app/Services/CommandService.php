<?php

namespace App\Services;

use Exception;
use Symfony\Component\Process\Process;

class CommandService
{
    public function handle(string $input): bool
    {
        try {
            Process::fromShellCommandline($input)->run();
        } catch (Exception $ex) {
            throw new DisplayException('An error occured while running that command:' + $ex->getMessage());
            return false;
        };

        return true;
    }
}