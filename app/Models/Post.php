<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Mail\Markdown;
use Illuminate\Support\Facades\DB;

/**
 * App\Models\Post
 *
 * @property int $id
 * @property string $title
 * @property string $image_url
 * @property string $slug
 * @property string|null $summary
 * @property string $content
 * @property int $office_id
 * @property int $is_published
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read mixed $html
 * @property-read \App\Models\Office $office
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|Post newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Post newQuery()
 * @method static \Illuminate\Database\Query\Builder|Post onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Post query()
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereImageUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereIsPublished($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereOfficeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereSummary($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|Post withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Post withoutTrashed()
 * @mixin \Eloquent
 */
class Post extends Model
{
    use HasFactory, SoftDeletes;

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
    protected $fillable = [
        'title',
        'image_url',
        'slug',
        'content',
        'office_id',
        'is_published',
    ];

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
