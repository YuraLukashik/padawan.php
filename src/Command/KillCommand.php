<?php

namespace Command;

class KillCommand implements CommandInterface
{
    public function run(array $arguments = [])
    {
        die();
    }
}
