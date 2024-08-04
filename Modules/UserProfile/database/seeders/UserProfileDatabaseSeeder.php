<?php

namespace Modules\UserProfile\Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Modules\UserProfile\Models\Person;

class UserProfileDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // create default users
        $user = User::create([
            'firstname' => 'Super',
            'lastname' => 'Admin',
            'email' => 'sadmin@atmi.ac.id',
            'password' => Hash::make('super'),
        ]);
        $user->assignRole('Super Admin');

        $tmpPerson = Person::create([
            'nama_lengkap' => $user->firstname . ' ' . $user->lastname,
            'nama_depan' => $user->firstname,
            'nama_belakang' => $user->lastname,
            'tempat_lahir' => 'Solo',
            'tgl_lahir' => date_create('30-12-1990'),
            'no_ktp' => '0super12345',
            'no_hp' => 'hp00000',
            'no_telp' => 'telp00000',
            'jenis_kelamin' => 'Laki-laki',
            'email_pribadi' => 'ysugiarto@atmi.ac.id',
            'email_organisasi' => $user->email,
            'foto' => 'superadmin.jpeg',
            'user_id' => $user->id,
        ]);

        $user = User::create([
            'firstname' => 'Just',
            'lastname' => 'Admin',
            'email' => 'admin@atmi.ac.id',
            'password' => Hash::make('admin'),
        ]);
        $user->assignRole('Admin');

        $tmpPerson = Person::create([
            'nama_lengkap' => $user->firstname . ' ' . $user->lastname,
            'nama_depan' => $user->firstname,
            'nama_belakang' => $user->lastname,
            'tempat_lahir' => 'Karanganyar',
            'tgl_lahir' => date_create('1-1-1991'),
            'no_ktp' => '0admin12345',
            'no_hp' => 'hp11111',
            'no_telp' => 'telp11111',
            'jenis_kelamin' => 'Perempuan',
            'email_pribadi' => 'ysugiarto@atmi.ac.id',
            'email_organisasi' => $user->email,
            'foto' => 'admin.jpeg',
            'user_id' => $user->id,
        ]);

        $user = User::create([
            'firstname' => 'Just',
            'lastname' => 'Instructor',
            'email' => 'ins@atmi.ac.id',
            'password' => Hash::make('ins'),
        ]);
        $user->assignRole('Instructor');

        $tmpPerson = Person::create([
            'nama_lengkap' => $user->firstname . ' ' . $user->lastname,
            'nama_depan' => $user->firstname,
            'nama_belakang' => $user->lastname,
            'tempat_lahir' => 'Sukoharjo',
            'tgl_lahir' => date_create('31-12-1999'),
            'no_ktp' => '0ins12345',
            'no_hp' => 'hp22222',
            'no_telp' => 'telp22222',
            'jenis_kelamin' => 'Laki-laki',
            'email_pribadi' => 'ysugiarto@atmi.ac.id',
            'email_organisasi' => $user->email,
            'foto' => 'ins.jpeg',
            'user_id' => $user->id,
        ]);

        $user = User::create([
            'firstname' => 'Just',
            'lastname' => 'Student',
            'email' => 'student@student.atmi.ac.id',
            'password' => Hash::make('student'),
        ]);
        $user->assignRole('Student');

        $tmpPerson = Person::create([
            'nama_lengkap' => $user->firstname . ' ' . $user->lastname,
            'nama_depan' => $user->firstname,
            'nama_belakang' => $user->lastname,
            'tempat_lahir' => 'Boyolali',
            'tgl_lahir' => date_create('1-1-2010'),
            'no_ktp' => '0std12345',
            'no_hp' => 'hp33333',
            'no_telp' => 'telp33333',
            'jenis_kelamin' => 'Perempuan',
            'email_pribadi' => 'ysugiarto@atmi.ac.id',
            'email_organisasi' => $user->email,
            'foto' => 'girl_std.png',
            'user_id' => $user->id,
        ]);
    }
}
