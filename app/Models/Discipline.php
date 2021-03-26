<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

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
     * @return Media
     */
    public function getTrailerAttribute(): Media
    {
        return $this->medias
            ->where('is_trailer', true)
            ->first();
    }

    /**
     * Get all medias (trailer not included).
     *
     * @return Collection
     */
    public function getMedias(): Collection
    {
        return $this->medias
            ->where('is_trailer', false);
    }

    /**
     * @param string $type
     * @return Collection
     */
    public function getMediasByType(string $type): Collection
    {
        return $this->medias
            ->where('type', $type);
    }

    /**
     * @param string $type
     * @return bool
     */
    public function hasMediaOfType(string $type): bool
    {
        return $this->medias
                ->where('is_trailer', false)
                ->where('type', $type)
                ->count() > 0;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function professor()
    {
        return $this->belongsTo(Professor::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function medias()
    {
        return $this->hasMany(Media::class);
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
}
