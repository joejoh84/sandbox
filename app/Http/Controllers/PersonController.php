<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests;
use App\Models\Person;

class PersonController extends Controller
{
  function index($ctx = 'presentation'){
    $p = Person::where('id',1)->get()[0];
    $name = $p->firstName.' '.$p->lastName;
    $fullName = explode(' ', $name);
    return Response(
      view('presentation',
        ['title' => $name,
        'context' => $ctx,
        'content' => $p->$ctx,
        'firstName' => $fullName[0],
        'lastName' => $fullName[1]]
      ),200);
  }

  function show(){
    $p = Person::where('id', 1)->get();
    return '$p->firstName()';
  }

  function retrievePerson($id){
    $retreivedPerson = Person::where('id', 1)->get();
    return $retrievePerson;
  }
}
