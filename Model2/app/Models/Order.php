<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Order extends Model
{
    public function users(): BelongsToMany
    {
        return $this->belongsTo(Order::class);
    }

    public function orderDetails()
{
    return $this->hasMany(OrderDetail::class);
}

}
