<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Validator;

class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function read(Request $request){
        $start = $request->start;
        $length = $request->length;
        $search = strtoupper($request->search['value']);
        $sort = $request->columns[$request->order[0]['column']]['data'];
        $dir = $request->order[0]['dir'];

        $query = Application::select('applications.*');
        if($search != ""){
            $query->whereRaw("upper(email) like '%$search%'");
        }
        $recordsTotal = $query->count();
        $query->offset($start);
        $query->limit($length);
        $query->orderBy($sort, $dir);
        
        $applications = $query->get();

        $data = [];
        foreach($applications as $row){
            $arrTitle = ["","Frontend Web Programmer","Fullstack Web Programmer","Quality Control"];
			$row->title_name = $arrTitle[$row->title_id];
            $row->date_apply = date('d/m/Y',strtotime($row->created_at));
            $row->no = ++$start;
			$data[] = $row;
		}
        return response()->json([
            'draw'=>$request->draw,
			'recordsTotal'=>$recordsTotal,
			'recordsFiltered'=>$recordsTotal,
			'data'=>$data
        ], 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title_id'       => 'required',
            'email'         => 'required|email|unique:applications',
            'telephone'     => 'required|numeric',
            'date_of_birth' => 'required|numeric',
            'application_file' => 'required|mimes:pdf'
        ]);
        $application = Application::create([
            'title_id'      => $request->title_id,
			'email'         => $request->email,
            'telephone'     => $request->telephone,
            'date_of_birth' => $request->date_of_birth,
            'application_file' 	    => 'assets/files/default.pdf',
        ]);
        $application_file = $request->file('application_file');
        if ($application_file) {
            $filename = 'file.' . $request->application_file->getClientOriginalExtension();
            $src = 'assets/application/' . $application->id;
            if (!file_exists($src)) {
                mkdir($src, 0777, true);
            }
            $application_file->move($src, $filename);
            $application->application_file = $src . '/' . $filename;
            $application->save();
            return view('index');
        }
        if (!$application) {
            return redirect()->back();
        }
        return view('index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function show(Application $application)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function edit(Application $application)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Application $application)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function destroy(Application $application)
    {
        //
    }
}
