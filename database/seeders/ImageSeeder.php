<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Image;
use Illuminate\Database\Seeder;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        

        \App\Models\Image::factory(User::all()->count())->make()->each(function($image) {

            $id=(Image::where('imageable_type',User::class)->count()) + 1;
            $path = 'users/image-'.$id.'.png';

            $image->imageable_id = $id;
            $image->path = $path;
            $image->save();
        });
       
    }
}
