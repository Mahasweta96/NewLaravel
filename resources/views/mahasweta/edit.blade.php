  @extends('layout')
     @section('content')
         <div id="wrapper">
             <div id="page" class="container">
                 <h1 class="heading has-text-weigt-bold is-size-6">Update Form</h1>


         <form method="POST" action="/forms/{{ $forms->id }}">
            @csrf
            @method('PUT')
             <div class="field">
                 <label class="label" for="name">Name</label>

                 <div class="control">
                     <textarea class="textarea" name="name" id="name">{{ $forms->name }}</textarea>
                 </div>
             </div>

             <div class="field">
                 <label class="label" for="email">Email</label>

                 <div class="control">
                     <textarea class="textarea" name="email" id="email">{{ $forms->email }}</textarea>
                 </div>
             </div>

                <div class="field">
                 <label class="label" for="message">Message</label>

             <div class="control">
                 <textarea class="textarea" name="message" id="message">{{ $forms->message }}</textarea>
             </div>
             </div>
             <div class="field is grouped">
                 <div class="control">
                     <button class="button is-link" type="submit">SUBMIT</button>
                 </div>
             </div>

         </form>
             </div>
         </div>
     @endsection
