<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    const STILL_IN_BUSINESS = 1;
    const STOP_BUSINESS = 2;

    protected $table = "products";
    protected $fillable = [
        'name',
        'description',
        'quantity',
        'input_price',
        'output_price',
        'image',
        'percentage_discount',
        'staff_id',
        'brand_id',
        'category_id',
        'status'
    ];

    public function getStatusTextAttrbute()
    {
        return $this->statusArr[$this->status];
    }



    public $statusArr = [
        self::STILL_IN_BUSINESS => 'Đang kinh doanh',
        self::STOP_BUSINESS => 'Ngưng kinh doanh'
    ];

}
