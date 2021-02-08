<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    //
    protected $table = 'items';
    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'code',
        'price',
        'amunt',
    ];

    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
    ];


}


// Laravel
// Shopping の続き

// - Migration でエラーになる人（DBバージョン古い）

// app/AppServiceProvider.php に追記


//  iya app/Provider か？
//     public function boot()
//     {
//         //
//         Schema::defaultStringLength(191);
//     }