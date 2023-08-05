<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;
    protected $fillable = ['store_id','report_type','content','reporting_customer_id'];

    public function store(){
        return $this->belongsTo(Store::class, 'store_id');
    }

    public function customer(){
        return $this->belongsTo(Customer::class, 'customer_id');
    }

    public function reporting_store(){
        return $this->belongsTo(Store::class, 'reporting_store_id');
    }

    public function reporting_customer(){
        return $this->belongsTo(Customer::class, 'reporting_customer_id');
    }


}
