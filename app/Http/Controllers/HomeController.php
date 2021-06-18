<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hero;
use App\Models\Skill;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $hero = Hero::all();
        if ($request->has('cari')) {
            $hero = Hero::where('hero', 'LIKE', '%' . $request->cari . '%')->get();
        } else {
            $hero = Hero::all();
        }

        return view('home.index', ['hero' => $hero]);
    }
    public function detail($id)
    {
        $detail = Hero::find($id);
        // $users = DB::table('Skill')->where('hero_id', $detail->id);
        $data = Skill::with('Hero')->where('hero_id', $id)->get();

        return view('home.detail', compact('detail', 'data'));
    }
    public function edit(Request $request, $id)
    {
        $hero = Hero::find($id);
        $hero->hero = $request->input('hero');
        $hero->jenkel = $request->input('jenkel');
        $hero->save();

        return redirect('/');
    }
    public function hapus($id)
    {
        $data = Hero::find($id);
        $data->delete();
        return redirect('/');
    }
    public function hapusSkill($id)
    {
        $skill = Skill::find($id);
        $skill->delete();

        return redirect('/');
    }
    public function simulasi()
    {
        $data = Hero::where('jenkel', 'Perempuan')->get();
        $data1 = Hero::where('jenkel', 'Laki')->get();
        $hero = Hero::where('id', false)->get();
        // $hero = Hero::where('id', $data->id)->get();
        $data2 = Skill::with('Hero')->where('hero_id', $hero)->get();
        return view('home.simulasi', compact('data', 'data1', 'data2'));
    }
    // public function editSimulasi($id)
    // {
    //     $detail = Hero::find($id);
    //     // $users = DB::table('Skill')->where('hero_id', $detail->id);
    //     $data = Skill::with('Hero')->where('hero_id', $id)->get();

    //     return view('home.detail', compact('detail', 'data'));
    // }
}
