<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Admin
 * 
 * @property int $idadmin
 * @property string $email
 * @property string $mdp
 * @property string $nom
 * @property string|null $prenom
 *
 * @package App\Models
 */
use Illuminate\Support\Facades\DB;
use Exception;

 class Admin extends Model
{
	protected $table = 'admin';
	protected $primaryKey = 'idadmin';
	public $timestamps = false;

	protected $fillable = [
		'email',
		'mdp',
		'nom',
		'prenom'
	];

	public function login(){
        $utilisateur=DB::selectOne("select * from admin where email='".$this->email."' and mdp='".$this->mdp."'");
        if($utilisateur==null)
            throw new Exception("Authentification incorrect");
        $this->idadmin=$utilisateur->idadmin;
        $this->nom=$utilisateur->nom;
        $this->prenom=$utilisateur->prenom;
    }
}
