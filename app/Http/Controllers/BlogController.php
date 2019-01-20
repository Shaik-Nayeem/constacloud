<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use Session;
class BlogController extends Controller
{
    

    public function show(){

     //   return "fii";
        $blog=Blog::all();
        //echo'<pre>';
        //print_r($blog);
        //echo'</pre>';
        
        return view('blog_show',['blog'=>$blog]);
            }
        
    public function bloginsert(Request $request){

       //return $request->hasfile('image');
     
        $this->validate($request,[

            
            'description'=>'required',
            'image'=>'required',
            'image' => 'mimes:jpeg,png |max:4096',

            'description2'=>'required',
            'image2'=>'required',
            'image2' => 'mimes:jpeg,png |max:4096',
           

            
        ]);

       if($request->hasfile('image')){

            $file=$request->file('image');
            //return $file;
            $name=$file->getClientOriginalName();
            
            $destinationPath = 'upload_test1';
            $file->move($destinationPath,$name);
            //$file->move('uploads/',$name);
            //return $name;
            $status=filemtime($file);

            
       }

       if($request->hasfile('image2')){

        $file1=$request->file('image2');
        //return $file;
        $name2=$file1->getClientOriginalName();
        
        $destinationPath = 'upload_test1';
        $file1->move($destinationPath,$name2);
        //$file->move('uploads/',$name);
        //return $name;
        $status2=filemtime($file1);

        
   }
       
              
         // return  $name;
$blog=new Blog();


$blog->description=$request->get('description');
$blog->image=$name;
$blog->status=$status;

$blog->description2=$request->get('description2');
$blog->image2=$name2;
$blog->status2=$status2;


$blog->save();
//echo "successfully uploaded";
Session::flash('message', 'Blogs Created Successfully !'); 
return view('home')->with('info','Add Successfully!!');
//print_r($articles);

        }


    }