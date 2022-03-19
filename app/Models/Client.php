<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $table = 'clients';
    protected $fillable = [
        'id', 'name', 'email', 'status', 'age', 'country', 'height', 'weight', 'target_weight', 'unit_system',
        'code', 'paid', 'paid_session','utma', 'gender', 'last_email',
        'omnisend_id', 'affected', 'checked', 'plan_opened',
        'payment_method', 'level'
    ];

    public function settings() {
        return $this->hasMany(ClientSetting::class);
    }

    //Todo: move IP from here
    public function getIp() {
        $ipEntry = $this->settings()->where('field', 'ip')->get()->first();

        if (empty($ipEntry)) {
            return "-";
        }

        return $ipEntry->value;
    }
}
