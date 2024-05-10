<?php

namespace App\Models;
use App\Models\button_settings\button_settings_model;
use App\Models\pop_up_settings\pop_up_settings_model;
use App\Models\text_customizations\text_customizations_model;
use App\Models\button_optional\button_optional_model;
use App\Models\restriction_country\restriction_country_model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    use HasFactory;
    protected $table = "customer";
    protected $primaryKey = "id";
    protected $allowedFields = ['id','shop_url'];

    public function button_settings_model()
    {
      return $this->hasOne(button_settings_model::class,'customer_id');
    }
    public function pop_up_settings_model()
    {
      return $this->hasOne(pop_up_settings_model::class,'customer_id');
    }
    public function text_customizations_model()
    {
      return $this->hasOne(text_customizations_model::class,'customer_id');
    }
    public function button_optional_model()
    {
      return $this->hasOne(button_optional_model::class,'customer_id');
    }
    public function restriction_country_model()
    {
    return $this->hasMany(restriction_country_model::class,'customer_id');
    }
}