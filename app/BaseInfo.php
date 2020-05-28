<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BaseInfo extends Model
{
    protected $guarded=['id'];

    public function education(){
        return $this->hasmany(Education::class);
    }

    public function degree(){
        return $this->hasMany(Degree::class);
    }

    public function educationgo(){
        return $this->hasone(EducationGo::class);
    }
    public function experience(){
        return $this->hasMany(Experience::class);
    }

    public function honor(){
        return $this->hasMany(Honor::class);
    }
    public function job(){
        return $this->hasMany(Job::class);
    }
    public function language(){
        return $this->hasMany(Language::class);
    }
    public function migration_student(){
        return $this->hasMany(Migration_student::class);
    }
    public function migrationjob(){
        return $this->hasMany(MigrationJob::class);
    }
    public function research(){
        return $this->hasMany(Research::class);
    }
    public function sample(){
        return $this->hasMany(Sample::class);
    }
    public function socialnet(){
        return $this->hasMany(SocialNet::class);
    }
    public function workex(){
        return $this->hasMany(WorkEx::class);
    }





}
