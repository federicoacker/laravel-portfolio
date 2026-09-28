<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectTechnologyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $technologyIds = Technology::pluck('id')->toArray();
        $projects = Project::all();
        if (empty($technologyIds)) {
            return;
        }
        
        foreach ($projects as $project) {
        $numberOfTechnologies = rand(0, count($technologyIds));
        $technologiesToInsert = [];

        while (count($technologiesToInsert) < $numberOfTechnologies) {
            $randomId = $technologyIds[array_rand($technologyIds)];

            if (!in_array($randomId, $technologiesToInsert)) {
                $technologiesToInsert[] = $randomId;
            }
        }

        $project->technologies()->sync($technologiesToInsert);
    }
    }
}
