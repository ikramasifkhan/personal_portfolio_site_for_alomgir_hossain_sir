<?php


Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('home');

Route::get('/',[
    'uses'=>'AlomgirHossaingController@index',
    'as'=>'/'
]);

Route::get('/about',[
    'uses'=>'AboutController@index',
    'as'=>'about-me'
]);

Route::get('/resume',[
    'uses'=>'AboutController@resume',
    'as'=>'resume'
]);

Route::get('/recent/work',[
    'uses'=>'RecentWorkController@index',
    'as'=>'recent-work'
]);

Route::get('/contact',[
    'uses'=>'ContactMeController@index',
    'as'=>'contact-info'
]);

Route::get('/courses',[
    'uses'=>'CourseController@index',
    'as'=>'course-info'
]);

Route::get('/course/schedule',[
    'uses'=>'CourseController@CourseSchedule',
    'as'=>'course-schedule'
]);

Route::get('/about-me/add',[
    'uses'=>'AboutMeController@index',
    'as'=>'add-about-info'
]);

Route::post('/about-me/save',[
    'uses'=>'AboutMeController@SaveInfo',
    'as'=>'post-about-me'
]);

Route::get('/about-me/manage',[
    'uses'=>'ManageAboutMeController@index',
    'as'=>'manage-about-info'
]);

Route::get('/about-me/unpublish/{id}',[
    'uses'=>'ManageAboutMeController@UnpublishInfo',
    'as'=>'unpublish-about-info'
]);

Route::get('/about-me/publish/{id}',[
    'uses'=>'ManageAboutMeController@PublishInfo',
    'as'=>'publish-about-info'
]);

Route::get('/about-me/delete/{id}',[
    'uses'=>'ManageAboutMeController@DeleteInfo',
    'as'=>'delete-about-info'
]);

Route::get('/about-me/edit/{id}',[
    'uses'=>'EditAboutMeController@index',
    'as'=>'edit-about-info'
]);

Route::post('/about-me/update/',[
    'uses'=>'EditAboutMeController@UpdateInfo',
    'as'=>'update-about-info'
]);

Route::get('/course/add',[
    'uses'=>'CourseInfoController@index',
    'as'=>'add-courses'
]);

Route::post('/course/save',[
    'uses'=>'CourseInfoController@SaveCourseInfo',
    'as'=>'save-course-info'
]);

Route::get('/course/manage',[
    'uses'=>'CourseInfoController@ShowCourseInfo',
    'as'=>'manage-course'
]);

Route::get('/course/details/{id}',[
    'uses'=>'CourseInfoController@DetailsCourseInfo',
    'as'=>'course-detils'
]);

Route::get('/course/unpublish/{id}',[
    'uses'=>'CourseInfoController@UnpublishCourseInfo',
    'as'=>'unpublish-course-info'
]);

Route::get('/course/publish/{id}',[
    'uses'=>'CourseInfoController@PublishCourseInfo',
    'as'=>'publish-course-info'
]);

Route::get('/course/delete/{id}',[
    'uses'=>'CourseInfoController@DeleteCourseInfo',
    'as'=>'delete-course-info'
]);

Route::get('/course/edit/{id}',[
    'uses'=>'CourseInfoController@EditCourseInfo',
    'as'=>'edit-course-info'
]);

Route::post('/course/update',[
    'uses'=>'CourseInfoController@UpdateCourseInfo',
    'as'=>'update-course-info'
]);

Route::get('/course/schedule/add',[
    'uses'=>'CourseScheduleController@index',
    'as'=>'add-course-schedule-info'
]);

Route::post('/course/schedule/save',[
    'uses'=>'CourseScheduleController@SaveCourseSchedule',
    'as'=>'save-course-schedule'
]);

Route::get('/course/schedule/manage',[
    'uses'=>'CourseScheduleController@ManageCourseScheduleInfo',
    'as'=>'manage-course-schedule-info'
]);