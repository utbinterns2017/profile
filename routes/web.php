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

Route::get('/', function () {
	$tags = array("CUHK", "Design and Creativity", "Film and Theatre", "History", "Literature and Writing", "Music and Dance", "Philosophy and Ethics", "Religion and Culture", "Visual Arts and Photography", "France Language", "Anthropology", "Law", "Politics");
	return view('pages.profile')->withTags($tags);
});

Route::get('/view-courses', function(){
	$courses = array("Adobe Photoshop CC", "Sketch 3", "Adobe Illustrator CC 2015", "Adobe Dreamweaver CC", "Adobe Premiere Pro CC", "Adobe InDesign CS6", "iDraw");

	return view('pages.tags-list')->withCourses($courses);
});

Route::get('/dashboard', function(){
	return view('pages.dashboard');
});