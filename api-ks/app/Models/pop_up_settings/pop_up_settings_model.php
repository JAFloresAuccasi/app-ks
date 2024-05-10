<?php namespace App\Models\pop_up_settings;

use App\Models\customer;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pop_up_settings_model extends Model
{
    use HasFactory;
    protected $table = "pop_up_settings";
    protected $primaryKey = "id";

    protected $returnType = 'object';
    protected $createdField = 'created_at';
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
    'disabled_enabled_visual',
    'upload_banner',
    'disabled_enabled_banner',
    'banner_background_color',
    'banner_background_color_opacity',
    'customer_id'];
    
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
//         public function getTest($id){
//       $query = $this->db->table('pop_up_settings_model')->select('id')->where('customer_id', $id)->where('disabled_enabled_visual',1)->get()->getResult();
//       return $query;
//   }
}