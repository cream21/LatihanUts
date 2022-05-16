<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class perpus extends Model
{
    use HasFactory;
    use HasFactory;
    protected $table = 'perpustakaan2';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = ['id','nama_buku','penerbit','pengarang','jumlah_buku','keterangan'];
}
