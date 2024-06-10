<?php

namespace App\Models;

use App\Notifications\ResponseUpdate;
use App\ResponseStatus;
use Filament\Notifications\Notification;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;



class Response extends Model
{
    use HasFactory;
    use SoftDeletes;
    use Notifiable;

    public function routeNotificationForMail(ResponseUpdate $notification): array|string
    {   
        $email_address = "ggcmis@dbiphils.com";
        // Return email address only...
        return $email_address;
    }

    protected $fillable = [
        'product_id',
        'full_name',
        'date_response',
        'contact',
        'email_address',
        'message',
        'review',
        'status',
    ];
    
    protected $casts = [
        'date_response' => 'datetime',
        'review' => 'boolean',
        'status' => ResponseStatus::class,
    ];
    public function equipment_title()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
    
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_title');
    }

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }

}
