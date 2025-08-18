<?php

namespace App\Actions\Chanels;

use App\Models\Coin;
use Lorisleiva\Actions\Concerns\AsAction;

class ChannelTikIndex
{
    use AsAction;

    public function handle()
    {
        $channel = Coin::query()->get();
        return view('channel.channelTik', compact('channel'));
    }
}
