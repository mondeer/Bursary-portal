<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    public function run()
    {
          DB::table('users')->truncate();
          DB::table('roles')->truncate();
          DB::table('role_users')->truncate();

          // system admin role(Constituency) role
          $role = [
            'name' => 'Admin',
            'slug' => 'admin',
            'permissions' => [
              'admin' => true,
            ]
          ];
          $adminRole = Sentinel::getRoleRepository()->createModel()->fill($role)->save();


          // student role
          $student = [
            'name' => 'Student',
            'slug' => 'student',
          ];
          Sentinel::getRoleRepository()->createModel()->fill($student)->save();

          // village administrator(cdf) role
          $village_cdf = [
            'name' => 'Village',
            'slug' => 'village',
          ];
          Sentinel::getRoleRepository()->createModel()->fill($village_cdf)->save();


          // admin user
          $admin = [
            'first_name' => 'Turkana',
            'last_name' => 'East',
            'email'    => 'mondiakering@gmail.com',
            'password' => 'mondeer89',
          ];

          $adminUser = Sentinel::registerAndActivate($admin);
          $adminUser->roles()->attach($adminRole);

    }
}
