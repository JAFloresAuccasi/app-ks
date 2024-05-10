<?php namespace App\Models\button_settings;

use App\Models\customer;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class button_settings_model extends Model
{
    use HasFactory;
    protected $table = "button_settings";
    protected $primaryKey = "id";

    protected $returnType = 'object';
    protected $createdField = 'created_at';
    protected $allowedFields = ['button_1_text',
    'button_1_border_radius',
    'button_1_border_width',
    'button_1_text_color',
    'button_1_background_color',
    'button_1_border_color',
    'button_2_text',
    'button_2_border_radius',
    'button_2_border_width',
    'button_2_text_color',
    'button_2_background_color',
    'button_2_border_color',
    'Redirect_URL',
    'disabled_enabled_buttons',
    'customer_id'];
    
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}