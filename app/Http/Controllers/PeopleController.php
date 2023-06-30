<?php

namespace App\Http\Controllers;

use App\Models\People;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PeopleController extends Controller
{
    public function index()
    {
        $people = People::all();
        return response()->json($people);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'city' => 'required',
            'country' => 'required',
        ]);

        $people = new People();
        $people->name = $request->input('name');
        $people->surname = $request->input('surname');
        $people->phone = $request->input('phone');
        $people->address = $request->input('address');
        $people->city = $request->input('city');
        $people->country = $request->input('country');
        $people->save();

        return response()->json($people, 201);
    }


    public function show(string $id)
    {
        $people = People::find($id);

        if ($people) {
            return response()->json($people);
        } else {
            return response()->json(['error' => 'Record not found.'], 404);
        }
    }

    public function update(Request $request, string $id)
    {
        $people = People::find($id);

        if (!$people) {
            return response()->json(['message' => 'Person not found'], 404);
        }
        $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'city' => 'required',
            'country' => 'required',
        ]);

        $people->name = $request->input('name');
        $people->surname = $request->input('surname');
        $people->phone = $request->input('phone');
        $people->address = $request->input('address');
        $people->city = $request->input('city');
        $people->country = $request->input('country');
        $people->save();

        return response()->json(['message' => 'Person updated successfully'], 200);
    }


    public function destroy(string $id)
    {
        $people = People::find($id);

        if ($people) {
            $people->delete();
            return response()->json(['message' => 'Record deleted.']);
        } else {
            return response()->json(['error' => 'Record not found.'], 404);
        }
    }
}