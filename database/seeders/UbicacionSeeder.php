<?php

namespace Database\Seeders;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UbicacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ubicacions')->insert([
            'nombre'=>'Remoto',
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now(),
        ]);
        DB::table('ubicacions')->insert([
            'nombre'=>'Ate',
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now(),
        ]);
        DB::table('ubicacions')->insert([
            'nombre'=>'Barranco',
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now(),
        ]);
        DB::table('ubicacions')->insert([
            'nombre'=>'Breña',
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now(),
        ]);
        DB::table('ubicacions')->insert([
            'nombre'=>'Chorrillos',
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now(),
        ]);
        DB::table('ubicacions')->insert([
            'nombre'=>'Comas',
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now(),
        ]);
        DB::table('ubicacions')->insert([
            'nombre'=>'Lince',
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now(),
        ]);
        DB::table('ubicacions')->insert([
            'nombre'=>'SJL',
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now(),
        ]);
        DB::table('ubicacions')->insert([
            'nombre'=>'SJM',
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now(),
        ]);

    }
}
