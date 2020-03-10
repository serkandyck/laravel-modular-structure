<?php

namespace Modules\MobileApp\Entities;

use Illuminate\Database\Eloquent\Model;

class MobileApp extends Model
{
    protected $table = "mobile_app";

    protected $fillable = ['user_id', 'name', 'package_name', 'version'];


    /**
     * Get the user that owns the app.
     */
    public function user()
    {
        return $this->belongsTo('Modules\Account\Entities\User');
    }
}
