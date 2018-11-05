<?php

namespace App\Listeners;

use App\Events\UserRegistered;
use Illuminate\Support\Facades\Log;

class AssignRole
{
	/**
	 * Handle the event.
	 *
	 * @param  \Illuminate\Auth\Events\Registered  $event
	 * @return void
	 */
	public function handle(UserRegistered $event)
	{
		Log::info('role', ['user' => $event->user]);
	}
}
