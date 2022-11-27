<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LinkList extends Model
{
    use HasFactory;

    protected $keyType = 'string';
    public $timestamps = false;
    public $incrementing = false;
    protected $primaryKey = 'p_link';
    protected $table = 'link_list';
    

    protected $fillable = ['p_link','r_link'];
    
    
}
