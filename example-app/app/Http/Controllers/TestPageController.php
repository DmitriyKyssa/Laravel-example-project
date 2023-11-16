<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Http\Request;

class TestPageController extends Controller
{
    public function index(){
        $test = Test::all();

        return view('test',compact('test'));
/*        foreach ($test as $tests){
            dump($tests->title);
        }*/
//        dump($test);
    }
    public function create(){
        $createArr = [
            [
                'title' => 'New title created in php storm',
                'true' => 1,
            ],
            [
                'title' => 'Another title created in php storm',
                'true' => 1,
            ],
        ];
        foreach ($createArr as $item){
            Test::create($item);
        }
        dd('created');
    }

    public function update(){
        $post = Test::find(5);

        $post->update([
           'title' => 'Updated title',
        ]);
        dd('Updated');
    }

    public function delete(){
        $post = Test::withTrashed()->find(1);
        $post->delete();
        dd('deleted');
//        $post->restore();
//        dd('restored');
    }

    public function firstOrCreate(){
        $post = Test::firstOrCreate(
            [
                'title' => 'Another title created in php storm'
            ],
            [
                'title' => 'New title created in php storm',
                'true' => 1,
            ]
        );
        dump($post->title);
        dd('first or create');
    }

    public function updateOrCreate(){
        $post = Test::updateOrCreate(
            [
                'title' => 'Updated title'
            ],
            [
                'title' => 'Updated title 123',
                'true' => 1,
            ]
        );
        dump($post->title);
        dd('update or create');
    }

}
