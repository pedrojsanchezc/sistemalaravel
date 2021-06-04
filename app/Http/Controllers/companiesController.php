<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Http\Controllers\companies;
use App\Models\company;
use Illuminate\Http\Request;
use App\Http\Controllers\delete;


class companiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */

    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 10;

        if (!empty($keyword)) {
            $companies = company::where('Nombre', 'LIKE', "%$keyword%")
                ->orWhere('Correo', 'LIKE', "%$keyword%")
                ->orWhere('Logotipo', 'LIKE', "%$keyword%")
                ->orWhere('SitioWeb', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $companies = company::latest()->paginate($perPage);
        }

        return view('companies.index', compact('companies'));
    }   


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('companies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {

        $campos=[
            'Nombre' => 'required|string|max:30',
            'Correo' => 'required|email',
            'Logotipo' => 'required|max:10000|mimes:jpeg,png,jpg',
            'SitioWeb' => 'required|string|max:30'
            //'Apellido' => 'required|string|max:100',
           // 'ApellidoMaterno' => 'required|string|max:100',
           // 'Correo' => 'required|email',
           // 'Foto' => 'required|max:10000|mimes:jpeg,png,jpg'
        ];
        $Mensaje=["required" => 'El :attribute es requerido'];

        $this -> validate($request, $campos, $Mensaje);

       // $requestData = $request->all();
        $requestData = $request->except('_token');
                if ($request->hasFile('Logotipo')) {
            $requestData['Logotipo'] = $request->file('Logotipo')
                ->store('uploads', 'public');
        }

        company::create($requestData);

        return redirect('companies')->with('flash_message', 'company added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $company = company::findOrFail($id);

        return view('companies.show', compact('company'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $company = company::findOrFail($id);

        return view('companies.edit', compact('company'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $requestData = $request->except(['_token','_method']);
                if ($request->hasFile('Logotipo')) {
            $requestData['Logotipo'] = $request->file('Logotipo')
                ->store('uploads', 'public');
        }

        $company = company::findOrFail($id);
        $company->update($requestData);

        return redirect('companies')->with('Mensaje', 'Empresa modificada con éxito!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {   
        $company = company::findOrFail($id);
        company::destroy($id);

        return redirect('companies')->with('Mensaje', 'Empresa eliminada');
    }
}

