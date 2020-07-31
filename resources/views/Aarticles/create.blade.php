  @extends('layout')
     @section('content')
         <div id="wrapper">
             <div id="page" class="container">
                 <h1>New Article</h1>


         <form action="">
             <div class="field">
                 <label class="label" for=""></label>

                 <div class="control">
                     <input class="input" type="text" name="id">
                 </div>
             </div>

             <div class="field">
                 <label class="label" for="excerpt"></label>

                 <div class="control">
                     <textarea class="textarea" name="" id=""></textarea>
                 </div>
             </div>

             <div class="control">
                 <textarea class="textarea" name="body" id="body"></textarea>
             </div>

             <div class="field is grouped">
                 <div class="control">
                     <button class="button is-link" type="submit"></button>
                 </div>
             </div>

         </form>
             </div>
         </div>
     @endsection
