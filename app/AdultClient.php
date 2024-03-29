<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\Models\Media;
use \DateTimeInterface;

class AdultClient extends Model implements HasMedia
{
    use SoftDeletes, HasMediaTrait;

    public $table = 'adult_clients';

    const GENDER_SELECT = [
        'Male'   => 'Male',
        'Female' => 'Female',
    ];

    protected $dates = [
        'follow_up',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    const STATUS_SELECT = [
        'Open'    => 'Open',
        'Pending' => 'Pending',
        'Closed'  => 'Closed',
    ];

    const AGE_SELECT = [
        '11-17' => '11-17',
        '18-25' => '18-25',
        '26-35' => '26-35',
        '36+'   => '36+',
    ];

    const MEDIUM_SELECT = [
        'Radio'            => 'Radio',
        'Tv'               => 'Tv',
        'Referrals'        => 'Referrals',
        'Field activities' => 'Field activities',
        'Other'            => 'Other',
    ];

    protected $fillable = [
        'first_name',
        'last_name',
        'phone',
        'telephone',
        'province',
        'district',
        'gender',
        'age',
        'medium',
        'counselling_notes',
        'status',
        'incident_description',
        'follow_up',
        'follow_up_phone',
        'time',
        'referred_to',
        'created_at',
        'updated_at',
        'deleted_at',
        'category',
        'referred_to_name',
        'referred_to_contact'
    ];

    const REFERRED_TO_SELECT = [
        'OSC'                             => 'OSC',
        'DREAMS'                          => 'DREAMS',
        'Clinic'                          => 'Clinic',
        'Hospital'                        => 'Hospital',
        'Social Welfare'                  => 'Social Welfare',
        'National Prosecutions Authority' => 'National Prosecutions Authority',
        'Police (CPU)'                    => 'Police (CPU)',
        'Police (VSU)'                    => 'Police (VSU)',
        'Chief/Head man'                  => 'Chief/Head man',
        'Head teacher'                    => 'Head teacher',
        'Religious leader'                => 'Religious leader',
        'Other'                           => 'Other',
    ];

    const PROVINCE_SELECT = [
        'Central Province'       => 'Central Province',
        'Eastern Province'       => 'Eastern Province',
        'Northern Province'      => 'Northern Province',
        'North Western Province' => 'North Western Province',
        'Southern Province'      => 'Southern Province',
        'Lusaka Province'        => 'Lusaka Province',
        'Luapula Province'       => 'Luapula Province',
        'Western Province'       => 'Western Province',
        'Muchinga Province'      => 'Muchinga Province',
        'Copperbelt Province'    => 'Copperbelt Province',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function registerMediaConversions(Media $media = null)
    {
        $this->addMediaConversion('thumb')->fit('crop', 50, 50);
        $this->addMediaConversion('preview')->fit('crop', 120, 120);
    }

    public function getFollowUpAttribute($value)
    {
        return $value ? Carbon::createFromFormat('Y-m-d H:i:s', $value)->format(config('panel.date_format') . ' ' . config('panel.time_format')) : null;
    }

    public function setFollowUpAttribute($value)
    {
        $this->attributes['follow_up'] = $value ? Carbon::createFromFormat(config('panel.date_format') . ' ' . config('panel.time_format'), $value)->format('Y-m-d H:i:s') : null;
    }

    public function createdby()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
