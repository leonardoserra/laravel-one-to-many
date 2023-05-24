<?php

namespace Database\Seeders;
use App\Models\Project;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0; $i<5; $i++){
            $newProject = new Project();
        
            $newProject->title = $faker->sentence(3);
            $newProject->image_src = $faker->text(200);
            $newProject->description = $faker->text(1000);
            $newProject->slug = Str::slug($newProject->title, '-');
            $newProject->save();
        }
    }
}
