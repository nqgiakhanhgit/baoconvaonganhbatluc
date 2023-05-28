<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
// use App\Http\Resources\ContentResource;
// use App\Http\Resources\ProductCollection;
// use App\Http\Resources\ProductResource;
use App\Models\Content;
use App\Http\Services\ContentServices;
use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Request;
use Illuminate\Http\Response as HttpResponse;

class ContentController extends Controller
{
    protected $content;
    public function __construct(ContentServices $content) 
    {
        $this->content=$content;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $contents = $this->content->get();
        return response()->json([
            'product'=>$contents
        ], HttpResponse::HTTP_OK);
// return json_encode($contents);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_name)
    {
        $contents = Content::where('id_name', $id_name)->get();
        $contentResource = ContentResource::collection($contents);
        return response()->json([
            'data'=> $contentResource
        ], HttpResponse::HTTP_OK);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}