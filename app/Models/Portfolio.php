<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;
    protected $table = "portfolios";
    protected $fillable = [
        "app_name",
        "app_icon",
        "app_url",
        "app_url_fork",
        "app_photos",
        "short_desc",
        "desc",
        "tags",
        "feature",
        "slug",
        "visible_in_landing",
        "link_to_app",
    ];
}
