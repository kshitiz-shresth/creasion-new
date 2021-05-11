<?php

namespace App\Http\Controllers;

use App\SubProject;
use Illuminate\Http\Request;

class SubProjectController extends Controller
{
    public function store(Request $request)
    {
        if ($request->edit) {
            $subProject = SubProject::find($request->id);
            $subProject->title = $request->title;
            $subProject->slug = $request->slug;
            $subProject->title_image = 'sub-projects/title-images/' . $request->titleImage;
            $data = collect([
                'title' => $request->title,
                'slug' => $request->slug,
                'titleImage' => $request->titleImage,
                'shortDescription' => $request->shortDescription,
                'counterSection' => $request->counterSection,
                'flagSection' => $request->flagSection,
                'mapSection' => $request->mapSection,
                'description' => $request->description,
                'carouselSection' => $request->carouselSection,
            ]);
            $subProject->data = json_encode($data);
            $subProject->update();
            return 'done';
        }
        // store
        $subProject = new SubProject();
        $subProject->title = $request->title;
        $subProject->slug = $request->slug;
        $subProject->title_image = 'sub-projects/title-images/'.$request->titleImage;
        $data = collect([
            'title' => $request->title,
            'slug'=>$request->slug,
            'titleImage'=>$request->titleImage,
            'shortDescription' => $request->shortDescription,
            'flagSection' => $request->flagSection,
            'mapSection' => $request->mapSection,
            'counterSection' => $request->counterSection,
            'description' => $request->description,
            'carouselSection' => $request->carouselSection,
        ]);
        $subProject->data = json_encode($data);
        $subProject->save();
        return 'done';
    }
}
