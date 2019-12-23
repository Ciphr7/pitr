@extends('layouts.app')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{$listing->name}}<span class="float-right"><a href="/" class="btn btn-secondary">back</a></span></div>
                

                <div class="card-body"> 
                   
                        <div class="list-group">
                            <div class="list-group-item">
                               Company: {{$listing->company}}
                            </div>
                        </div>
                        <div class="list-group">
                            <div class="list-group-item">
                               Address: {{$listing->address}}
                            </div>
                        </div>
                        <div class="list-group">
                            <div class="list-group-item">
                                Website:<a href="{{$listing->website}}" target="_blank" > {{$listing->website}}</a>
                            </div>
                        </div>
                        <div class="list-group">
                            <div class="list-group-item">
                               Email: <a href="mailto: {{$listing->email}}?Subject=Hello%again" target="_top"> {{$listing->email}}</a>
                            </div>
                        </div>
                        <div class="list-group">
                            <div class="list-group-item">
                               Phone: {{$listing->phone}}
                            </div>
                        </div>
                        <div class="list-group">
                            <div class="list-group-item">
                              Bio:  {{$listing->bio}}
                            </div>
                        </div>

                </div>
            </div>
        </div>
    </div>

@endsection