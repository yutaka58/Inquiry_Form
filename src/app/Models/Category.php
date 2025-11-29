<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    // categoriesテーブルが対象
    protected $table = 'categories';

    // どのカラムがマスアサインメント可能か（必要に応じて追加してください）
    protected $fillable = [
        'content',
    ];

    /**
     * Contactモデルとのリレーション（一対多）
     * カテゴリ（Category）は複数の問い合わせ（Contact）を持つ。
     */
    public function contacts()
    {
        return $this->hasMany(Contact::class);
    }
}