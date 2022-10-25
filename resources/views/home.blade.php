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
                            
                            <a class="nav-link" href="/post/create">Create Post</a>
                          </li>
                        <li class="nav-item">
                          <a class="nav-link posts" aria-current="page" href="/posts">Posts</a>
                        </li>
                        
                        <li class="nav-item">
                          <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link disabled">Disabled</a>
                        </li>
                      </ul>
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
