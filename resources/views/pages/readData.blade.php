

    @extends('layouts.default')
    @section("content")

    @if (count($modules)>0)
    <table class="table table-striped table-dark table-hover">
        <thead>
          <tr>
            <th scope="col">codeM</th>
            <th scope="col">Title</th>
            <th scope="col">MH</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($modules as $module)
        <tr>
            <td>{{$module->codeM}}</td>
            <td>{{$module->Title}}</td>
            <td>{{$module->MH}}</td>
          </tr>
        @endforeach
        </tbody>
    </table>
    @else 
    <p>pas de modules dans la base de donnes</p>
    @endif

    

    
    
    
    @endsection
    @section("title")

