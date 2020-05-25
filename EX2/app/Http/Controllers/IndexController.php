<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
class IndexController extends BaseController {

    use AuthorizesRequests,
        DispatchesJobs,
        ValidatesRequests;

    public function __construct() {

        $membres = [
            [
                "id" => 1,
                "last_name" => "Huber",
                "first_name" => "Marc",
                "year_of_birth" => 1998,
                "likes" => 985
            ],
            [
                "id" => 2,
                "last_name" => "Alain",
                "first_name" => "Delacroix",
                "year_of_birth" => 1956,
                "likes" => 3
            ],
            [
                "id" => 3,
                "last_name" => "Navard",
                "first_name" => "Nathalie",
                "year_of_birth" => 1963,
                "likes" => 15
            ],
            [
                "id" => 4,
                "last_name" => "JC",
                "first_name" => "Maillet",
                "year_of_birth" => 2003,
                "likes" => 101
            ],
            [
                "id" => 5,
                "last_name" => "Christine",
                "first_name" => "Chevaux",
                "year_of_birth" => 2003,
                "likes" => 203
            ],
            [
                "id" => 6,
                "last_name" => "Pierre",
                "first_name" => "Bezoule",
                "year_of_birth" => 1995,
                "likes" => 85
            ],
            [
                "id" => 7,
                "last_name" => "Arnauld",
                "first_name" => "Lapierre",
                "year_of_birth" => 1963,
                "likes" => 52
            ],
            [
                "id" => 8,
                "last_name" => "Constance",
                "first_name" => "Lefèvre",
                "year_of_birth" => 2001,
                "likes" => 41
            ],
            [
                "id" => 9,
                "last_name" => "Fred",
                "first_name" => "Lapin",
                "year_of_birth" => 1941,
                "likes" => 56
            ],
            [
                "id" => 10,
                "last_name" => "Sophie",
                "first_name" => "Bastin",
                "year_of_birth" => 2003,
                "likes" => 2
            ],
        ];

        $this->membres = collect($membres);
    }

    public function index() {

        //$diviseur = count($this->membre);
        $moyene = $this->moyeneLike();
        $maxLikes = $this->classement();
        $classement = $this->classement();



        return view('index', ["membres" => $this->membres, "moyene" => $moyene, "maxLike" => $maxLikes->first(),"classement" => $classement]);
    }

    public function membre($id) {



        $membre = $this->membres->firstWhere("id", $id);

        if ($membre == null) {
            return abort(404);
        }

        return view('show', ["membre" => $membre, "membres" => $this->membres]);
    }

    private function moyeneLike() {


        $moyene = $this->membres->avg->likes;
        return $moyene;
    }

    private function classement() {

        $membre = $this->membres->sortByDesc('likes');


        return $membre;
    }

    public function research(Request $request) {
       
        if ($request->method() == "POST") {
           $data = $request->input('data');
           //Si je peut convertire en INT c'est une année de naissance
           if (intval($data)) {
               
               $result = $this->researchByYearOfBirth($data);
               
               
           }else if(is_string($data)){
               $result = $this->researchByName($data);
               
           }
           
           return view('research', ["result" => $result,"count" => $result->count()]);
           
        }
            
        
    }
    
    private function researchByName($data){
        $result = $this->membres->Where("last_name", $data);
        
        return $result;
        
    }
    
    private function researchByYearOfBirth($data){
        
        $result = $this->membres->Where("year_of_birth", $data);
        
        return $result;
        
    }

}
