<?php

namespace Orchid\Foundation\Listeners\Systems\Settings;

use Orchid\Foundation\Events\Systems\SettingsEvent;
use Orchid\Foundation\Http\Forms\Systems\Settings\InfoForm;

class SettingInfoListener
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
    }

    /**
     * Handle the event.
     *
     * @param SettingsEvent $event
     */
    public function handle(SettingsEvent $event)
    {
        return InfoForm::class;
    }
}
