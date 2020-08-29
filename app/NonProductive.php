<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use \DateTimeInterface;

class NonProductive extends Model
{
    use SoftDeletes;

    public $table = 'non_productives';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'reason',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    const REASON_SELECT = [
        'Line cut'              => 'Line cut',
        'Bad line'              => 'Bad line',
        'Hang up'               => 'Hang up',
        'Mobile/data questions' => 'Mobile/data questions',
        'General information'   => 'General information',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
