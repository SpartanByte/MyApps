<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Concert;


class ConcertController extends Controller
{
    // load them all
    public function index(){
        $concerts = Concert::all();
        $events = $concerts->groupBy('concert_date');

        return view('concerts.index')->with(compact('events'));
    }

    public function indexByBand(){
        $concerts = Concert::orderBy('band_name')->get();
        $bands = $concerts->groupBy('band_name');
        return view('concerts.index-by-band')->with(compact('bands'));
    }

    public function create(){
        return view('concerts.create');
    }

    public function store(Request $request){
        // $this->validate($request, [
        //     'band' => 'required',
        //     'concert_date' => 'required',
        //     'venue' => 'required',
        //     'location' => 'required',
        // ]);

        $carbonDate = Carbon::parse($request->date);
        $concert = new Concert;
        $concert->band_name = $request->band;
        $concert->concert_date = $carbonDate;
        $concert->venue = $request->venue;
        $concert->city_state = $request->location;
        $concert->save();

        return redirect()->route('concerts.index');
    }


    public function show($id){
        return view('concerts.show');
    }

    public function edit($id){
        return view('concerts.edit');
    }

    public function update(Request $request, $id){

        $concert = Concert::find($id);
        $concert->band_name = ucwords($request->band);
        $concert->concert_date = $request->date;
        $concert->venue = $request->venue;
        $concert->city_state = $request->location;
        $concert->save();
    }

    public function destroy($id){
        $concert->delete();
        return view('concerts.index');
    }
}
