<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'nip' => '12345',
                'nama' => 'Mr.Fahri',
                'email' => 'kurikulum@sekolah.sch.id',
                'alamat' => 'bogor',
                'role' => 'kurikulum',
                'supervisor' => '1',
                'password' => bcrypt('12345678'),
            ],
            ];
            foreach ($user as $key => $value) {
                User::create($value);
            }
    }
}
