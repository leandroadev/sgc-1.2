<?php

namespace App\Http\Controllers;

use App\Models\Collaborator;
use App\Http\Requests\StoreUpdateCollaboratorRequest;
use Illuminate\Http\Request;

class CollaboratorsController extends Controller
{

    protected $request;
    private $repository;

    public function __construct(Request $request, Collaborator $collaborator)
    {
        $this->request = $request;
        $this->repository = $collaborator;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $collaborators = Collaborator::latest()->paginate();
        return view('admin.pages.collaborators.index', [
            'collaborators' => $collaborators,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.collaborators.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUpdateCollaboratorRequest $request)
    {
        $data = $request->only('cpf', 'name', 'email', 'telephone', 'birth', 'address');
        $collaborator = Collaborator::create($data);

        return redirect()->route('collaborators.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(!$collaborator = Collaborator::find($id))
            return redirect()->back();

        return view('admin.pages.collaborators.show', [
            'collaborator' => $collaborator
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(!$collaborator = Collaborator::find($id))
            return redirect()->back();

        return view('admin.pages.collaborators.edit', compact('collaborator'));    
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
        if(!$collaborator = Collaborator::find($id))
            return redirect()->back();

        $collaborator->update($request->all());
        
        return redirect()->route('collaborators.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $collaborator = Collaborator::where('id', $id)->first();
        if(!$collaborator)
            return redirect()->back();
        
        $collaborator->delete();

        return redirect()->route('collaborators.index');
    }

    /**
    * Search Collaborators
    */

    public function search(Request $request)
    {
        $filters = $request->except('_token');
        $collaborators = $this->repository->search($request->filter);

        return view('admin.pages.collaborators.index', [
            'collaborators' => $collaborators,
            'filters' => $filters,
        ]);
    }
}
