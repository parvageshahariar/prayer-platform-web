<?php

namespace Database\Seeders;

use App\Models\Organization;
use Illuminate\Database\Seeder;

class OrganizationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $organization = new Organization;
        $organization->name = 'RiverStone Church';
        $organization->description = 'RiverStone Church in Charlottesville VA.';
        $organization->save();

        $organization = new Organization;
        $organization->name = 'Advancing Native Missions';
        $organization->description = 'https://advancingnativemissions.com';
        $organization->save();
    }
}
