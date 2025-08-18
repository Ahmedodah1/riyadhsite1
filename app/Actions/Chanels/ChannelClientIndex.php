<?php

namespace App\Actions\Chanels;

use Lorisleiva\Actions\Concerns\AsAction;

class ChannelClientIndex
{
    use AsAction;

    public function handle()
    {
        return view('channel.channel');
    }
}
