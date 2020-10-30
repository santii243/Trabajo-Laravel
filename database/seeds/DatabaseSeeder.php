<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\User::class)->create(['email' => 'ignacastri@gmail.com']);
        factory(\App\User::class, 5)->create();
        factory(\App\student::class, 2)->create();
        factory(\App\enterprise::class, 5)->create();
        factory(\App\cycle::class, 2)->create();
        factory(\App\module::class, 10)->create();
        factory(\App\ra::class, 10)->create();
        factory(\App\task::class, 10)->create();
        factory(\App\assistance::class, 2)->create();
        factory(\App\belong::class, 5)->create();
        factory(\App\ce::class, 10)->create();
        factory(\App\study::class, 5)->create();
        factory(\App\task_done::class, 10)->create();
        factory(\App\Tutor_c::class, 10)->create();
        factory(\App\tutor_e::class, 2)->create();
        factory(\App\visit::class, 5)->create();
        factory(\App\worksheet::class, 10)->create();
    }
}
