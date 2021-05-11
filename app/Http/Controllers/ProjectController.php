<?php

namespace App\Http\Controllers;

use App\Project;
use App\SubProject;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function showProject($slug){
        $project = Project::where('slug',$slug)->first();
        $titleSplit = preg_split('/\s+/',$project->title);
        $shortForm = '';
        $subProjects = [];
        if($project->sub_projects){
            if (count(json_decode($project->sub_projects)) > 0) {
                foreach(json_decode($project->sub_projects) as $item){
                    array_push($subProjects,SubProject::where('slug',$item)->first());
                }
            }
        }
         foreach($titleSplit as $item){
            $shortForm = $shortForm.$item[0];
        }
        return view('projects.show',compact(
            'project',
            'shortForm',
            'subProjects'
        ));
    }


    public function generateImages(Request $request){

    }
}
