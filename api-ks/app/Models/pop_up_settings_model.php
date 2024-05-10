<?php namespace App\Models\pop_up_settings;

use App\Models\customer;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pop_up_settings_model extends Model
{
    use HasFactory;
    protected $table = "pop_up_settings";
    protected $primaryKey = "id";
    protected $allowedFields = ['restriction_message',
    'cookie_lifetime_in_days',
    'width',
    'border_radius',
    'background_color',
    'border_width',
    'border_color',
    'top_and_bottom_padding',
    'left_and_right_padding',
    'upload_visual',
    'upload_banner',
    'banner_background_color',
    'banner_background_color_opacity',
    'customer_id'];
    
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}