<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Guru;

class GuruController extends Controller
{
    function index() {
        $data['guru'] = Guru::all();
        return view('guru.index',$data);
    }
    
    public function create()
    {
        return view('guru.create');
    }
    
    public function store(Request $request)
    {
        $guru = new guru([
            'nama_guru' => $request->get('nama_guru'),
            'nip' => $request->get('nip'),
            'password' => $request->get('password'),
            'tempat_lahir' => $request->get('tempat_lahir'),
            'tanggal_lahir' => $request->get('tanggal_lahir'),
            'alamat' => $request->get('alamat'),
            'no_telp' => $request->get('no_telp'),
            'level' => $request->get('level'),
            'email' => $request->get('email')
            ]);
            
            $guru->save();
            return redirect('/guru');
        }
        
        /**
        * Display the specified resource.
        *
        * @param  int  $id
        * @return \Illuminate\Http\Response
        */
        public function show($id)
        {
            //
        }
        
        /**
        * Show the form for editing the specified resource.
        *
        * @param  int  $id
        * @return \Illuminate\Http\Response
        */
        public function edit($id_guru)
        {
            $guru = Guru::find($id_guru);
            return view('guru.edit', compact('guru','id_guru'));
        }
        
        /**
        * Update the specified resource in storage.
        *
        * @param  \Illuminate\Http\Request  $request
        * @param  int  $id
        * @return \Illuminate\Http\Response
        */
        public function update(Request $request, $id)
        {
            $crud = Crud::find($id);
            $crud->title = $request->get('title');
            $crud->post = $request->get('post');
            $crud->save();
            return redirect('/guru');
        }
        
        /**
        * Remove the specified resource from storage.
        *
        * @param  int  $id
        * @return \Illuminate\Http\Response
        */
        public function destroy($id)
        {
          $guru = Crud::find($id);
          $guru->delete();
          return redirect('/guru');
        }
    }
    