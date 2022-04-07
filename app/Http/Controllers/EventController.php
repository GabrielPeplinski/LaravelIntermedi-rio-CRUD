<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\EventRequest;

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

    public function store(EventRequest $eventRequest)
    {
        $data = $eventRequest->validated();
        
        Event::query()->create($data);

        /*$event->name = $data[name];
        $event->date = $data[date];
        $event->qtd = $data[qtd];
        $event->location = $data[location];
        $event->description = $data[description];

        $event->save();*/

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

    public function update(Request $request, EventRequest $eventRequest)
    {
        $data = $eventRequest->validated();
        Event::findOrFail($request->id)->update($data);

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
