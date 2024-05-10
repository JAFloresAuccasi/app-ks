<?php namespace App\Models\text_customizations;

use App\Models\customer;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class text_customizations_model extends Model
{
    use HasFactory;
    protected $table = "text_customizations";
    protected $primaryKey = "id";
    protected $allowedFields = ['heading_text',
    'disabled_enabled_text',
    'heading_text_weight',
    'heading_fonts',
    'heading_text_size',
    'heading_mobile_text_size',
    'heading_text_color',
    'sub_heading_text',
    'disabled_enabled_sub_text',
    'sub_heading_text_weight',
    'sub_heading_fonts',
    'sub_heading_text_size',
    'sub_heading_mobile_text_size',
    'sub_heading_text_color'];
    
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}