<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

        $this->call('CategoryTableSeeder');
        $this->call('UserTableSeeder');
        $this->call('ProductTableSeeder');
        $this->call('TagTableSeeder');
        $this->call('EstadoTableSeeder');
        $this->call('CidadeTableSeeder');
	}

}
