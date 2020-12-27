@extends('layouts.app')
@section('title')
    Home
@endsection
@section('content')
    @if(session('from_saving'))
        <div class="alert alert-inverse alert-dismissible alert-shadow fade show" role="alert" style="position: fixed; right: 50px">
            <span class="alert-inner--icon text-success"><i class="fas fa-check"></i></span>
            <span class="alert-inner--text"><strong>Success!</strong> To do Item saved succesfully!</span>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    @if(count($todo_items)>0)
        <div class="row">
        @foreach($todo_items as $todo_item)

            <div class="col-lg-6" style="margin-top: 20px;">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h4 class="heading h5 mb-0">{{$todo_item->title}}</h4>
                            </div>
                            <div class="col-4">
                                <div class="card-icon-actions text-right">
                                    <a href="#" class="favorite active" data-toggle="tooltip" data-original-title="Save to favorites"><i class="fas fa-star"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <p class="card-text">{{$todo_item->description}}</p>
                    </div>
                    <div class="card-footer">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <a href="#" class="btn btn-sm btn-danger btn-animated btn-animated-y">
                                    <span class="btn-inner--hidden">Delete</span>
                                    <span class="btn-inner--visible"><i class="fas fa-trash-alt"></i></span>
                                </a>
                            </div>
                            <div class="col-6 text-right">
                                <span class="text-muted">{{$todo_item->created_at}}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        @endforeach
        </div>
        <button type="button" data-toggle="modal"  data-target="#modal_1" class="btn btn-primary btn-icon" style="position: absolute; right: 50px;">
            <i class="fa fa-plus" ></i>
            <span class="btn-inner--text">Add Item</span>
        </button>
    @else
        <div id="no-items-view" class="text-center" style="margin-top: 20px;" data-toggle="modal" data-target="#modal_1">
            <img src="{{asset('assets/images/undraw_not_found.svg')}}" class="img-fluid" style="max-height: 500px;">

            <h2 style="margin-top: 20px;">Looks like you dont have shit, click anywhere to add a new todo item.</h2>
        </div>


    @endif
    <!-- Button trigger modal -->

    <!-- Modal -->
    <div class="modal modal-fluid fade  " id="modal_1" tabindex="-1" role="dialog" aria-labelledby="modal_1" aria-hidden="true" style="padding-top: 10%;">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 text-center py-4">
                            <h4 class="heading h3">Create a new to do activity!</h4>
                            <p class="lead text-muted">
                                Type out the title and the description below
                            </p>
                            <div class="py-md">
                                <form method="post" action="/">
                                    @csrf
                                    <div class="form-group">
                                        <label for="title">Title</label>
                                        <input type="text" class="form-control" id="title" aria-describedby="emailHelp" name="title">

                                    </div>
                                    <div class="form-group">
                                        <label for="description">Description</label>
                                        <textarea class="form-control" name="description" id="description" rows=""3></textarea>

                                    </div>

                                    <button type="submit" class="btn btn-primary" >Submit</button>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
