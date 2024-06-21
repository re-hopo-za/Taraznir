<?php

namespace Modules\Tutorial\database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Tutorial\app\Models\Tutorial;

class TutorialDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        Tutorial::factory(100 )->create();
    }
}
