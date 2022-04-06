<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event;

class EventController extends Controller
{
    public function index()
    {
        return view('app');
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $event = new Event;

        $event->name = $request->name;
        $event->date = $request->date;
        $event->qtd = $request->qtd;
        $event->location = $request->location;
        $event->description = $request->description;

        $event->save();

        return view('app');
    }

    public function list()
    {
        $events = Event::all();
        return view('list', ['events' => $events]);
    }

    public function show($id)
    {
        $event = Event::findOrFail($id);
        return view('show', ['event' => $event]);
    }

    public function destroy($id)
    {
        $event = Event::findOrFail($id)->delete();
        return redirect('/list');
    }

    public function edit($id)
    {
        $event = Event::findOrFail($id);
        return view('/edit', ['event' => $event]);
    }

    public function update(Request $request)
    {
        Event::findOrFail($request->id)->update($request->all());

        return redirect('/list');
        
        
        //$event = Event::findOrFail($request->id);

        /*
        $event->name = $request-> name;
        $event->date = $request-> date;
        $event->qtd = $request-> qtd;
        $event->location = $request-> location;
        $event->description = $request->description;

        $event->save();
        */

        
    }
}
