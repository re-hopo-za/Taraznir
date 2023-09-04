<?php

namespace App\Trait;


use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

trait CommonApiTrait{

    /**
     * Display a listing of the resource.
     * @param Request $request
     * @return Application|ResponseFactory|Response
     */
    public static function index(Request $request): Application|ResponseFactory|Response
    {
        $keyword   = $request->keyword   ?: null;
        $limit     = $request->limit     ?: 10;
        $orderBy   = $request->orderBy   ?: 'id';
        $direction = $request->direction ?: 'asc';


        if(  $request->filled('keyword') ){
            return response(
                self::$model::search( $keyword )->get()
            );
        }

        if(  $request->filled('recent') ){
            return response(
                self::$model::activeScope()->latest( $orderBy )->take( $limit )->get()
            );
        }

        $result = self::$model::orderByScope( $orderBy ,$direction )->activeScope()->paginate( $limit );

        if ($limit)
            $result->appends('limit', $limit);

        if ($orderBy)
            $result->appends('orderBy'   , $orderBy);
        $result->appends('direction' , $direction);

        return response(
            $result
        );
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show( int $id ): response
    {
        return response(
            self::$model::where( 'id' ,$id )->activeScope()->first() ?? []
        );
    }



}
