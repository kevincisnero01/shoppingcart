<?php

use App\User;
use App\Product;
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
        // $this->call(UsersTableSeeder::class);
    	$cantidadUsuarios = 5;
    	$cantidadProductos = 10;

        factory(User::class, $cantidadUsuarios)->create();
        factory(Product::class, $cantidadProductos)->create();
    }
}
