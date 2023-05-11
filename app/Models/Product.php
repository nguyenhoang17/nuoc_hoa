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

    protected $appends = ['status_text'];

    public $statusArr = [
        self::STILL_IN_BUSINESS => 'Đang kinh doanh',
        self::STOP_BUSINESS => 'Ngưng kinh doanh'
    ];

    static $status_Arr = [
        'STILL_IN_BUSINESS' => 1,
        'STOP_BUSINESS' => 2
    ];

    public function getStatusTextAttribute()
    {
        if ($this->status == self::STILL_IN_BUSINESS) {
            return 'Đang kinh doanh';
        } elseif ($this->status == self::STOP_BUSINESS) {
            return 'Ngưng kinh doanh';
        }
    }
    public function category() {
        return $this->belongsTo(Category::class,'category_id');
    }

    public function brand() {
        return $this->belongsTo(Brand::class,'brand_id');
    }

}
