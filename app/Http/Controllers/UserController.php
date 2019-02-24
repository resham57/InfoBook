<?php

namespace App\Http\Controllers;

use App\Exports\UsersExport;
use App\Http\Requests\CreateUser;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $directoryPath = storage_path('app/public/clients');
        $files = glob($directoryPath."/*.csv");
        $dataToShow = $this->getDataFromFile($files);
        return view('user.index', compact('dataToShow'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateUser $request)
    {
        $columns = ['name', 'email', 'gender', 'phone', 'address', 'preferredContact', 'nationality', 'dob', 'education'];
        $fields = $request->only($columns);
        //set titles
        $data['header'] =  array_map('strtoupper', $columns);
        //det infos
        $data['info'] = array_values($fields);

        $filename = getFileName($fields['name']);
        $path = storage_path('app/public/clients');

        Excel::create($filename, function($excel) use ($data) {
            $excel->sheet('Sheet1', function($sheet) use ($data) {
                $sheet->fromArray($data, null, 'A1', true, false);
            });
        })->store('csv', $path);

        return redirect()->route('user.index')->with('status', 'Successfully Created!!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $files = glob(storage_path('app/public/clients/').$id.'.csv');
        $dataToShow = $this->getDataFromFile($files);
        return view('user.show', ['dataToShow' => $dataToShow[0]]);
    }

    protected function getDataFromFile($files)
    {
        $data=[];
        foreach($files as $file){
            Excel::load($file, function ($reader) use (&$data) {
                $filename = $reader->getFileName();
                $reader->noHeading()->skipRows(1);
                $reader->each(function ($rowData) use (&$data, $filename) {
                    array_push($data, [
                        'name'          => $rowData[0],
                        'email'         => $rowData[1],
                        'gender'        => $rowData[2],
                        'phone'         => $rowData[3],
                        'address'       => $rowData[4],
                        'preferContact' => $rowData[5],
                        'nationality'   => $rowData[6],
                        'dob'           => $rowData[7],
                        'education'     => $rowData[8],
                        'filename'      => $filename
                    ]);
                });
            })->get();
        }
        return $data;
    }
}
