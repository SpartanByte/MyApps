<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Movie;
use DB;


class MovieController extends Controller
{
    // load them all
    public function index(){
        // $movies = Movie::all();
        // $movies = Movies::all()->orderBy('title', 'desc')->get();
        $movies = DB::table('movies')->orderBy('title', 'asc')->get();

        return view('movies.index')->with(compact('movies'));
        // return view('movies.index');
    }

    public function create(){
        return view('movies.create');
    }

    public function store(Request $request){
        // $this->validate($request, [
        //     'band' => 'required',
        //     'concert_date' => 'required',
        //     'venue' => 'required',
        //     'location' => 'required',
        // ]);

        // $carbonDate = Carbon::parse($request->date);
        $movie = new Movie;
        $movie->title = $request->title;
        $movie->year = $request->year;
        $movie->genre = $request->genre;
        $movie->media_type = $request->media;
        $movie->save();

        return redirect()->route('movies.index');
    }


    public function show($id){
        return view('movies.show');
    }

    public function edit($id){
        return view('movies.edit');
    }

    public function update(Request $request, $id){

        $movie = Movie::find($id);
        $movie->title = ucwords($request->title);
        $movie->year = $request->year;
        $movie->genre = $request->genre;
        $movie->media_type = $request->media;
        $movie->save();
    }

    public function destroy($id){
        $movie->delete();
        return view('movies.index');
    }
}
