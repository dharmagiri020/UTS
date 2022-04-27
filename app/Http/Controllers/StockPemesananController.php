<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StockPemesananModel;

class StockPemesananController extends Controller
{


    public function __construct()
    {
        $this->StockPemesananModel = new StockPemesananModel();
    }



    public function index()
    {
        $data = [
            'product'=> $this->StockPemesananModel->allData(),
        ];
        return view('v_stock_pemesanan', $data);
    }

    public function detail($idproduk)
    {
        if (!$this->StockPemesananModel->detailData($idproduk)) {
            abort(404);
        }
        $data = [
            'product' => $this->StockPemesananModel->detailData($idproduk),
        ];
        return view('v_detailstockpemesanan', $data);
    }

    public function add()
    {
        return view('v_addstockpemesanan');
    }

    public function insert()
    {
        Request()->validate([
            'namaproduk' => 'required',
            'deskripsi' => 'required',
            'stock' => 'required',
            'harga' => 'required',
            'fotoproduk' => 'required|mimes:jpg,jpeg,bmp,png|max:1034',
        ],[
            'namaproduk.required'=>'Nama Produk Wajib Diisi !!',
            'deskripsi.required'=>'Deskripsi Produk Wajib Diisi !!',
            'stock.required'=>'Stock Produk Wajib Diisi !!',
            'harga.required'=>'Harga Produk Wajib Diisi !!',
            'fotoproduk.required'=>'Foto Produk Wajib Diisi !!',
        ]);

        //jika validasi tidak ada maka lakukan simpan data
        //upload gambar/foto
        $file = Request()->fotoproduk;
        $fileName = Request()->namaproduk .'.'. $file->extension();
        $file->move(public_path('fotoproduk'), $fileName);

        $data = [
            'namaproduk' => Request()->namaproduk,
            'deskripsi' => Request()->deskripsi,
            'stock' => Request()->stock,
            'harga' => Request()->harga,
            'fotoproduk' => $fileName,
        ];

        $this->StockPemesananModel->addData($data);
        return redirect()->route('product')->with('pesan','Data Berhasil Ditambahkan !!!');
    }


    public function ubah($idproduk)
    {
        if (!$this->StockPemesananModel->detailData($idproduk)) {
            abort(404);
        }
        $data = [
            'product' => $this->StockPemesananModel->detailData($idproduk),
        ];
        return view('v_ubahstockpemesanan', $data);
    }

    public function update($idproduk)
    {
        Request()->validate([
            'namaproduk' => 'required',
            'deskripsi' => 'required',
            'stock' => 'required',
            'harga' => 'required',
            'fotoproduk' => 'mimes:jpg,jpeg,bmp,png|max:1034',
        ],[
            'namaproduk.required'=>'Nama Produk Wajib Diisi !!',
            'deskripsi.required'=>'Deskripsi Produk Wajib Diisi !!',
            'stock.required'=>'Stock Produk Wajib Diisi !!',
            'harga.required'=>'Harga Produk Wajib Diisi !!',
        ]);

        //jika validasi tidak ada maka lakukan simpan data
        if (Request()->fotoproduk <> "") {
            //jika ingin ganti foto
        //upload gambar/foto
        $file = Request()->fotoproduk;
        $fileName = Request()->namaproduk .'.'. $file->extension();
        $file->move(public_path('fotoproduk'), $fileName);
        $data = [
            'namaproduk' => Request()->namaproduk,
            'deskripsi' => Request()->deskripsi,
            'stock' => Request()->stock,
            'harga' => Request()->harga,
            'fotoproduk' => $fileName,
        ];
        $this->StockPemesananModel->ubahData($idproduk, $data);
        }else {
            //jika tidak ingin ganti foto
            $data = [
                'namaproduk' => Request()->namaproduk,
                'deskripsi' => Request()->deskripsi,
                'stock' => Request()->stock,
                'harga' => Request()->harga,
            ];
            $this->StockPemesananModel->ubahData($idproduk, $data);
        }
        
        return redirect()->route('product')->with('pesan','Data Berhasil Di Ubah !!!');
    }

    public function hapus($idproduk)
    {
        //hapus atau delete foto
        $product= $this->StockPemesananModel->detailData($idproduk);
        if ($product->fotoproduk <> "") {
            unlink(public_path('fotoproduk').'/'. $product->fotoproduk);
        }
        $this->StockPemesananModel->hapusData($idproduk);
        return redirect()->route('product')->with('pesan','Data Berhasil Di Hapus !!!');
    }
}
