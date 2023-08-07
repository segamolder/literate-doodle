<?php

namespace Services;

use Services\Sender\Sender;

class SettingService
{
    public function __construct(
        private CodeService $codeService,
    )
    {
    }

    public function update(Sender $sender)
    {
        /*
         * Do something else
         */

        $message =
            $this
                ->codeService
                ->generate()
                ->getMessage();
        $sender->send($message);

        /*
         * Do something else
         */
    }
}
