<?php

namespace Modules\Project\Http\Controllers;

use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Routing\Controller;
use Modules\Project\Http\Resource\ProjectResource;
use Modules\Project\Models\Project;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return LengthAwarePaginator
     */
    public function index(): LengthAwarePaginator
    {
        return Project::paginate();
    }



    /**
     * Show the specified resource.
     * @param int $id
     * @return ProjectResource
     */
    public function show( int $id ): ProjectResource
    {
        return new ProjectResource(
            Project::where( 'id' ,$id )->first()
        );
    }

}
