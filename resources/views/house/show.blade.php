@extends('layouts.app')

@section('template_title')
    {{ $house->name ?? 'Show House' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show House</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('houses.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Price:</strong>
                            {{ $house->price }}
                        </div>
                        <div class="form-group">
                            <strong>Title:</strong>
                            {{ $house->title }}
                        </div>
                        <div class="form-group">
                            <strong>Category:</strong>
                            {{ $house->category }}
                        </div>
                        <div class="form-group">
                            <strong>Rooms:</strong>
                            {{ $house->rooms }}
                        </div>
                        <div class="form-group">
                            <strong>Baths:</strong>
                            {{ $house->baths }}
                        </div>
                        <div class="form-group">
                            <strong>Persons:</strong>
                            {{ $house->persons }}
                        </div>
                        <div class="form-group">
                            <strong>Population:</strong>
                            {{ $house->population }}
                        </div>
                        <div class="form-group">
                            <strong>Province:</strong>
                            {{ $house->province }}
                        </div>
                        <div class="form-group">
                            <strong>Description:</strong>
                            {{ $house->description }}
                        </div>
                        <div class="form-group">
                            <strong>Preferences:</strong>
                            {{ $house->preferences }}
                        </div>
                        <div class="form-group">
                            <strong>Nameproperty:</strong>
                            {{ $house->nameProperty }}
                        </div>
                        <div class="form-group">
                            <strong>Phone:</strong>
                            {{ $house->phone }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
