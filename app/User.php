<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Mail;
use App\Mail\OTPMail;

class User extends Authenticatable
{
    use Notifiable;

    const ADMIN_TYPE = 'admin';
    const DEFAULT_TYPE = 'default';

    public function isAdmin()
    {
        return $this->user_type === self::ADMIN_TYPE;
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */ 
    protected $fillable = [
        'name', 'email', 'password', 'is_verified'
    ];
 
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function blogs()
    {
        return $this->hasMany('App\Blog');
    } 
    public function testimonial()
    {
        return $this->hasMany('App\Testimonials');
    } 

    public function OTP(){
        return Cache::get($this->OTPKey());
    }

    public function OTPKey()
    {

        return "OTP_for_{$this->id}";
    }
    
    public function cacheTheOTP(){

        $OTP = rand(100000, 999999);
        Cache::put([$this->OTPKey() => $OTP], now()->addSeconds(180));
        return $OTP;
    } 

    public function sendOTP(){

        $this->cacheTheOTP();
        Mail::to($this->email)->send(new OTPMail($this->cacheTheOTP()));

    }
    
   
}
