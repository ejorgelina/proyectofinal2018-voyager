@extends('default')

 <div class="contenido d-flexs">
   @if ($errors)
     @foreach ($errors->all() as $error)
       <p>{{ $error }}</p>
     @endforeach
   @endif
   <form action="/publication"  enctype="multipart/form-data" method="POST">
 {{ csrf_field() }}
     <ul class="list-group">
       <li class="border rounded border-info p-3 m-4">
         <label>Titulo</label> <br>
         <input type="text" name="titulo">
         <br><br>
         <textarea name="contenido"></textarea>
         <br><br>
         <input type="file" name="foto">
         <br><br>
         <button type="submit" name="button">Enviar</button>
       </li>
     </ul>

   </form>
 </div>
