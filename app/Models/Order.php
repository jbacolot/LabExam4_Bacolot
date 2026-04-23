<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable =[
        'user_id', 'menu_id', 'quantity', 'total_cost', 'status'

    ];

    public function menu() {
        return $this->belongsTo(Menu::class);
    }

    
}
