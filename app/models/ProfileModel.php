<?php
class ProfileModel extends Model
{
    protected $table_name = "profiles";

    public function user()
    {
        return $this->hasOneOnly('UserModel', 'id', 'user_id');
    }
}