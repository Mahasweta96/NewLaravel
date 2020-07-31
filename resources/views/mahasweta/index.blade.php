@extends('layout')
     @section('content')
         <div id="wrapper">
             <div id="page" 
                  class="container">


                  @foreach ($forms as $forms)
                      <div class="content">
                      	<div class="name">
                      		<h2>
                      			<a href="{{ $forms->path() }}"></a>
                      			{{ $forms->name }}
                      		</h2>
                      	</div>
                      	
                      <p>
                      	<img src="/images/banner.jpg" alt="" class="image image-full"/>
                      </p>

                      {!! $forms->email !!}
                     
                     </div>
