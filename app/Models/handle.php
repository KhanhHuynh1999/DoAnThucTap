<?php

namespace App;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class handle extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $primarykey='idPhieuChi';

    protected $fillable = [
        'image'
    ];
}