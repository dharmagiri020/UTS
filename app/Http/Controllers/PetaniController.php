<?php

namespace App\Http\Controllers;

use App\Models\KelompokTani;
use Illuminate\Http\Request;
use App\Models\Petani;

class PetaniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $petanis = Petani::paginate(10);
        // $petanis = Petani::all();
        return view('petani', compact('petanis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addPetani');        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $messages = [
            'required' => 'Kolom :attribute harus lengkap',
            'numeric' => 'Kolom :attribute harus angka',
            'file' => 'Perhatikan format dan ukuran file'
        ];
        $validasi = $request->validate(
            [
                'nik' => 'required|numeric|digits:16',
                'numeric' => 'required',
                'alamat' => '',
                'telp' => 'required',
                'foto' => 'required|mimes:png,jpg|max:1024',
                'id_kelompok_tani' => 'requred',
                'status' => ''
            ],
            $messages
        );
        try {
            $fileName = time() . $request->file('foto')->getClientOriginalName();
            $path = $request->file('foto')->storeAs('uploads/petanis', $fileName);
            $validasi['foto'] = $path;
            $response = Petani::create($validasi);
            return redirect('petani');
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kelompoks = KelompokTani::all();
        $petani = Petani::find($id);
        if ($petani != NULL) {
            $title = "Edit Data" . $petani->nama;
            return view('inputPetani', compact('title', 'kelompoks', 'petanis'));
        } else {
            return view('inputPetani', compact('title', 'kelompoks'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validasi = $request->validate([
            'nik' => 'required|numeric|digits:16',
            'numeric' => 'required',
            'alamat' => '',
            'telp' => 'required',
            'foto' => 'required|mimes:png,jpg|max:1024',
            'id_kelompok_tani' => 'requred',
            'status' => ''
        ]);
        try {
            if ($request->file('foto')) {
                $fileName = time() . $request->file('foto')->getClientOriginalName();
                $path = $request->file('foto')->storeAs('upload/petanis', $fileName);
                $validasi['foto'] = $path;
            }
            $response = Petani::find($id);
            $response->update($validasi);
            return redirect('petani');
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $petani = Petani::find($id);
            $petani->delete();
            return redirect('petani');
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    }
    public function detail($id_petani)
    {
        if (!$this->PetaniModel->detailData($id_petani)) {
            abort(404);
        }
        $data = [
            'Petani' => $this->PetaniModel->detailData(($id_petani)),
        ];
        return view('detailPetani', $data);
    }
}