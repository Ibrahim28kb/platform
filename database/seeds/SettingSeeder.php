<?php

use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         App\Setting::create([
            'blog_name'=> 'ibrBlog',
            'phon_number'=>'645643567',
            'blog_email'=>'gdsfgdf@fgf.fgd',
            'address'=>'gfdgsdg'
            ]);
    }
}
