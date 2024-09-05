<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PortfolioController extends Controller
{
    private function loadData($filename){
        $path=storage_path("data/{$filename}.json");
        if (!File::exists($path)) {
            abort(404);
        }
        $file=File::get($path);
        return json_decode($file,true);
    }

    public function home(){
        $data=$this->loadData('home');
        return view('home',compact('data'));
    }

    public function workExperiences(){
        $data=$this->loadData('work-experiences');
        return view('work-experiences',compact('data'));
    }

    public function projects(){
        $data=$this->loadData('projects');
        return view('projects',compact('data'));
    }

    public function projectDetail($id){
        $projects=$this->loadData('projects');
        $project=collect($projects)->firstWhere('id',$id);
        if(!$project){
            abort(404);
        }
        return view('project-details',compact('project'));
    }
}
