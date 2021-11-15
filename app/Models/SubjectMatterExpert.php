<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubjectMatterExpert extends Model
{
    protected $guarded = ['id'];

    // Subject Matter Expert will have many Products mapped
    public function products() {
        return $this->hasMany('App\Models\Product')->take(5);
    }

    // Function to fetch top subject matter experts for home page
    public function fetchTopExperts()
    {
        $experts = $this::limit(3)->get();
        return $experts;
    }

    // Function to fetch all subject matter experts
    public function fetchAllExperts()
    {
        $experts = $this::get();
        return $experts;
    }

    // Function to fetch individual subject matter experts
    public function fetchExpertDetail($id)
    {
        $expert = $this::where('id',$id)->first();
        return $expert;
    }
}
