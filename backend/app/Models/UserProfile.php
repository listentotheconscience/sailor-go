<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class UserProfile
 *
 * @package App\Models;
 *
 * @property integer $id
 * @property string $username
 * @property string $status
 *
 * Relations
 *
 * @property User $user
 */
class UserProfile extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
