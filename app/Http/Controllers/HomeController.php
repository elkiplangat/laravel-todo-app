<?php

namespace App\Http\Controllers;

use App\Models\TodoItem;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        $todo_items = TodoItem::all();
        return view('index',['todo_items'=> $todo_items]);
    }
    public  function createTodoItem(Request $request){
        echo $request->title;
        echo $request->description;
        $todo_item = new TodoItem;
        $todo_item->title = $request->title;
        $todo_item->description = $request->description;

        $todo_item->save();
        return redirect()->back()->with(['from_saving'=>true]);


    }

}
