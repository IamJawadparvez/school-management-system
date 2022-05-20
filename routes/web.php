<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

  Route::get('',[
       'uses' => 'HomeController@welcome',
       'as' => 'home'
       
  ]);
  // Route::get('/dashboard',function(){
  //   return view('newtemplates.default');
  // })->name('dashboard');
  // Route::get('/secound',function(){
  //   return view('newtemplates.secound');
  // })->name('secound');

  Route::get('/test',function(){
    return view('newtemplates.default');
  });

    Route::get('/',[
       'uses' => 'HomeController@welcome',
       'as' => 'home'
  ]);

        Route::get('/login',[
       'uses' => 'Auth\LoginController@login',
       'as' => 'login'
  ]);

  Route::post('postlogin',[
       'uses' => 'Auth\LoginController@postlogin',
       'as' => 'postlogin'
  ]);

    Route::get('register',[
       'uses' => 'Auth\LoginController@register',
       'as' => 'register'
  ]);

    Route::get('logout',[
       'uses' => 'Auth\LoginController@logout',
       'as' => 'logout'
  ]);

Route::group(['prefix'=>'/admin'],function(){

    Route::get('home',[
       'uses' => 'HomeController@adminhome',
       'as' => 'admin.home',
       'middleware' => 'can:admin'       
  ]);

     Route::get('schools',[
       'uses' => 'SchoolController@schools',
       'as' => 'admin.schools',
       'middleware' => 'can:admin'       
  ]);


Route::get('addschool',[
       'uses' => 'SchoolController@addschool',
       'as' => 'admin.addschool',
       'middleware' => 'can:admin'       
  ]);

Route::post('post.addschool',[
       'uses' => 'SchoolController@addnewschool',
       'as' => 'admin.post.addschool',
       'middleware' => 'can:admin'       
  ]);

Route::get('add_user/{id}',[
       'uses' => 'AdminController@add_user',
       'as' => 'admin.add_user',
       'middleware' => 'can:admin'       
  ]);

Route::post('post.addschooluser',[
       'uses' => 'AdminController@addschooluser',
       'as' => 'admin.post.addschooluser',
       'middleware' => 'can:admin'       
  ]);

Route::get('editschool/{id}',[
       'uses' => 'SchoolController@editschool',
       'as' => 'admin.editschool',
       'middleware' => 'can:admin'       
  ]);

Route::post('post.editschool/{id}',[
       'uses' => 'SchoolController@posteditschool',
       'as' => 'admin.post.editschool',
       'middleware' => 'can:admin'       
  ]);

Route::get('deleteschool/{id}',[
       'uses' => 'SchoolController@deleteschool',
       'as' => 'admin.deleteschool',
       'middleware' => 'can:admin'       
  ]);



Route::get('viewusers/{id}',[
       'uses' => 'SchoolController@viewusers',
       'as' => 'admin.viewusers',
       'middleware' => 'can:admin'       
  ]);


Route::get('admissionForm',[
       'uses' => 'AdminController@admissionForm',
       'as' => 'admin.admissionForm',
       'middleware' => 'can:admin'       
  ]);

Route::get('class',[
       'uses' => 'ClassesController@classes',
       'as' => 'admin.class',
       'middleware' => 'can:admin'       
  ]);

Route::post('addclass',[
       'uses' => 'ClassesController@addclass',
       'as' => 'admin.addclass',
       'middleware' => 'can:admin'       
  ]);

Route::get('house',[
       'uses' => 'HouseController@house',
       'as' => 'admin.house',
       'middleware' => 'can:admin'       
  ]);

Route::post('addhouse',[
       'uses' => 'HouseController@addhouse',
       'as' => 'admin.addhouse',
       'middleware' => 'can:admin'       
  ]);


Route::get('area',[
       'uses' => 'AreaController@area',
       'as' => 'admin.area',
       'middleware' => 'can:admin'       
  ]);

Route::post('addarea',[
       'uses' => 'AreaController@addarea',
       'as' => 'admin.addarea',
       'middleware' => 'can:admin'       
  ]);

Route::get('van',[
       'uses' => 'VanController@van',
       'as' => 'admin.van',
       'middleware' => 'can:admin'       
  ]);

Route::post('addvan',[
       'uses' => 'VanController@addvan',
       'as' => 'admin.addvan',
       'middleware' => 'can:admin'       
  ]);


Route::get('viewroute/{id}',[
       'uses' => 'VanRouteController@viewroute',
       'as' => 'admin.viewroute',
       'middleware' => 'can:admin'       
  ]);

Route::post('addroute',[
       'uses' => 'VanRouteController@addroute',
       'as' => 'admin.addroute',
       'middleware' => 'can:admin'       
  ]);

Route::post('getRoute',[
       'uses' => 'VanRouteController@getRoute',
       'as' => 'admin.getRoute',
       'middleware' => 'can:admin'       
  ]);

Route::post('saveForm',[
       'uses' => 'AdminController@saveForm',
       'as' => 'admin.saveForm',
       'middleware' => 'can:admin'       
  ]);

Route::post('editarea',[
       'uses' => 'AreaController@editarea',
       'as' => 'admin.editarea',
       'middleware' => 'can:admin'       
  ]);

Route::post('editclass',[
       'uses' => 'ClassesController@editclass',
       'as' => 'admin.editclass',
       'middleware' => 'can:admin'       
  ]);

Route::post('edithouse',[
       'uses' => 'HouseController@edithouse',
       'as' => 'admin.edithouse',
       'middleware' => 'can:admin'       
  ]);

Route::post('editvan',[
       'uses' => 'VanController@editvan',
       'as' => 'admin.editvan',
       'middleware' => 'can:admin'       
  ]);

Route::post('editroute',[
       'uses' => 'VanRouteController@editroute',
       'as' => 'admin.editroute',
       'middleware' => 'can:admin'       
  ]);


Route::get('deleteArea/{id}',[
       'uses' => 'AreaController@deleteArea',
       'as' => 'admin.deleteArea',
       'middleware' => 'can:admin'       
  ]);

Route::get('deleteClass/{id}',[
       'uses' => 'ClassesController@deleteClass',
       'as' => 'admin.deleteClass',
       'middleware' => 'can:admin'       
  ]);

Route::get('deleteHouse/{id}',[
       'uses' => 'HouseController@deleteHouse',
       'as' => 'admin.deleteHouse',
       'middleware' => 'can:admin'       
  ]);

Route::get('deleteVan/{id}',[
       'uses' => 'VanController@deleteVan',
       'as' => 'admin.deleteVan',
       'middleware' => 'can:admin'       
  ]);

Route::get('deleteVanRoute/{id}',[
       'uses' => 'VanRouteController@deleteVanRoute',
       'as' => 'admin.deleteVanRoute',
       'middleware' => 'can:admin'       
  ]);

Route::get('allStudents',[
       'uses' => 'AdminController@allStudents',
       'as' => 'admin.allStudents',
       'middleware' => 'can:admin'       
  ]);

Route::post('getReg',[
       'uses' => 'StudentRegistrationController@getReg',
       'as' => 'admin.getReg',
       'middleware' => 'can:admin'       
  ]);

Route::post('import',[
       'uses' => 'AdminController@import',
       'as' => 'admin.import',
       'middleware' => 'can:admin'       
  ]);

Route::post('Saveimport/{tsize}',[
       'uses' => 'AdminController@Saveimport',
       'as' => 'admin.Saveimport',
       'middleware' => 'can:admin'       
  ]);

Route::get('editStudent/{id}',[
       'uses' => 'AdminController@editStudent',
       'as' => 'admin.editStudent',
       'middleware' => 'can:admin'       
  ]);

Route::post('SaveStudent',[
       'uses' => 'AdminController@SaveStudent',
       'as' => 'admin.SaveStudent',
       'middleware' => 'can:admin'       
  ]);

Route::get('ViewForm/{id}',[
       'uses' => 'AdminController@ViewForm',
       'as' => 'admin.ViewForm',
       'middleware' => 'can:admin'       
  ]);

Route::get('printForm',[
       'uses' => 'AdminController@printForm',
       'as' => 'admin.printForm',
       'middleware' => 'can:admin'       
  ]);

Route::get('deleteStudent/{id}',[
       'uses' => 'StudentController@deleteStudent',
       'as' => 'admin.deleteStudent',
       'middleware' => 'can:admin'       
  ]);

Route::get('ShowStdRecord/{num}',[
       'uses' => 'StudentController@ShowStdRecord',
       'as' => 'admin.ShowStdRecord',
       'middleware' => 'can:admin'       
  ]);
Route::get('admin.studentfee/{id}',[
       'uses' => 'StudentFeeController@StudentFee',
       'as' => 'admin.studentfee',
       'middleware' => 'can:admin'       
  ]);
Route::get('admin.student-delete/{id}/delete',[
       'uses' => 'StudentFeeController@deletefeerecord',
       'as' => 'admin.studentfee.delete',
       'middleware' => 'can:admin'       
  ]);

Route::get('admin.addteacher',[
  'uses'=>'AddTeacherController@addteachers',
  'as'=>'admin.addteacher',
  'middleware'=>'can:admin'


]);

Route::post('admin.addteacher',[
       'uses' => 'AddTeacherController@addnewteacher',
       'as' => 'admin.addteacher',
       'middleware' => 'can:admin'       
  ]);

Route::get('admin.allteacher',[
  'uses'=>'AddTeacherController@teacherdetail',
  'as'=>'admin.allteacher',
  'middleware'=>'can:admin'
]);
Route::get('deleteteacher/{id}',[
       'uses' => 'AddTeacherController@deleteteacher',
       'as' => 'admin.deleteteacher',
       'middleware' => 'can:admin'       
  ]);
Route::get('admin.editteacher/{id}',[
       'uses' => 'AddTeacherController@editteacher',
       'as' => 'admin.editteacher',
       'middleware' => 'can:admin'       
  ]);
Route::post('post.editteacher/{id}',[
       'uses' => 'AddTeacherController@posteditteacher',
       'as' => 'admin.post.editteacher',
       'middleware' => 'can:admin'       
  ]);

Route::get('admin.editStudentfee/{id}',[
       'uses' => 'StudentFeeController@studenteditfee',
       'as' => 'admin.editStudentfee',
       'middleware' => 'can:admin'       
  ]);
Route::post('post.editStudentfee/{id}',[
       'uses' => 'StudentFeeController@posteditfee',
       'as' => 'admin.post.editStudentfee',
       'middleware' => 'can:admin'       
  ]);
   

Route::get('admin.addStudentfee/{id}',[
       'uses' => 'StudentFeeController@AddStudentFee',
       'as' => 'admin.addStudentfee',
       'middleware' => 'can:admin'       
  ]);

// Route::get('admin.addStudentfee',[
//        'uses' => 'StudentFeeController@AddStudentFee',
//        'as' => 'admin.addStudentfee',
//        'middleware' => 'can:admin'       
//   ]);

Route::get('section',[
       'uses' => 'SectionsController@Sections',
       'as' => 'admin.section',
       'middleware' => 'can:admin'       
  ]);
Route::post('admin.addSection',[
       'uses' => 'SectionsController@addsection',
       'as' => 'admin.addsection',
       'middleware' => 'can:admin'       
  ]);

Route::post('admin.editsection',[
       'uses' => 'SectionsController@editsection',
       'as' => 'admin.editsection',
       'middleware' => 'can:admin'       
  ]);

Route::get('deletesection/{id}',[
       'uses' => 'SectionsController@deletesection',
       'as' => 'admin.deletesection',
       'middleware' => 'can:admin'       
  ]);
Route::get('section_class/{id}',[
       'uses' => 'ClassSectionsController@classsection',
       'as' => 'admin.section_class',
       'middleware' => 'can:admin'       
  ]);
Route::post('admin.insertsection',[
       'uses' => 'ClassSectionsController@section',
       'as' => 'admin.insertsection',
       'middleware' => 'can:admin'       
  ]);



Route::post('admin.addnewfee',[
       'uses' => 'StudentFeeController@addnewfee',
       'as' => 'admin.addnewfee',
       'middleware' => 'can:admin'       
  ]);
Route::get('subject',[
       'uses' => 'ClassSectionsController@addsubjects',
       'as' => 'admin.subject',
       'middleware' => 'can:admin'       
  ]);




Route::post('admin.addsubject',[
       'uses' => 'SubjectController@addsubject',
       'as' => 'admin.addsubject',
       'middleware' => 'can:admin'       
  ]);

Route::get('subject',[
       'uses' => 'SubjectController@subjects',
       'as' => 'admin.subject',
       'middleware' => 'can:admin'       
  ]);

Route::post('admin.editsubject',[
       'uses' => 'SubjectController@editsubject',
       'as' => 'admin.editsubject',
       'middleware' => 'can:admin'       
  ]);

Route::get('deletesubject/{id}',[
       'uses' => 'SubjectController@deletesubject',
       'as' => 'admin.deletesubject',
       'middleware' => 'can:admin'       
  ]);
Route::get('class_subject/{id}',[
       'uses' => 'ClassSubjectController@classsubject',
       'as' => 'admin.class_subject',
       'middleware' => 'can:admin'       
  ]);





Route::post('admin.insertsubject',[
       'uses' => 'ClassSubjectController@subjects',
       'as' => 'admin.insertsubject',
       'middleware' => 'can:admin'       
  ]);


Route::get('result',[
       'uses' => 'ResultController@result',
       'as' => 'admin.result',
       'middleware' => 'can:admin'       
  ]);


Route::post('admin.addresult',[
       'uses' => 'ResultController@addresult',
       'as' => 'admin.addresult',
       'middleware' => 'can:admin'       
  ]);

Route::post('admin.editresult',[
       'uses' => 'ResultController@editresult',
       'as' => 'admin.editresult',
       'middleware' => 'can:admin'       
  ]);



Route::get('deleteresult/{id}',[
       'uses' => 'ResultController@deleteresult',
       'as' => 'admin.deleteresult',
       'middleware' => 'can:admin'       
  ]);


Route::get('addstudentresult/{id}',[
       'uses' => 'AddStudentResultController@addresults',
       'as' => 'admin.addstudentresult',
       'middleware' => 'can:admin'       
  ]);

 }); 

