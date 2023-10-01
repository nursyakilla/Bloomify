<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $user = new \App\Models\User;
        $user->name = "Nazwa";
        $user->username = "zwah";
        $user->status = "Admin 1";
        $user->email = "wah@gmail.com";
        $user->password = Hash::make('12345678');
        $user->no_tlp = "0000 0000 0000";
        $user->save();
        $this->command->info("Hai.. Selamat Datang di Bloomify, " . $user->name);

        $user = new \App\Models\User;
        $user->name = "Najwa";
        $user->username = "awa";
        $user->status = "Admin 2";
        $user->email = "awa@gmail.com";
        $user->password = Hash::make('12345678');
        $user->no_tlp = "1111 1111 1111";
        $user->save();
        $this->command->info("Hai.. Selamat Datang di Bloomify, " . $user->name);

        $user = new \App\Models\User;
        $user->name = "Nashwa";
        $user->username = "wawa";
        $user->status = "Admin 3";
        $user->email = "wawa@gmail.com";
        $user->password = Hash::make('12345678');
        $user->no_tlp = "2222 2222 2222";
        $user->save();
        $this->command->info("Hai.. Selamat Datang di Bloomify, " . $user->name);
    }
}