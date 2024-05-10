<?php namespace App\Models\restriction_country;

use App\Models\customer;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class restriction_country_model extends Model
{
    use HasFactory;
    protected $table = "restriction_country";
    protected $primaryKey = "id";

    protected $returnType = 'object';
    protected $createdField = 'created_at';
    protected $allowedFields = ['country',
    'age',
    'customer_id'];
    
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}