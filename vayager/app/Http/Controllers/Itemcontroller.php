<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\http\Requests\CreateItemRequest;

class ItemController extends Controller
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cgies = \App\Item::pluck('pic', 'id');
        return view('items.create', compact('cgies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateItemRequest $request)
    {
        //進到裡面表示驗證成功
    }
    // public function store(Request $request)
    // {
    //     // dd($request->all());
    //     //驗證表單是否正確
    //     //控制器驗證
    //     // $this->validate($request, [
    //     //     'title' => 'required | max:5',
    //     //     'size' => 'required'
    //     // ]);
    //     //手動建立驗證器
    //     // $validator =
    //     //     Validator::make($request->all(), [
    //     //         'title' => 'required | max:5',
    //     //         'size' => 'required'
    //     //     ]);
    //     // if ($validator->fails()) {
    //     //     //我的錯誤處理
    //     //     dd('表單填寫錯誤');
    //     }
    //}

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
    public function edit($id)
    {
        //
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
