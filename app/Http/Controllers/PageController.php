<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
	public function getProfile(){
		$tags = array("CUHK", "Design and Creativity", "Film and Theatre", "History", "Literature and Writing", "Music and Dance", "Philosophy and Ethics", "Religion and Culture", "Visual Arts and Photography", "France Language", "Anthropology", "Law", "Politics");
		return view('pages.profile')->withTags($tags);
	}

	public function getCourses(){
		$courses = array("Adobe Photoshop CC", "Sketch 3", "Adobe Illustrator CC 2015", "Adobe Dreamweaver CC", "Adobe Premiere Pro CC", "Adobe InDesign CS6", "iDraw");

		return view('pages.tags-list')->withCourses($courses);
	}

	public function getDashboard(){
		return view('pages.dashboard');
	}
}
