<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lead extends Model {

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = array(
        'email' =>'required|email|unique:leads'
    );

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'leads';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array();

    public function getId(){
        return $this->id;
    }

    public function getName(){
        return $this->name;
    }

    public function getEmail(){
        return $this->email;
    }

}
