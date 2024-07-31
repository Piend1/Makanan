<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Food;

class FoodController extends Controller
{
    public function index() {
        $foods = Food::all();

        $data = [
            "foods" => $foods
        ];

        return view("food.index", $data);
    }

    public function destroy($id) {
        $food = Food::where("id", $id)->first();
        $food->delete();

        return redirect("/food");
    }

    public function create() {
        return view("food.tambah");
    }

    public function store(Request $request) {
        $food = $request->food;
        $keterangan = $request->keterangan;

        Food::create([
            "food" => $food,
            "keterangan" => $keterangan,
        ]);

        return redirect("/food");
    }

    public function edit($id) {
        $food = Food::where("id", $id)->first();

        $data = [
            "food" => $food
        ];
        return view("food.edit", $data);
    }

    public function update(Request $request, $id) {
        $food = $request->food;
        $keterangan = $request->keterangan;

        Food::where("id", $id)->update([
            "food" => $food,
            "keterangan" => $keterangan,
        ]);

        return redirect("/food");
    }
}
