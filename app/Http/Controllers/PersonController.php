<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonController extends Controller
{
        //Membuat Attribute Name
        private $code = "190914025";
        private $name = "Mochamad Kevin Nur Setia Adji";

        public function sendData() {
            $code = $this->code;
            $name = $this->name;

            return view("person.sendData", compact('code', 'name'));
        }

        //Membuat Method Baru
        public function show($param) {
            //Merubah Attribute Name
            $this->name = $param;
            return $this->name;
        }
        
        //Membuat Method Index
        public function index() {
            return view("person.index");
        }

         //Membuat Method Index
        public function add() {
            return view("person.add");
        }

        public function addProcess(Request $request)
        {
            $this->validate($request,[
            'person_name' => 'required|max:30',
            'person_email' => 'required|email'
            ]);
            
            return view('person.show', ['data' => $request]);
        }
}
