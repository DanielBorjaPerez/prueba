<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Profession;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $professions = DB::select('SELECT id FROM professions LIMIT 0,1');

        $professionId = Profession:: WHERE('title', 'Desarrollador back-end')->value('id');

        User::create([
            'name' => 'Daniel Borja',
            'email' => 'danielborjaperez99@gmail.com',
            'password' => bcrypt('laravel'),
            'profession_id' => $professionId,
            'is_admin' => true,
        ]);

        factory(User::class)->create([
            'profession_id' => $professionId,
        ]);

        factory(User::class, 20)->create([
        ]);

        // User::create([
        //     'name' => 'Manolo Lopez',
        //     'email' => 'manololopoez@gmail.com',
        //     'password' => bcrypt('contraseña'),
        //     'profession_id' => $professionId,
        // ]);

        // User::create([
        //     'name' => 'Maria puentes',
        //     'email' => 'mariapuentes@gmail.com',
        //     'password' => bcrypt('123'),
        //     'profession_id' => null,
        // ]);
    }
}
