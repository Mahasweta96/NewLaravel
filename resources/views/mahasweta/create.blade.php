  @extends('layout')
     @section('content')
         <div id="wrapper">
             <div id="page" class="container">
                 <h1 class="heading has-text-weigt-bold is-size-6">New Form</h1>


         <form method="POST" action="/forms">
            @csrf
             <div class="field">
                 <label class="label" for="name">Name</label>

                 <div class="control">
                     <textarea 
                     class="textarea" 
                     name="name" 
                     id="name"
                     >{{ old('name') }}</textarea>
                     @error('name')
                     <p class="help is-danger">{{ $errors->first('name') }}</p>
                     @enderror
                 </div> 
             </div>

             <div class="field">
                 <label class="label" for="email">Email</label>

                 <div class="control">
                     <textarea 
                     class="textarea" 
                     name="email" 
                     id="email"
                     >{{ old('email') }}</textarea>
                      @error('email')
                     <p class="help is-danger">{{ $errors->first('email') }}</p>
                     @enderror
                 </div>
             </div>

                <div class="field">
                 <label class="label" for="message">Message</label>

             <div class="control">
                 <textarea 
                 class="textarea" 
                 name="message" 
                 id="message"
                 >{{ old('message') }}</textarea>
                  @error('message')
                     <p class="help is-danger">{{ $errors->first('message') }}</p>
                     @enderror
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
