<?php

namespace App\Http\Controllers;

use App\Event;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Redirect, Response;

class FullCalendarEventMasterController extends Controller
{
    public function index()
    {
        if (request()->ajax()) {
            $start = (!empty($_GET["start"])) ? ($_GET["start"]) : ('');
            $end = (!empty($_GET["end"])) ? ($_GET["end"]) : ('');
            $data = Event::whereDate('start', '>=', $start)->whereDate('end',   '<=', $end)->get(['id', 'title', 'start', 'end']);
            return Response::json($data);
        }
        return view('fullcalender');
    }

    public function add()
    {
        return view('add');
    }
    public function create(Request $request)
    {
        $insertArr = ['title' => $request->title, 'start' => Carbon::create($request->date, $request->heure), 'end' => Carbon::create($request->date, $request->heure)];

        $event = Event::insert($insertArr);

        return Response::json($event);
    }
    public function store(Request $request)
    {
        $datetime = date('Y-m-d H:i:s', strtotime("$request->date $request->heure"));
        $insertArr = ['title' => $request->titre, 'start' => $datetime, 'end' => $datetime];
        $event = new Event();
        $event->date=$request->date;
        $event->start=$datetime;
        $event->end=$datetime;
        $event = Event::insert($insertArr);
        return redirect()->route('agenda');
    }
    public function update(Request $request)
    {
        $where = array('id' => $request->id);
        $updateArr = ['title' => $request->title, 'start' => $request->start, 'end' => $request->end];
        $event  = Event::where($where)->update($updateArr);
        return Response::json($event);
    }
    public function destroy(Request $request)
    {
        $event = Event::where('id', $request->id)->delete();
        return Response::json($event);
    }
}
