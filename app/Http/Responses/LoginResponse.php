<?php

namespace App\Http\Responses;

class LoginResponse implements \Filament\Http\Responses\Auth\Contracts\LoginResponse
{


    public function toResponse($request)
    {
        // TODO: Implement toResponse() method.
        return redirect()->intended(route('filament.resources.posts.index'));
    }

}
