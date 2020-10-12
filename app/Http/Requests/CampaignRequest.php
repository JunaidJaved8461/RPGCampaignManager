<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CampaignRequest extends FormRequest
{
	public function rules()
    {
    	return [
    		'name' 			=> 'required|string|max:255',
    		'description' 	=> 'required|string|max:5000'
    	];
    }
}