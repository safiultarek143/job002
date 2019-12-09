<?php

namespace App;

use App\JobDescription;
use App\User;
use Illuminate\Database\Eloquent\Model;

class JobPost extends Model
{
    public function description()
    {
        return $this->belongsTo(JobDescription::class, 'job_description_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'job_posted_by_id');
    }

    public function location()
    {
        return $this->belongsTo(JobLocation::class, 'job_location_id');
    }
}
