<?php

use Illuminate\Database\Seeder;
use App\Channel; 
class ChannelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {



         $channel1 = ['title' => 'Assemblies', 'slug' => str_slug('Assemblies')];
         $channel2 = ['title' => 'Printing Issues', 'slug' => str_slug('Printing Issues')];
         $channel3 = ['title' => 'Booking Info', 'slug' => str_slug('Booking Info')];
         $channel4 = ['title' => 'Computer', 'slug' => str_slug('Computer')];
         $channel5 = ['title' => 'Equipment', 'slug' => str_slug('Equipment')];
         $channel6 = ['title' => 'IT Updates', 'slug' => str_slug('IT Upates')];
         $channel7 = ['title' => 'iPad Apps', 'slug' => str_slug('iPad Apps')];
         $channel8 = ['title' => 'Loose Ends', 'slug' => str_slug('Loose Ends')];

	
     	Channel::create($channel1);
        	Channel::create($channel2);
        		Channel::create($channel3);
        			Channel::create($channel4);
        				Channel::create($channel5);
        					Channel::create($channel6);
        						Channel::create($channel7);
        							Channel::create($channel8);
    }
}