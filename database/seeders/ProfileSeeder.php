<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Profile;
use App\Models\User;
use App\Models\Cargo;



class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jefatura = Cargo::where('name', 'Jefatura')->first();
        $analista = Cargo::where('name', 'Analista')->first();
        $programador = Cargo::where('name', 'Programador')->first();

        $admin = User::create([
            'email' => 'admin',
            'password' => bcrypt('admin@'),
        ])->assignRole(1);

        $user1 = User::create([
            'email' => 'mail@enovus1.cl',
            'password' => bcrypt('1111'),
        ])->assignRole(2);

        $user2 = User::create([
            'email' => 'mail@enovus2.cl',
            'password' => bcrypt('1111'),
        ])->assignRole(2);

        $user3 = User::create([
            'email' => 'mail@enovus3.cl',
            'password' => bcrypt('1111'),
        ])->assignRole(3);

        $user4 = User::create([
            'email' => 'mail@enovus4.cl',
            'password' => bcrypt('1111'),
        ])->assignRole(3);

        $user5 = User::create([
            'email' => 'mail@enovus5.cl',
            'password' => bcrypt('1111'),
        ])->assignRole(3);

        $user6 = User::create([
            'email' => 'mail@enovus6.cl',
            'password' => bcrypt('1111'),
        ])->assignRole(3);

        $user7 = User::create([
            'email' => 'mail@enovus7.cl',
            'password' => bcrypt('1111'),
        ])->assignRole(3);

        $user8 = User::create([
            'email' => 'mail@enovus8.cl',
            'password' => bcrypt('1111'),
        ])->assignRole(3);


        $evaluado4 = Profile::create([
            'name' => 'Evaluado 4',
            'rut' => '1111-6',
            'estado' => true,
            'cargo_id' => $programador->id,
            'user_id' => $user6->id
        ]);

        $evaluado5 = Profile::create([
            'name' => 'Evaluado 5',
            'rut' => '1111-7',
            'estado' => true,
            'cargo_id' => $programador->id,
            'user_id' => $user7->id
        ]);

        $evaluado6 = Profile::create([
            'name' => 'Evaluado 6',
            'rut' => '1111-8',
            'estado' => true,
            'cargo_id' => $programador->id,
            'user_id' => $user8->id
        ]);

        $evaluador1 = Profile::create([
            'name' => 'Evaluador 1',
            'rut' => '1111-1',
            'estado' => true,
            'cargo_id' => $jefatura->id,
            'user_id' => $user1->id
        ]);

        $evaluador2 = Profile::create([
            'name' => 'Evaluador 2',
            'rut' => '1111-2',
            'estado' => true,
            'cargo_id' => $jefatura->id,
            'user_id' => $user2->id
        ]);

        $admin = Profile::create([
            'name' => 'Administrador',
            'user_id' => $admin->id
        ]);

        $evaluados1 = [
            [
                'name' => 'Evaluado 1',
                'rut' => '1111-3',
                'estado' => true,
                'cargo_id' => $analista->id,
                'user_id' => $user3->id
            ],
            [
                'name' => 'Evaluado 2',
                'rut' => '1111-4',
                'estado' => true,
                'cargo_id' => $analista->id,
                'user_id' => $user4->id
            ],
            [
                'name' => 'Evaluado 3',
                'rut' => '1111-5',
                'estado' => false,
                'cargo_id' => $analista->id,
                'user_id' => $user5->id
            ]

        ];

        $evaluador1->colaboradores()->createMany($evaluados1);
        $evaluador2->colaboradores()->attach([$evaluado4->id, $evaluado5->id, $evaluado6->id]);
    }
}
