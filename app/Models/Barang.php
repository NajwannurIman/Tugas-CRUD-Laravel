<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $fillable = ['kode_barang','nama_barang','foto_barang','kategori_barang','harga','jumlah'];
    // public $table = 'barang';
    protected $table = 'barang';
    

    // public $fillable = ['kode_barang','nama_barang','foto_barang','kategori_barang','harga','jumlah'];
  

}
