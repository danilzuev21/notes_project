<?php

namespace App\Http\Controllers;
use App\Models\Note;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class MainController extends Controller
{
  public function index()
  {
    if(Auth::check()){
      $id = Auth::user()->id;
      $currentuser = User::find($id);
      $notes = DB::table('notes')->where('email', $currentuser->email)->orderBy('id', 'desc')->get();
      //dd($notes);
      return view('welcome', compact('notes'));
    }
    else{
      $notes = [];
      return view('welcome', compact('notes'));
    }
  }
  public function showNotesData()
  {
    if(Auth::check()){
      $id = Auth::user()->id;
      $currentuser = User::find($id);
      $listNotes  = DB::table('notes')->where('email', $currentuser->email)->orderBy('updated_at', 'desc')->get();
      return response()->json(['notes' => $listNotes]);
    } else {
      $notes = [];
      return response()->json(['notes' => $listNotes]);
    }
  }
}
