<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

/**
 * Class Article
 * 
 * @property int $idarticle
 * @property string $titre
 * @property int|null $categorie
 * @property string $resume
 * @property string $contenu
 * @property string $image
 * 
 *
 * @package App\Models
 */
class Article extends Model
{
	protected $table = 'article';
	protected $primaryKey = 'idarticle';
	public $timestamps = false;

	protected $casts = [
		'categorie' => 'int'
	];

	protected $fillable = [
		'titre',
		'categorie',
		'resume',
		'contenu',
		'image'
	];

	public function categorie()
	{
		return $this->belongsTo(Categorie::class, 'categorie');
	}

	public function slug(){
        $sl=str::slug($this->titre);
		info($sl);
		return $sl;
	}
	public static function search($mots){
        return DB::selectOne("select * from article where lower(titre)='".$mots."'or lower(resume)='".$mots."'");
        
    }
}
