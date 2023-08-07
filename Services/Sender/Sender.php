<?php

namespace Services\Sender;

interface Sender
{
    public function send(string $message): void;
}
