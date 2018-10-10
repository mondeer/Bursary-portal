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
            'name' => 'student',
            'slug' => 'student',
          ];
          $studentRole = Sentinel::getRoleRepository()->createModel()->fill($student)->save();

          // village administrator(cdf) role
          $village_cdf = [
            'name' => 'village',
            'slug' => 'village',
          ];
          $villagRole = Sentinel::getRoleRepository()->createModel()->fill($village_cdf)->save();


          // admin user
          $admin = [
            'first_name' => 'Turkana',
            'last_name' => 'East',
            'email'    => 'mondiakering@gmail.com',
            'password' => 'mondeer89',
          ];

          $adminUser = Sentinel::registerAndActivate($admin);
          $adminUser->roles()->attach($adminRole);

          // student user
          $students = [
            'first_name' => 'Student',
            'last_name' => 'Turkana',
            'email'    => 'student@gmail.com',
            'password' => 'student',
          ];

          $studentUser = Sentinel::registerAndActivate($students);
          $studentUser->roles()->attach($studentRole);

          // student user
          $village_cdf = [
            'first_name' => 'Village',
            'last_name' => 'Admin',
            'email'    => 'villageadmin@gmail.com',
            'password' => 'villageadmin',
          ];

          $village_cdfUser = Sentinel::registerAndActivate($village_cdf);
          $village_cdfUser->roles()->attach($villagRole);

    }
}
