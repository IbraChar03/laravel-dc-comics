<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;

class MainController extends Controller
{
    public function home()
    {
        $persons = Person::all();

        return view("pages.home", compact("persons"));
    }
    public function showPerson(Person $person)
    {
        return view("pages.show-person", compact("person"));
    }
    public function deletePerson(Person $person)
    {
        $person->delete();
        return redirect()->route("home");
    }
}