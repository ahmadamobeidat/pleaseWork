<?php

namespace DevLabs\Newscrud;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class News extends Model
{
    // ===================================================================================================================
    // ============================================= Use Section =========================================================
    // ===================================================================================================================
    use HasFactory;
    use SoftDeletes;
    // ===================================================================================================================
    // ============================================= Table Section =======================================================
    // ===================================================================================================================
    protected $table = 'news';
    // ===================================================================================================================
    // ============================================= fillables Section ===================================================
    // ===================================================================================================================
    protected $fillable = [
        'title_en',
        'title_ar',
        'status',
        'image',
        'description_ar',
        'description_en',
        'date',
    ];
    // ===================================================================================================================
    // ============================================= Accessors Section ===================================================
    // ===================================================================================================================
    public function getStatusAttribute($value)
    {
        if ($value == 1) {
            return 'Active';
        } elseif ($value == 2) {
            return 'Inactive';
        }
    }
}
