<?php namespace App\Http\Controllers;

use App\Models\Lead;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Laravel\Lumen\Routing\Controller as BaseController;

class LeadController extends BaseController
{

    /**
     * Register lead
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function register(){

        $messages = array(
            'unique' => 'This e-mail is already in our list.'
        );

        $validator = Validator::make(Input::all(), Lead::$rules, $messages);
        if($validator->fails()){
            return response()->json(array(
                'error' => true,
                'messages' => $validator->messages()->all()
            ));
        }
        $ent = new Lead();
        $ent->email = Input::get('email');
        $ent->save();

        return response()->json(array(
            'id' => $ent->getId()
        ));
    }

}
