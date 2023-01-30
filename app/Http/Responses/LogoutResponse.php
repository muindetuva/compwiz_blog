<?php

namespace App\Http\Responses;


class LogoutResponse implements \Filament\Http\Responses\Auth\Contracts\LogoutResponse
{
    public function toResponse($request)
    {
        // TODO: Implement toResponse() method.
        return redirect()->intended(route('welcome'));
    }
}


