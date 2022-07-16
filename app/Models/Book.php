<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'book';

    public $timestamps = false;

    protected $fillable = ['judul','pengarang','penerbit','genre','deskripsi','cover','harga'];

    public function scopeFilter($query)
    {
        $query->where('judul', 'like', '%' . request('search-products') . '%')
              ->orWhere('pengarang', 'like', '%' . request('search-products') . '%')
              ->orWhere('genre', 'like', '%' . request('search-products') . '%');
    }
}
