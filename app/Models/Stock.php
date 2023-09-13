<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;
    protected $fillable = [
        'ticket',
        'price',
        'number',
        'date'
    ];
    public $timestamps = false;

//    private string $ticket;
//    private string $price;
//    public string $number;
//    private string $date;
//    public function getTicket(): string
//    {
//        return strtoupper($this->ticket);
//    }
//
//    public function getPrice(): string
//    {
//        return number_format($this->price,2,",",".");
//    }
//
//    public function getDate(): string
//    {
//        return date($this->date,"d/m/Y");
//    }
}
