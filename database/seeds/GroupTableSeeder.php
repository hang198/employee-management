<?php

use Illuminate\Database\Seeder;

class GroupTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $group = new \App\Group();
        $group->id = '1';
        $group->name = 'Quản lý nhân sự';
        $group->save();

        $group = new \App\Group();
        $group->id = '2';
        $group->name = 'Quản lý trị hệ thống';
        $group->save();

        $group = new \App\Group();
        $group->id = '3';
        $group->name = 'Quản lý phòng';
        $group->save();

        $group = new \App\Group();
        $group->id = '4';
        $group->name = 'Quản lý dịch vụ';
        $group->save();

        $group = new \App\Group();
        $group->id = '5';
        $group->name = 'Lễ tân';
        $group->save();
    }
}
