<?php

namespace App\Actions\Chanels;

use Lorisleiva\Actions\Concerns\AsAction;

class ChannelTikIndex
{
    use AsAction;

    public function handle()
    {
        return view('channel.channelTik');
    }
}
