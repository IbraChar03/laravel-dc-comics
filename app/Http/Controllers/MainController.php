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
    public function createPerson()
    {
        return view("pages.create-person");
    }
    public function requestPerson(Request $request)
    {
        $data = $request->validate(
            [
                "firstName" => "string|required|max:32",
                "lastName" => "string|required|max:32",
                "dateOfBirth" => "date|required",
                "height" => "required|integer|min:40|max:260"
            ]

        );
        $person = new Person();
        $person->firstName = $data["firstName"];
        $person->lastName = $data["lastName"];
        $person->dateOfBirth = $data["dateOfBirth"];
        $person->height = $data["height"];
        $person->save();
        return redirect()->route("home");
    }
    public function editPerson(Person $person)
    {
        return view("pages.edit-person", compact("person"));
    }
}