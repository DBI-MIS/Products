<?php

namespace App\Livewire;

use App\Models\Post;
use App\Models\Product;
use App\Models\User;
use Livewire\Attributes\Reactive;
use Livewire\Component;

class LikeButton extends Component
{
    #[Reactive]
    public Product $product;

    public function toggleLike()
    {
        if(auth()->guest()) {
            return $this->redirect(route('login'), false);
        }

        $user = auth()->user();

        if($user->hasLiked($this->product)) {
            $user->likes()->detach($this->product);
            return;
        }

        $user->likes()->attach($this->product);
    }

    public function render()
    {
        return view('livewire.like-button');
    }
}
