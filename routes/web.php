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

Route::get('/project/details/{id}',[
    'uses'=>'RecentWorkController@ProjectDetails',
    'as'=>'project-details'
]);

Route::get('/contact',[
    'uses'=>'ContactMeController@index',
    'as'=>'contact-info'
]);

Route::get('/courses/{id}',[
    'uses'=>'CourseController@index',
    'as'=>'course-info'
]);

Route::get('/course/schedule/{id}',[
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

Route::get('/course-schedule/add',[
    'uses'=>'CourseScheduleController@index',
    'as'=>'add-course-schedule-info'
]);

Route::post('/course-schedule/save',[
    'uses'=>'CourseScheduleController@SaveCourseSchedule',
    'as'=>'save-course-schedule'
]);

Route::get('/course-schedule/manage',[
    'uses'=>'CourseScheduleController@ManageCourseScheduleInfo',
    'as'=>'manage-course-schedule-info'
]);

Route::get('/course-schedule/unpublish/{id}',[
    'uses'=>'CourseScheduleController@UnpublishCourseScheduleInfo',
    'as'=>'unpublish_schedule_info'
]);

Route::get('/course-schedule/publish/{id}',[
    'uses'=>'CourseScheduleController@PublishCourseScheduleInfo',
    'as'=>'publish_schedule_info'
]);

Route::get('/course-schedule/edit/{id}',[
    'uses'=>'CourseScheduleController@EditCourseScheduleInfo',
    'as'=>'edit_schedule_info'
]);

Route::post('/course-schedule/update/',[
    'uses'=>'CourseScheduleController@UpdateCourseScheduleInfo',
    'as'=>'upadate-course-schedule'
]);

Route::get('/course-schedule/delete/{id}',[
    'uses'=>'CourseScheduleController@DeleteCourseScheduleInfo',
    'as'=>'delete_schedule_info'
]);

Route::get('/service/add',[
    'uses'=>'SeriviceController@index',
    'as'=>'add-service'
]);

Route::post('/service/save',[
    'uses'=>'SeriviceController@SaveService',
    'as'=>'save-service-info'
]);

Route::get('/service/manage',[
    'uses'=>'SeriviceController@ShowService',
    'as'=>'manage-service'
]);

Route::get('/service/unpublish/{id}',[
    'uses'=>'SeriviceController@UnpublishServiceInfo',
    'as'=>'unpublish-service-info'
]);

Route::get('/service/publish/{id}',[
    'uses'=>'SeriviceController@PublishServiceInfo',
    'as'=>'publish-service-info'
]);

Route::get('/service/edit/{id}',[
    'uses'=>'SeriviceController@EditServiceInfo',
    'as'=>'edit-service-info'
]);

Route::post('/service/update/',[
    'uses'=>'SeriviceController@UpdateServiceInfo',
    'as'=>'update-service-info'
]);

Route::get('/service/update/{id}',[
    'uses'=>'SeriviceController@DeleteServiceInfo',
    'as'=>'delete-service-info'
]);

Route::get('/skill/add',[
    'uses'=>'SkillController@index',
    'as'=>'add-skill'
]);

Route::post('/skill/save',[
    'uses'=>'SkillController@SaveSkillInfo',
    'as'=>'save-skill-info'
]);

Route::get('/skill/manage',[
    'uses'=>'SkillController@ManageSkillInfo',
    'as'=>'manage-skill'
]);

Route::get('/skill/unpublish/{id}',[
    'uses'=>'SkillController@UnpublishSkillInfo',
    'as'=>'unpublish-skill'
]);

Route::get('/skill/publish/{id}',[
    'uses'=>'SkillController@PublishSkillInfo',
    'as'=>'publish-skill'
]);

Route::get('/skill/edit/{id}',[
    'uses'=>'SkillController@EditSkillInfo',
    'as'=>'edit-skill'
]);

Route::post('/skill/update',[
    'uses'=>'SkillController@UpdateSkillInfo',
    'as'=>'update-skill-info'
]);

Route::get('/skill/delete/{id}',[
    'uses'=>'SkillController@DeleteSkillInfo',
    'as'=>'delete-skill'
]);

Route::get('/education/add/',[
    'uses'=>'EducationController@index',
    'as'=>'add-education'
]);

Route::post('/education/save/',[
    'uses'=>'EducationController@SaveEducationalInfo',
    'as'=>'save-info'
]);

Route::get('/education/manage/',[
    'uses'=>'EducationController@ManageEducationalInfo',
    'as'=>'manage-education'
]);

Route::get('/education/unpublish/{id}',[
    'uses'=>'EducationController@UnpublishEducationalInfo',
    'as'=>'unpublish-education-info'
]);

Route::get('/education/publish/{id}',[
    'uses'=>'EducationController@PublishEducationalInfo',
    'as'=>'publish-education-info'
]);

Route::get('/education/edit/{id}',[
    'uses'=>'EducationController@EditEducationalInfo',
    'as'=>'edit-education-info'
]);

Route::post('/education/update',[
    'uses'=>'EducationController@UpdateEducationalInfo',
    'as'=>'update-info'
]);

Route::get('/education/delete/{id}',[
    'uses'=>'EducationController@DeleteEducationalInfo',
    'as'=>'delete-education-info'
]);

Route::get('/experience/add',[
    'uses'=>'ExperienceController@index',
    'as'=>'add-experience'
]);

Route::post('/experience/save',[
    'uses'=>'ExperienceController@SaveExperienceInfo',
    'as'=>'save-experience'
]);

Route::get('/experience/manage',[
    'uses'=>'ExperienceController@ManageExperience',
    'as'=>'manage-experience'
]);

Route::get('/experience/unpublish/{id}',[
    'uses'=>'ExperienceController@UnpublishExperienceInfo',
    'as'=>'unpublish-experience-info'
]);

Route::get('/experience/publish/{id}',[
    'uses'=>'ExperienceController@PublishExperienceInfo',
    'as'=>'publish-experience-info'
]);

Route::get('/experience/edit/{id}',[
    'uses'=>'ExperienceController@EditExperienceInfo',
    'as'=>'edit-experience-info'
]);

Route::post('/experience/update',[
    'uses'=>'ExperienceController@UpdateExperienceInfo',
    'as'=>'update-experience-info'
]);

Route::get('/experience/delete/{id}',[
    'uses'=>'ExperienceController@DeleteExperienceInfo',
    'as'=>'delete-experience-info'
]);

Route::get('/contact-details/add',[
    'uses'=>'ContactDetailsController@index',
    'as'=>'add-contact'
]);

Route::post('/contact-details/save',[
    'uses'=>'ContactDetailsController@SaveContactDetailsInfo',
    'as'=>'save-contact-info'
]);

Route::get('/contact-details/manage',[
    'uses'=>'ContactDetailsController@ManageContactInfo',
    'as'=>'manage-contact'
]);

Route::get('/contact-details/unpublish/{id}',[
    'uses'=>'ContactDetailsController@UnpublishContactInfo',
    'as'=>'unpublish-contact-info'
]);

Route::get('/contact-details/publish/{id}',[
    'uses'=>'ContactDetailsController@PublishContactInfo',
    'as'=>'publish-contact-info'
]);

Route::get('/contact-details/edit/{id}',[
    'uses'=>'ContactDetailsController@EditContactInfo',
    'as'=>'edit-contact-info'
]);

Route::post('/contact-details/update',[
    'uses'=>'ContactDetailsController@UpdateContactInfo',
    'as'=>'update-contact-info'
]);

Route::get('/contact-details/delete/{id}',[
    'uses'=>'ContactDetailsController@DeleteContactInfo',
    'as'=>'delete-contact-info'
]);

Route::get('project/add',[
    'uses'=>'ProjectController@index',
    'as'=>'add-project'
]);

Route::post('project/save',[
    'uses'=>'ProjectController@SaveProjectInfo',
    'as'=>'save-project-info'
]);

Route::get('project/manage',[
    'uses'=>'ProjectController@ManageProjectInfo',
    'as'=>'manage-project'
]);

Route::get('project/unpublish/{id}',[
    'uses'=>'ProjectController@UnpublishProjectInfo',
    'as'=>'unpublish-project-info'
]);

Route::get('project/publish/{id}',[
    'uses'=>'ProjectController@PublishProjectInfo',
    'as'=>'publish-project-info'
]);

Route::get('project/edit/{id}',[
    'uses'=>'ProjectController@EditProjectInfo',
    'as'=>'edit-project-info'
]);

Route::post('project/update',[
    'uses'=>'ProjectController@UpdateProjectInfo',
    'as'=>'update-project-info'
]);

Route::get('project/delete/{id}',[
    'uses'=>'ProjectController@DeleteProjectInfo',
    'as'=>'delete-project-info'
]);