<?php namespace CodeCommerce;

use Illuminate\Database\Eloquent\Model;

class Order extends Model {

    protected $fillable = [
      'id', 'user_id', 'total', 'status', 'transaction', 'created_at'
    ];

	public function items()
    {
        return $this->hasMany('CodeCommerce\OrderItem');
    }

    public function user()
    {
        return $this->belongsTo('CodeCommerce\User');
    }

}
