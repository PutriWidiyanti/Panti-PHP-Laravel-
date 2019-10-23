<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use Session;
class DiriController extends Controller{


	public function index(){

		//mengambil data dari tabel pegawai
		$Diri = DB::table('Diri')->get();

		//mengirim data pegawai ke view index
		return view('index',['Diri' => $Diri]);

	}

	public function tambah(){
		return view('tambah');
	}

	public function awal(){
		return view('awal');
	}

	public function about(){
		return view('about');
	}

	public function kegiatan(){
		return view('/kegiatan');
	}

	public function kontak(){
		return view('/kontak');
	}

	public function admin(){
		return view('/admin');
	}

	public function notif(){
		return view('/notif');
	}

	public function input(){
		return view('/input');
	}

	public function inputKegiatan(){
		return view('/inputKegiatan');
	}

	public function formAdmin(){
		return view('/formAdmin');
	}

	public function inputDonasi(){
		return view('/inputDonasi');
	}

	public function inputDonatur(){
		return view('/inputDonatur');
	}


	//method untuk input data
	public function store(Request $request){
		//insert data ke tabel Diri

		DB::table('Diri')->insert([
			'id' => $request->id,
			'nama' => $request->nama,
			'alamat' => $request->alamat,
			'nama_orangtua' => $request->nama_orangtua,
			'pendidikan' => $request->pendidikan,
			'status' => $request->status,
			'tanggal_masuk' => $request->tanggal

		]);

		//link ke halaman tampilan tabel
		return redirect('/Diri/crud');
	}

	//method untuk input data kegiatan
	public function inKegiatan(Request $request){

		DB::table('kegiatan')->insert([
			'id' => $request->id,
			'pemberi_kegiatan' => $request->pemberi_kegiatan,
			'nama_kegiatan' => $request->nama_kegiatan,
			'alamat' => $request->alamat,
			'hari' => $request->hari,
			'tanggal_jam' => $request->tanggal_jam,
			'status' => $request->status
		]);

		return redirect('/Diri/crudKegiatan');
	}

	//input data donasi
	public function inDonasi(Request $request){

		DB::table('donasi')->insert([
			'id' => $request->id,
			'tanggal' => $request->tanggal,
			'nama_donatur' => $request->nama_donatur,
			'jumlah_donasi' => $request->jumlah_donasi
		]);

		return redirect('/Diri/crudDonasi');
	}
	

	//input data donatur
	public function inDonatur(Request $request){

		DB::table('donatur')->insert([
			'id_donatur' => $request->id_donatur,
			'nama_donatur' => $request->nama_donatur,
			'alamat' => $request->alamat,
			'telp' => $request->telp
		]);

		return redirect('/Diri/crudDonatur');
	}

	//method untuk mengambil data sesuai id(ubah)
	public function edit($id){

		//mengambil data berdasarkan id yang dipilih
		$ambil = DB::table('Diri')->where('id',$id)->get();

		//kirim data pegawai yang telah diambil ke edit.blade.php
		return view('edit',['Diri' => $ambil]);
	}

	//method ubah data panti
	public function ubah($id){
		$get = DB::table('Diri')->where('id',$id)->get();

		return view('ubah', ['Diri' => $get]);
	}

	//method menampilkan data kegiatan panti (ubah)
	public function ubahKegiatan($id){
		$up = DB::table('kegiatan')->where('id',$id)->get();


		return view('ubahKegiatan', ['kegiatan' => $up]);
	}

	//method tampil data donasi
	public function ubahDonasi($id){

		$don = DB::table('donasi')->where('id',$id)->get();

		return view('ubahDonasi', ['donasi' => $don]);
	}

	//method tampil donatur sesuai id
	public function ubahDonatur($id){

		$tur = DB::table('donatur')->where('id_donatur', $id)-> get();

		return view('ubahDonatur', ['donatur' => $tur]);
	}

	//method untuk ubah data
	public function update(Request $request){
		//ubah data
		DB::table('Diri')->where('id',$request->id)->update([
			'nama' => $request->nama,
			'alamat' => $request->alamat,
			'nama_orangtua' => $request->nama_orangtua,
			'pendidikan' => $request->pendidikan,
			'status' => $request->status,
			'tanggal_masuk' => $request->tanggal
		]);

		//kembali ke halaman tabel
		return redirect('/Diri/crud');
	}

	//method ubah data kegiatan panti
	public function upKegiatan(Request $request){

		DB::table('kegiatan')->where('id', $request->id)->update([
			'pemberi_kegiatan' => $request->pemberi_kegiatan,
			'nama_kegiatan' => $request->nama_kegiatan,
			'alamat' => $request->alamat,
			'hari' => $request->hari,
			'tanggal_jam' => $request->tanggal_jam,
			'status' => $request->status
		]);

		return redirect('/Diri/crudKegiatan');
	}

	//method ubah data donasi
	public function upDonasi(Request $request){

		DB::table('donasi')->where('id', $request->id)-> update([
			'tanggal' => $request->tanggal,
			'nama_donatur' => $request->nama_donatur,
			'jumlah_donasi' => $request->jumlah_donasi
		]);

		return redirect('/Diri/crudDonasi');
	}

	//ubah donatur
	public function upDonatur(Request $request){

		DB::table('donatur')->where('id_donatur', $request->id_donatur)-> update([
			'nama_donatur' => $request->nama_donatur,
			'alamat' => $request->alamat,
			'telp' => $request->telp
		]);
		return redirect('/Diri/crudDonatur');
	}

	//untuk mengambil data berdasarkan id(hapus)
	public function hapus($id){
		//menghapus data berdasarkan id
		DB::table('Diri')-> where('id',$id)->delete();
		
		//kembali ke tampilan tabel
		return redirect('/Diri/crud');
	}

	//hapus data kegiatan
	public function hapusKegiatan($id){

		DB::table('kegiatan')-> where('id', $id)->delete();

		return redirect('/Diri/crudKegiatan');
	}

	//hapus data donasi
	public function hapusDonasi($id){

		DB::table('donasi')->where('id',$id)->delete();

		return redirect('/Diri/crudDonasi');
	}

	//hapus data donatur
	public function hapusDonatur($id){

		DB::table('donatur')->where('id_donatur', $id)->delete();

		return redirect('/Diri/crudDonatur');
	}


	//alert sukses
	public function sukses(){
		Session::flash('sukses','ini notifikasi sukses');
		return redirect('/Diri/notif');
	}

	public function crud(){
		$Diri = DB::table('Diri')->get();

		//mengirim data pegawai ke view index
		return view('crud',['Diri' => $Diri]);


	}

	//crud kegiatan panti
	public function crudKegiatan(){
		$kegiatan = DB::table('kegiatan')->get();

		return view('crudKegiatan',['kegiatan' => $kegiatan]);
	}

	//tabel donasi
	public function crudDonasi(){

		$donasi = DB::table('donasi')->get();

		return view('crudDonasi', ['donasi' => $donasi]);
	}

	//tabel donatur
	public function crudDonatur(){

		$don = DB::table('donatur')->get();

		return view('crudDonatur', ['donatur' => $don]);
	}
	//login
	public function masuk(Request $request){
		if($request->username == "putri" and $request->pass == "12345"){
			return redirect('/Diri/formAdmin');
		}else{
			return redirect('/Diri/admin');
		}
	}



}


