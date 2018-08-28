<?php

namespace App\Console\Commands\Meetup;

use App\Models\Event;
use GuzzleHttp\Client;
use Illuminate\Console\Command;

class SyncCommand extends Command
{
    protected $eventUri = 'https://api.meetup.com/';

    protected $urlname;

    protected $client;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'meetup:sync';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Sync data from meetup';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
        $this->urlname = env('MEETUP_USER');

        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $response = $this->client->request(
            'GET',
            "{$this->eventUri}{$this->urlname}/events?status=past,upcoming"
        );

        array_map(function ($item) {
            if (is_null(Event::where('meetup_id', $item->id)->first())) {
                Event::create([
                    'meetup_id' => $item->id,
                    'title' => $item->name,
                    'slug' => str_slug($item->name),
                    'description' => $item->description,
                    'future' => ($item->status === 'upcoming') ? true : false,
                    'meetup_data' => json_encode($item)
                ]);
            }
        }, json_decode($response->getBody()->getContents()));
    }
}
