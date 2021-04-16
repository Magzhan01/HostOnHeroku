<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientsDetails extends Model
{
    use HasFactory;

    protected $fillable = ['client_id', 'filename'];

    public function client() {
        return $this->belongsTo('App\Clients');
    }
}
