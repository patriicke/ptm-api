<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $fillable =['msg','image','type','school','assign_to'];
    protected $table = "news";
    protected $guarded = ['id'];

    public function schools()
    {
        return $this->hasOne("App\Models\School", "id", "school");
    }

}
