<?php namespace App\Models\button_optional;

use App\Models\customer;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class button_optional_model extends Model
{
    use HasFactory;
    protected $table = "button_optional";
    protected $primaryKey = "id";

    protected $returnType = 'object';
    protected $createdField = 'created_at';
    protected $allowedFields = [
    'button_border_radius',
    'button_border_width',
    'button_text_color',
    'button_background_color',
    'button_border_color',
    'text_button',
    'enter_button_border_radius',
    'enter_button_border_width',
    'enter_button_text_color',
    'enter_button_background_color',
    'enter_button_border_color',
    'disabled_enabled_optional',
    'customer_id'];
    
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}