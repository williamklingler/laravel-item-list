<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Item;

class ItemController extends Controller
{
    public function index(){
        $items = Item::latest()->get();

        return view('ItemIndex', ['items'=> $items]);
    }
    public function create(){

      return view('ItemCreate');
    }

    public function userIndex(){
        $users = \App\User::latest()->get();

        return view('UserIndex', ['users'=> $users]);
    }

    public function store(){
      $item = new Item();
      $item->title = request('title');
      $item->body = request('body');
      $item->excerpt = request('excerpt');
      $item->save();
    }
    public function userItems($user_id){
      $items = Item::where("user_id", $user_id)->get();
      return view('ItemIndex', ['items'=> $items]);
    }

    public function edit(){


    }
    public function update(){

    }
    public function delete(){

    }
}
