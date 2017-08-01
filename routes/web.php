<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/about',function() {
// 	return view('about');
// });

// Route::get('/awal',function() {
// 	return view('about');
// });

// Route::get('about/1',function(){
	
// 	return view('about.satu');
// });

// Route::get('about/2',function(){
// 	return view('about.dua');
// });

// Route::get('about/3',function(){
// 	return view('about.tiga');
// });

// Route::get('siswa/{nama}/{sekolah}/{umur}',function($a,$b,$c){
// 	return 'Nama Saya :'.$a.'<br>' 
// 			.'Sekolah :'.$b.'<br>'
// 			.'Umur :'.$c;
// });

// Route::get('nama/{nama}',function($a){
// 	$a='John';
// 	return 'Ini halaman about '.$a;
// });

// Route::get('testmodel',function(){
// 	$a = App\Post::all();
// 	return $a;
// });

// Route::get('id',function(){
// 	$b = App\Post::find(1);
// 	return $b;
// });

// Route::get('model',function(){
// 	$c = App\Post::where('title','like','Tips cepat menikah')->get();
// 	return $c;
// });

// Route::get('ubah',function(){
// 	$post = App\Post::find(1);
// 	$post->title =" ciri keluarga sakinah";
// 	$post->save();
// 	return $post;
// });

// Route::get('tambah',function(){
// 	$post = new App\Post;
// 	$post->title= "Amalan Pembuka Jodoh";
// 	$post->content ="shalat malam, puasa sunah, silaturahmi,senyum,doa,tobat";
// 	$post->save();
// 	return $post;
// });

// Route::get('delete',function(){
// 	$post = App\Post::find(1);
// 	$post->delete();
// });

// Route::get('cektampilan',function(){
// 	return view('layouts.master');
// });

// Route::get('/halo', function(){
// 	return view('index');
// });

// Route::get('/orangtua', function(){
// 	$ortu = App\Orangtua::all();
// 	foreach ($ortu as $key) {
// 		echo $key->nama_ayah;
// 		echo " ";
// 		echo $key->umur_ayah;
// 		echo " tahun ";
// 		echo " dengan ";
// 		echo $key->nama_ibu;
// 		echo " ";
// 		echo $key->umur_ibu;
// 		echo " tahun ";
// 		echo " mempunyai anak ";
// 		foreach ($key->siswa as $data) {
// 			echo "<li>"."Nama :".$data->nama." Umur :".$data->umur." tahun. Jenis Kelamin :".$data->jk." Alamat :".$data->alamat."</li>";

// 			echo "<hr>";
// 		}
// 	}
// });

Route::get('index', 'Mycontroller@index');
Route::get('index1', 'Mycontroller@tampilmodel');
Route::get('index2', 'Mycontroller@tampilview');
Route::get('index3', 'Mycontroller@coba');


Route::resource('orangtua','OrangtuaController');
Route::resource('murid','MuridController');