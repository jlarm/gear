<?php

namespace App\Observers;

use Illuminate\Support\Str;

class ItemObserver
{
    public function creating($item): void
    {
        $item->user_id = auth()->id();
        $item->uuid = (string) Str::uuid();
    }
}
