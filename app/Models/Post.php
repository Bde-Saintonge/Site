<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Mail\Markdown;
use Illuminate\Support\Facades\DB;

class Post extends Model
{
    use HasFactory;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'posts';

    /**
     * The database primary key value.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'image_url', 'slug', 'content', 'office_id', 'is_published'];

    public function office()
    {
        return $this->belongsTo(Office::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getHtmlAttribute()
    {
        return Markdown::parse($this->content);
    }

    public function checkIntrash()
    {
        // dd(Post::select('in_trash')->find($this->id)->in_trash === 1 ? true : false);
        return (Post::select('in_trash')->find($this->id)->in_trash === 1) ? true : false;
    }

    public function softDelete()
    {
        $this->in_trash = 1;
        $this->save();
    }

    // TODO: Récupérer uniquement les in_trash false.
    // public function getExcerpt($max_words = 100, $ending = "...")
    // {
    //     $text = strip_tags($this->html);
    //     $words = explode(' ', $text);
    //     if (count($words) > $max_words) {
    //         return implode(' ', array_slice($words, 0, $max_words)) . $ending;
    //     }
    //     return $text;
    // }
}
