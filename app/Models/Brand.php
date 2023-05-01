<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Brand extends Model
{
    use HasFactory;
    use SoftDeletes;

    const DEFAULT_STATUS = 0;
    const ASSIGNED_STATUS = 1;

    public function getStatusTextAttrbute()
    {
        return $this->statusArr[$this->status];
    }

    protected $table = "brands";
    protected $fillable = [
        'name',
        'image',
        'description',
        'status'
    ];

    public $statusArr = [
        self::DEFAULT_STATUS => 'Mặc định',
        self::ASSIGNED_STATUS => 'Đã gán với sản phẩm'
    ];
}
