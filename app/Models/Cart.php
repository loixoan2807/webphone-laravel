<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $table = 'cart';
    protected $fillable = [
        'id_product',
        'total_quantity',
        'id_status',
        'id_user'
    ];
    protected $guarded=[
        'id'
    ];
    public function statusorder()
    {
        return $this->belongsTo(StatusOrder::class,'id');
    }

}
