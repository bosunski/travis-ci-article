<?php

namespace App\Listeners;

use App\Events\UserRegistered;
use Illuminate\Auth\Events\Registered;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Log;

class SendVerification implements ShouldQueue
{
	/**
	 * Handle the event.
	 *
	 * @param  UserRegistered  $event
	 * @return void
	 */
	public function handle(UserRegistered $event)
	{
		Log::info('activation', ['user' => $event->user]);
	}
}
