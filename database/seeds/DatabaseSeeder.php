<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
    

 		//$this->call(UserstableSeeder::class);
        //$this->call(ChannelsTableSeeder::class);
        $this->call(DiscussionsTableSeeder::class);
        //$this->call(RepliesTableSeeder::class);

	    //$this->call(PackageTableSeeder::class);
	    //$this->command->info('Package table seeded!');
	    
	    //$this->call(BookingDateTimeTableSeeder::class);
	    //$this->command->info('Booking DateTimes seeded!');
	    
	    //$this->call(CustomerSeeder::class);
	    //$this->command->info('Customers seeded!');
	    
	    //$this->call(AppointmentSeeder::class);
	    //$this->command->info('Appointments seeded!');
	    
	    //$this->call(AdminSeeder::class);
	    //$this->command->info('Admins seeded!');

	    //$this->call(TimeIntervalTableSeeder::class);
	    //$this->command->info('Time intervals seeded!');

	    //$this->call(ConfigurationTableSeeder::class);
	    //$this->command->info('Configurations seeded!');
	    
	    Eloquent::unguard();
	}

}
