<?php

namespace Modules\Catalog\database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Catalog\app\Models\Catalog;

class CatalogDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        Catalog::factory(100 )->create();
    }
}
