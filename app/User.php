<?php

namespace App;

use App\Notifications\VerifyEmailSend;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'nickname',
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

    public function sendEmailVerificationNotification()
    {
        $this->notify(new VerifyEmailSend);
    }
    public function user_pushes()
    {
        return $this->hasmany('App\Push');
    }

    public static $editNameRules = array(

        'name' => 'required|max:50'

    );
    public static $editNicknameRules = array(

        'nickname' => 'required|max:50'

    );

    public static $editEmailRules = array(

        'email' => 'required|email'

    );

    public static $editPasswordRules = array(

        'password' => 'confirmed|min:8'

    );
}
