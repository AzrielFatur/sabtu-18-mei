<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServiceController extends Controller
{
    // AGAR HARUS LOGIN
    public function __construct()
    {
        $this->middleware('auth');
    }

    // UNTUK VIEW
    public function index()
    {
        // SERVICE
        $service = DB::table('service')->get();
        return view('index',['service' =>$service]);
        
        // DATA PT
        $datapt = DB::table('datapt')->get();
        return view('index',['datapt' =>$datapt]);
    }

    public function datapt()
    {
        
        // DATA PT
        $datapt = DB::table('datapt')->get();
        return view('datapt',['datapt' =>$datapt]);
    }
    
    public function gallery()
    {
        // DATA GALLERY
        $gallery = DB::table('gallery')->get();
        return view('gallery',['gallery' =>$gallery]);
    }

    public function about()
    {
        // DATA ABOUT
        $about = DB::table('about')->get();
        return view('about',['about' =>$about]);
    }

    public function tim ()
    {
        // DATA TIM
        $tim = DB::table('tim')->get();
        return view('tim',['tim' =>$tim]);
    }

    public function testi()
    {
        // DATA TESTIMONIAL
        $testi = DB::table('testi')->get();
        return view('testi',['testi' =>$testi]);
    }

    public function detail()
    {
        $detail = DB::table('detail')->get();
        return view('detail',['detail' =>$detail]);
    }
    
    public function sertifikaat()
    {
        $sertifikaat = DB::table('sertifikaat')->get();
        return view('sertifikaat',['sertifikaat' =>$sertifikaat]);
    }
    
    public function setting()
    {
        $users = DB::table('users')->get();
        return view('setting',['users' =>$users]);
    }



    // UNTUK DATA TAMBAH
    public function tambah()
    {
        // Manggil view tambah
        return view('tambah');
    }

    public function tambahdetail()
    {
        return view('tambahdetail');
    }
    
    public function tambahtesti()
    {
        return view('tambahtesti');
    }


    // UNTUK DATA STORE
    public function store(Request $request)
    {
        // Tambah data ke table service
        DB::table('service')->insert([
            'judul' => $request->judul,
            'keterangan' => $request->keterangan

            ]);            
        // Alihkan kehalaman service
        return redirect('/service');
    }

    public function storedetail(Request $request)
    {
        DB::table('detail')->insert([
            'daya' => $request->daya,
            'biayaperiksa' => $request->biayaperiksa,
            'biayaurus' => $request->biayaurus,
            'total' => $request->total
        ]);
        return redirect('/detail');
    }
    
    public function storetesti(Request $request)
    {
        DB::table('testi')->insert([
            'nama' => $request->nama,
            'pesan' => $request->pesan
        ]);
        return redirect('/testi');
    }



    // UNTUK UBAH DATA
    public function ubah($id) 
    {
        // mengambil data berdasarkan id
        $service = DB::table('service')->where('id',$id)->get();

        // Passing data service yang didapat dari view ubah.blade.php
        return view('ubah',['service' => $service]);
    }

    // DATA PT
    public function ubahdatapt($id) 
    {
        // mengambil data berdasarkan id
        $datapt = DB::table('datapt')->where('id',$id)->get();

        // Passing data service yang didapat dari view datapt.blade.php
        return view('ubahdatapt',['datapt' => $datapt]);
    }
    
    // ABOUT PT
    public function ubahabout($id) 
    {
        // mengambil data berdasarkan id
        $about = DB::table('about')->where('id',$id)->get();

        // Passing data service yang didapat dari view datapt.blade.php
        return view('ubahabout',['about' => $about]);
    }

    // GALLERY
    public function ubahgallery($id) 
    {
        // mengambil data berdasarkan id
        $gallery = DB::table('gallery')->where('id',$id)->get();

        // Passing data service yang didapat dari view datapt.blade.php
        return view('ubahgallery',['gallery' => $gallery]);
    }

    public function ubahtim($id)
    {
        // Ambil berdawsawrkan id
        $tim = DB::table('tim')->where('id',$id)->get();

        // Passing data dari data yang di dapat ke tim.blade.php
        return view('ubahtim',['tim' => $tim]);
    }

    public function ubahtesti($id)
    {
        // Ambil berdawsawrkan id
        $testi = DB::table('testi')->where('id',$id)->get();

        // Passing data dari data yang di dapat ke tim.blade.php
        return view('ubahtesti',['testi' => $testi]);
    }

    public function ubahdetail($id) 
    {
        $detail = DB::table('detail')->where('id',$id)->get();
        return view('ubahdetail',['detail' => $detail]);
    }
    
    public function ubahsertifikaat($id) 
    {
        $sertifikaat = DB::table('sertifikaat')->where('id',$id)->get();
        return view('ubahsertifikaat',['sertifikaat' => $sertifikaat]);
    }



    // UNTUK UPDATE
    public function update(Request $request )   
    {
        // Perbarui data service
        DB::table('service')->where('id',$request->id)->update([
        'judul' => $request->judul,
        'keterangan' => $request->keterangan,
        'gambar' => $request->pilihgambar
        ]);        
        

        // Alihkan halaman ke halaman service
        return redirect('/service');
    }

    public function updatedatapt(Request $request )   
    {
        // Perbarui data datapt
        DB::table('datapt')->where('id',$request->id)->update([
        'location' => $request->location,
        'telp' => $request->telp,
        'fax' => $request->fax,
        'mail' => $request->mail    
        ]);

        // Alihkan halaman ke halaman data
        return redirect('/data');
    }

    public function updateabout(Request $request )   
    {
        // Perbarui data datapt
        DB::table('about')->where('id',$request->id)->update([
        'text' => $request->text,
        'gambar' => $request->pilihgambar,
        'visi' => $request->visi,
        'misi' => $request->misi
        ]);

        // Alihkan halaman ke halaman about
        return redirect('/about');
    }

    public function updategallery(Request $request )   
    {
        // Perbarui data Gallery
        DB::table('gallery')->where('id',$request->id)->update([
        'gallery' => $request->gallery
        ]);

        // Alihkan halaman ke halaman gallery
        return redirect('/gallery');
    }

    public function updatetim(Request $request )
    {

        DB::table('tim')->where('id',$request->id)->update([
        'nama' => $request->nama,
        'gambar' => $request->gambar,
        'jabatan' => $request->jabatan
        ]);
        
        return redirect('/tim');
    }

    public function updatetesti(Request $request )
    {
        DB::table('testi')->where('id',$request->id)->update([
        'pesan' => $request->pesan,
        'nama' => $request->nama
        ]);

        return redirect('/testi');
    }

    public function updatedetail(Request $request )
    {
        DB::table('detail')->where('id',$request->id)->update([
        'daya' => $request->daya, 
        'biayaperiksa' => $request->biayaperiksa, 
        'biayaurus' => $request->biayaurus, 
        'total' => $request->total 
        ]);

        return redirect('/detail');
    }
    
    public function updatesertifikaat(Request $request )
    {
        DB::table('sertifikaat')->where('id',$request->id)->update([
        'paragraf' => $request->paragraf, 
        'judul' => $request->judul, 
        'alert' => $request->alert
        ]);

        return redirect('/sertifikaat');
    }


    public function hapus($id)
    {
        // Menghapus data service berdasarkan id
        DB::table('service')->where('id',$id)->delete();

        // Alihkan data ke halaman service
        return redirect('/service');
    }

    // public function welcome()
    // {
    //     $service = DB::table('service')->get();

    //     return view('welcome',['service' =>$service]);
    // }
}