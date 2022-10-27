@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
              
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <ul class="nav justify-content-center">
                        
                        <li class="nav-item">
                            
                            <a class="nav-link" href="/post/create">Create   <i class="fa fa-file"></i></a>
                          </li>
                          
                        <li class="nav-item">
                          <a class="nav-link posts"class="fas fa-band-aid"  aria-current="page" href="/posts">Posts<i class=&#10148;></i></a>
                        </li>
                        
                        <li class="nav-item">
                          <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link ">Disabled</a><i class="fa-solid fa-trash-can-xmark"></i>
                        </li>
                      </ul>
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
