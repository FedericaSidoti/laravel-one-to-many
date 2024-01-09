<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = [
            [
                'title'=> 'Boolando',
                'thumb'=> 'https://imageio.forbes.com/blogs-images/forbestechcouncil/files/2019/01/canva-photo-editor-8-7.jpg?height=640&width=640&fit=bounds',
                'description' => 'Lorem Ipsum'
            ],

            [
                'title'=> 'Boolzapp',
                'thumb'=> 'https://imageio.forbes.com/blogs-images/forbestechcouncil/files/2019/01/canva-photo-editor-8-7.jpg?height=640&width=640&fit=bounds',
                'description' => 'Lorem Ipsum'
            ],

            [
                'title'=> 'ToBoolist',
                'thumb'=> 'https://imageio.forbes.com/blogs-images/forbestechcouncil/files/2019/01/canva-photo-editor-8-7.jpg?height=640&width=640&fit=bounds',
                'description' => 'Lorem Ipsum'
            ]
        ];

        foreach($projects as $project){
            $newProject = new Project(); 
            $newProject->title = $project['title'];
            $newProject->thumb = $project['thumb'];
            $newProject->description = $project['description'];

            $newProject->save();
        }    
    }
}
