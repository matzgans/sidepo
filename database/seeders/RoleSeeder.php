<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = [
            'admin',
            'pimpinan',
        ];

        foreach ($datas as $data) {
            Role::create([
                'name' => $data
            ]);
        }
    }
}
