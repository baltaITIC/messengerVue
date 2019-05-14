<?php

use Illuminate\Database\Seeder;
use App\Conversation;

class ConversationsTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Conversation::create([
            
            'user_id' => 1,
            'contact_id' => 2,
            
            //'listen_notifications' => ,
            //'has_blocked' => ,

            'last_message' => null,
            'last_time' => null,

        ]);
        Conversation::create([
            
            'user_id' => 2,
            'contact_id' => 1,
            
            //'listen_notifications' => ,
            //'has_blocked' => ,

            'last_message' => null,
            'last_time' => null,

        ]);

        Conversation::create([
            
            'user_id' => 1,
            'contact_id' => 3,
            
            //'listen_notifications' => ,
            //'has_blocked' => ,

            'last_message' => null,
            'last_time' => null,

        ]);

        Conversation::create([
            
            'user_id' => 3,
            'contact_id' => 1,
            
            //'listen_notifications' => ,
            //'has_blocked' => ,

            'last_message' => null,
            'last_time' => null,

        ]);
    }
}
