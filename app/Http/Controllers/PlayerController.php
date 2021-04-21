<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class PlayerController extends Controller
{

    public function show_player()
    {
        $players = DB::table('player')->get();
        $manager_player = view('admin.show_player')->with('players', $players);
        return view('admin.dashboard')->with('admin.show_player', $manager_player);
    }

    public function insert_player()
    {
        return view('admin.insert_player');

    }   

    public function save_player(Request $request)
    {
        $data = array();
        $data['name'] = $request->name;
		$data['squad_number'] = $request->squad_number;
        $data['height'] = $request->height;
        $data['birth'] = $request->birth;
        $data['nation'] = $request->nation;
		$data['position'] = $request->position;
        $data['salary'] = $request->salary;       
        $data['signed'] = $request->signed; 
        $data['image'] = $request->image; 

        DB::table('player')->insert($data);
        Session::put('message', 'Add player successfully');
        return Redirect::to('insert-player');
    }

    public function update()
    {
        $players = DB::table('player')->get();
        $manager_player = view('admin.edit_player')->with('players', $players);
        return view('admin.dashboard')->with('admin.edit_player', $manager_player);

    }      
    
    public function update_player($player_id)
    {
        $players = DB::table('player')->where('id', $player_id)->get();
        $manager_player = view('admin.edit_player_perform')->with('players', $players);
        return view('admin.dashboard')->with('admin.edit_player_perform', $manager_player);

    }  

    public function update_player_perform(Request $request, $player_id)
    {
        $data = array();
        $data['name'] = $request->name;
		$data['squad_number'] = $request->squad_number;
        $data['height'] = $request->height;
        $data['birth'] = $request->birth;
        $data['nation'] = $request->nation;
		$data['position'] = $request->position;
        $data['salary'] = $request->salary;       
        $data['signed'] = $request->signed; 
        $data['image'] = $request->image; 

        DB::table('player')->where('id', $player_id)->update($data);
        Session::put('message', 'Update player successfully');
        return Redirect::to('update-player/'. $player_id);
    }

    public function delete()
    {
        $players = DB::table('player')->get();
        $manager_player = view('admin.delete_player')->with('players', $players);
        return view('admin.dashboard')->with('admin.delete_player', $manager_player);
    } 

    public function delete_player($player_id)
    {
        DB::table('player')->where('id', $player_id)->delete();
        Session::put('message', 'Delete player successfully');
        return Redirect::to('delete-player');
    } 
}

