@extends('layouts/index')
	<!-- Title -->
	@section('title','- Admin')
	<!-- banner content -->
	@section('bannerTitle','ADMIN')


	@section('content')

	<div class="container">

		<h1>Upload a Document</h1>
		<p> upload a document to the website <button>upload</button></p>
		<h3>File.ext</h3>
		<br>
		<label>Record-ID</label><input><br>
		<label>Permanent Link</label><input><br>
		<label>Full Title</label><input><br>
		<label>Full Title Original Language</label><input><br>
		<label>Abstract</label><input><br>
		<label>Commentaries</label><input><br>
		<label>Bibliography</label><input><br>
		<label>Related Documents in this Database</label><input><br>
		<label>Author</label><input><br>
		<label>Publisher</label><input><br>
		<label>Year</label><input><br>
		<label>Location</label><input><br>
		<label>Language</label><input><br>
		<label>Source</label><input><br>
		<label>Persons referred to</label><input><br>
		<label>Places referred to</label><input><br>
		<label>Cases referred to</label><input><br>
		<label>Institutions referred to</label><input><br>
		<label>Legislation</label><input><br>
		<label>Keywords</label><input><br>
		<label>Responsible Editor</label><input><br>
		<br>

		<h1>Edit Document</h1>
		<br>
		<div style="height:250px;width:450px;background-color: lightgrey;overflow:auto;">
			<h2 style="padding:10px">Choose a Document</h2>
			<p> Document name <a href="">EDIT</a></p>
			<p> Document name <a href="">EDIT</a></p>
			<p> Document name <a href="">EDIT</a></p>
			<p> Document name <a href="">EDIT</a></p>
			<p> Document name <a href="">EDIT</a></p>
			<p> Document name <a href="">EDIT</a></p>
			<p> Document name <a href="">EDIT</a></p>
			<p> Document name <a href="">EDIT</a></p>
			<p> Document name <a href="">EDIT</a></p>
			<p> Document name <a href="">EDIT</a></p>
			<p> Document name <a href="">EDIT</a></p>
		</div>
	</div>
	@endsection