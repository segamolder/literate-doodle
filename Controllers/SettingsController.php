<?php

use Services\SettingService;
use Enums\SenderType;

class SettingsController
{
    public function __construct(
        private SettingService $settingService
    )
    {
    }

    public function index()
    {
        $settings = $this->settingService->getSettings();
        return view('settings.index', compact('settings'));
    }

    public function update(Request $request)
    {
        /*
         * Do something else
         */

        $senderService = match ($request->post->type) {
            SenderType::SMS => new SmsService(),
            SenderType::EMAIL => new EmailService(),
            SenderType::TELEGRAM => new TelegramService(),
        };

        $this->settingService->update($senderService);

        /*
         * Do something else
         */
    }
}
