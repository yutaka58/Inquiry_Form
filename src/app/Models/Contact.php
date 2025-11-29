<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    // contactsテーブルが対象
    protected $table = 'contacts';

    // どのカラムがマスアサインメント可能か（必要に応じて追加してください）
    protected $fillable = [
        'category_id',
        'first_name',
        'last_name',
        'gender',
        'email',
        'tel',
        'address',
        'building',
        'detail',
    ];

    /**
     * Categoryモデルとのリレーション（多対一）
     * 問い合わせ（Contact）は一つのカテゴリ（Category）に属する。
     * contacts.category_id -> categories.id
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}