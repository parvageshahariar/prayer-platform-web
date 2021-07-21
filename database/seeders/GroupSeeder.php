<?php

namespace Database\Seeders;

use App\Models\Group;
use Illuminate\Database\Seeder;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $group = new Group;
        $group->name = 'Young Adults Bible Study';
        $group->description = 'A group for those attending the Young Adults Bible Study.';
        $group->organization_id = 1;
        $group->save();

        $group = new Group;
        $group->name = 'Men\'s Group';
        $group->description = 'A group for the men at RiverStone Church.';
        $group->organization_id = 1;
        $group->save();
    }
}
