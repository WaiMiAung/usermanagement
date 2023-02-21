<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Permission::create([
            "name"=>"Service Staff",
            "feature_id"=>1
        ]);

        Permission::create([
            "name"=>"View export to buttons (excel/print/pdf) on tables",
            "feature_id"=>1
        ]);

        Permission::create([
            "name"=>"View User",
            "feature_id"=>2
        ]);


        Permission::create([
            "name"=>"Add User",
            "feature_id"=>2
        ]);

        Permission::create([
            "name"=>"Edit User",
            "feature_id"=>2
        ]);

        Permission::create([
            "name"=>"Delete User",
            "feature_id"=>2
        ]);

        Permission::create([
            "name"=>"View Role",
            "feature_id"=>3
        ]);

        Permission::create([
            "name"=>"Add Role",
            "feature_id"=>3
        ]);

        Permission::create([
            "name"=>"Edit Role",
            "feature_id"=>3
        ]);

        Permission::create([
            "name"=>"Delete Role",
            "feature_id"=>3
        ]);


        
    }
}
