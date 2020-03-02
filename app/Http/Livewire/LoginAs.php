<?php

namespace App\Http\Livewire;

use App\Http\Resources\UserLoginResource;
use App\User;
use Livewire\Component;

class LoginAs extends Component
{
    /** @var string */
    public $selected_user = '';

    /**
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function loginAs ()
    {
        $this->validate([
            'selected_user' => 'required|exists:users,id'
        ]);

        auth()->loginUsingId($this->selected_user);

        return redirect(route('products-page'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function render()
    {
        return view('livewire.login-as', [
            'users' => UserLoginResource::collection(User::get())
        ]);
    }
}
