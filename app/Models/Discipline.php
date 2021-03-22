<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discipline extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'disciplines';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'code',
        'name',
        'synopsis',
        'difficulties',
        'professor_id',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function professor()
    {
        return $this->belongsTo(Professor::class,"professor_id","id");
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasManyThrough
     */
    public function classifications()
    {
        return $this->hasManyThrough(Classification::class, ClassificationDiscipline::class,
            'disc_id', 'id',
            'id', 'classification_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasManyThrough
     */
    public function tags()
    {
        return $this->hasManyThrough(Tag::class, TagDiscipline::class,
            'disc_id', 'id',
            'id', 'tag_id');
    }

    public function medias(){
        return $this->hasMany(Media::class,"discipline_id","id");
    }
    public function media_trailer(){
        return $this->hasMany(Media::class,"discipline_id","id")->where("is_trailer","=","1");
    }
}
