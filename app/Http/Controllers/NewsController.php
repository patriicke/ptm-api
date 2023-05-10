<?php

namespace App\Http\Controllers;
use App\Models\News;
use App\Models\School;
use Illuminate\Http\Request;
use Auth;
use Yajra\DataTables\DataTables;
use URL;


class NewsController extends Controller
{
    public function index()
    {
        $news = News::where('type',Auth::user()->type)->orderBy('id','desc')->get();
        if (request()->ajax()) {
            return DataTables::of($news)
            ->addColumn('actions', 'news.action')
            ->editColumn('image',function ($new){
                    $path = URL::asset('images/news/'.$new->image) ;
                    return "<img src='".$path."' height='120' width='120'>";
                })
                ->escapeColumns([])
                ->rawColumns(['actions'])
                ->make(true);
        }
        // dd($news);
        return view('news.index',compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $schools = School::get();
        if (Auth::user()->type == 'principle') {
            $schools = School::where('id',Auth::user()->school)->get();
        }
        return view('news.create',compact('schools'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd( $request->school_id);
//        $image = basename($request->file('image')->store('public/news'));
        $image = time().''.rand(10,10000).'.'.$request->file('image')->getClientOriginalExtension();
        $request->image->move(public_path('images/news'), $image);
        $input = [
            'msg' => $request->msg,
            'image' => $image,
            'type'=> Auth::user()->type,
            'assign_to'=>$request->assign_to,
            'school'=>$request->school_id,
            // 'added_by' => Auth::user()->role
        ];

        // dd($input);
        $news = News::create($input);
        // if(Auth::user()->role == "admin"){
        //     $topic = "Parent_teacher_App";
        // }
        // else{
        //     $topic = "school_".Auth::user()->school_id;
        // }
        // FCMService::send(
        //     $topic,
        //     [
        //         'title' => $news->msg,
        //         'body' => $news->msg,
        //         'image' => URL::asset('images/news/'.$news->image)
        //     ]);
            
        return redirect('news')->with('success', 'News created successfully.');
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
    public function edit($id)
    {
        $news = News::with('schools')->find($id);
        $schools = School::get();
        if (Auth::user()->type == 'principle') {
            $schools = School::where('id',Auth::user()->school)->get();
        }
        return view('news.edit',compact('news','schools'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $news = News::find($request->news_id);

        if ($request->file('image')) {
//            $image = basename($request->file('image')->store('public/news'));
            $image = time().''.rand(10,10000).'.'.$request->file('image')->getClientOriginalExtension();
            $request->image->move(public_path('images/news'), $image);
            $news->image = $image;
        }
        $news->msg = $request->msg;
        $news->school = $request->school_id;
        $news->assign_to = $request->assign_to;
        $news->update();
        return redirect('news')->with('success', 'News updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $news = News::where('id', $request->id)->delete();

        return redirect('/news')->with('success','User successfully Deleted');
    }
}
