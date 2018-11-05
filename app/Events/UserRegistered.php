<?php

namespace App\Events;

use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\SerializesModels;

class UserRegistered
{
	use Dispatchable, InteractsWithSockets, SerializesModels;

	/**
	 * The authenticated user.
	 *
	 * @var \Illuminate\Contracts\Auth\Authenticatable
	 */
	public $user;

	/**
	 * Create a new event instance.
	 *
	 * @param  \Illuminate\Contracts\Auth\Authenticatable  $user
	 * @return void
	 */
	public function __construct($user)
	{
//		dd($user);
		$this->user = $user;
	}
}
