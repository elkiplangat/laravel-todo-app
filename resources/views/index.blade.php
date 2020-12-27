@extends('layouts.app')
@section('title')
    Home
@endsection
@section('content')
    @if(count($todo_items)>0)

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
    @if(session('from_saving'))
        <div class="alert alert-inverse alert-dismissible fade show" role="alert">
            <span class="alert-inner--icon text-success"><i class="fas fa-check"></i></span>
            <span class="alert-inner--text"><strong>Success!</strong> To do Item saved succesfully!</span>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
@endsection
