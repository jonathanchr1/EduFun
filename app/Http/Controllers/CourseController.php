<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course as CourseModel;

class CourseController extends Controller
{
    public function viewDS(){
        $courses = CourseModel::all();
        return view('category.ds', compact('courses'));
    }

    public function viewNS(){
        $courses = CourseModel::all();
        return view('category.ns', compact('courses'));
    }

    public function showDS($id){
        $course = CourseModel::findOrFail($id);
        return view('category.showDS', compact('course'));
    }

    public function showNS($id){
        $course = CourseModel::findOrFail($id);
        return view('category.showNS', compact('course'));
    }

    public function viewAll(){
        $courses = CourseModel::paginate(2);
        return view('home', compact('courses'));
    }

    public function showDetails($id){
        $course = CourseModel::findOrFail($id);
        return view('showD', compact('course'));
    }

    public function viewP(){
        $courses = CourseModel::paginate(3);
        return view('populars.popular', compact('courses'));
    }

    public function showP($id){
        $course = CourseModel::findOrFail($id);
        return view('populars.showP', compact('course'));
    }
}
