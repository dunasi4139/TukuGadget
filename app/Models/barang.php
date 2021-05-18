<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class barang extends Model
{
    use HasFactory;
    protected $table = "barangs";
    protected $primaryKey = "id";
    protected $fillable = [
        'nama' ,
        'jenis',
        'harga',
        'alamat',
        'deskripsi',
        'gambar',
    ];
    public function allData(){
        return DB::table('barangs')->get();
    }
    public function latestProduct(){
        return barang::orderBy('created_at','DESC')->get()->take(6);
    }
}