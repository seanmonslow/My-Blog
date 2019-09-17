<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    public function poster(){
        return $this->belongsTo('App\User', 'user_id', 'id');
    }

    public function comments(){
    	return $this->hasMany('App\Comment', 'post_id', 'id');
    }

    public function getContent(){
    	$content_array = json_decode($this->content, true)["ops"];

    	$content = "";

    	foreach($content_array AS $chunk){
    		$tempContent = $chunk["insert"];

    		$tempContent = str_replace("\n", "<br>", $tempContent);

    		if(isset($chunk["attributes"]["bold"])){
    			$tempContent = "<b>".$tempContent."</b>";
    		}

    		if(isset($chunk["attributes"]["italic"])){
    			$tempContent = "<em>".$tempContent."</em>";
    		}

    		$content .= $tempContent;
    	}

    	return $content;
    }
}
