@extends('layouts.app')

@section('styles')
    
@endsection
@section('content')
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Categories
            </div>
        </div>
        <div class="card-body">
            <table class="table table-responsive">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection