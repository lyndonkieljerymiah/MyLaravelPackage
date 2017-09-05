<?php 


namespace Supports\Traits;


use Illuminate\Support\Facades\Auth;

trait UserTrait
{
    public function setUser() {
        $this->user_id = Auth::user()->getAuthIdentifier();
    }

    public function getCurrentUserId() {
        return Auth::user()->getAuthIdentifier();
    }

    public function getCurrentUser() {
        return Auth::user();
    }
}



