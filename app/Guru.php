<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    protected $table = "guru";
    protected $primaryKey = "id_guru";    
    protected $fillable = ['nama_guru','nip','password','tempat_lahir','tanggal_lahir','alamat','no_telp','level','email'];
}
