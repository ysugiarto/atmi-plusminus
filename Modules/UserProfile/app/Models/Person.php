<?php

namespace Modules\UserProfile\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\UserProfile\Database\Factories\PersonFactory;
use App\Models\User;

class Person extends Model
{
    use HasFactory;

    protected $table = 'persons';

    protected $dates = ['tgl_lahir'];

    protected $fillable = [
        'nama_lengkap',
        'nama_depan',
        'nama_belakang',
        'tempat_lahir',
        'tgl_lahir',
        'no_ktp',
        'no_hp',
        'no_telp',
        'jenis_kelamin',
        'email_pribadi',
        'email_organisasi',
        'foto',
        'user_id',
    ];

    protected static function newFactory(): PersonFactory
    {
        return PersonFactory::new();
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
