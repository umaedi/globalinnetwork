<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Domain;


class DomainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        

        Domain::factory()->create([
            'nama_domain' => 'dev-webopd',
            'status' => 'active',
        ]);

        Domain::create([
            'nama_domain'      => 'dev-webopd',
            'status'     => 'active',
           
        ]);
    }
}