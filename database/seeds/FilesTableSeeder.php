<?php

use Illuminate\Database\Seeder;

class FilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        for ($i = 0; $i < 10; $i ++) {
////            $file = new \App\File();
////            $file->file_name = 'Test';
////            $file->file_size = '2MB';
////            $file->save();
////        }

        factory(App\File::class, 5)->create();

    }
}
