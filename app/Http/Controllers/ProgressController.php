<?php

namespace App\Http\Controllers;

use App\Progress;
use Illuminate\Http\Request;

class ProgressController extends Controller
{
    public function store(Request $request)
    {
        Progress::create([
            'discovery_content_id' => $request->id,
            'job' => $request->job,
            'description' => $request->description,
            'amount' => $request->amount,
            'unit' => $request->unit,
            'unit_price' => $request->unit_price,
            'total' => $request->unit_price*$request->amount
        ]);

        return back();
    }

    public function update(Request $request)
    {
        $progress = Progress::find($request->id);
        $progress->job = $request->job;
        $progress->description = $request->description;
        $progress->amount = $request->amount;
        $progress->unit = $request->unit;
        $progress->unit_price = $request->unit_price;
        $progress->total = $request->amount*$request->unit_price;
        $progress->save();
        return back();
    }
}
