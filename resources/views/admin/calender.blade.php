@extends('admin/layout/master')

@section('content')
    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>Hello,
                                    <span>Welcome Here</span>
                                </h1>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="#">Dashboard</a>
                                    </li>
                                    <li class="breadcrumb-item active">App-Event-Calender</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->
                <section id="main-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-title">
                                    <h4>Calendar</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <a href="#" data-toggle="modal" data-target="#add-category"
                                                class="btn btn-lg btn-success btn-block waves-effect waves-light">
                                                <i class="fa fa-plus"></i> Create New
                                            </a>
                                            <div id="external-events" class="m-t-20">
                                                <br>
                                                <p>Drag and drop your event or click in the calendar</p>
                                                <div class="external-event bg-primary" data-class="bg-primary">
                                                    <i class="fa fa-move"></i>New Theme Release
                                                </div>
                                                <div class="external-event bg-pink" data-class="bg-pink">
                                                    <i class="fa fa-move"></i>My Event
                                                </div>
                                                <div class="external-event bg-warning" data-class="bg-warning">
                                                    <i class="fa fa-move"></i>Meet manager
                                                </div>
                                                <div class="external-event bg-dark" data-class="bg-dark">
                                                    <i class="fa fa-move"></i>Create New theme
                                                </div>
                                            </div>

                                            <!-- checkbox -->
                                            <div class="checkbox m-t-40">
                                                <input id="drop-remove" type="checkbox">
                                                <label for="drop-remove">
                                                    Remove after drop
                                                </label>
                                            </div>

                                        </div>
                                        <div class="col-md-9">
                                            <div class="card-box">
                                                <div id="calendar"></div>
                                            </div>
                                        </div>
                                        <!-- end col -->
                                        <!-- BEGIN MODAL -->
                                        <div class="modal fade none-border" id="event-modal">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-hidden="true">&times;</button>
                                                        <h4 class="modal-title">
                                                            <strong>Add New Event</strong>
                                                        </h4>
                                                    </div>
                                                    <div class="modal-body"></div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default waves-effect"
                                                            data-dismiss="modal">Close</button>
                                                        <button type="button"
                                                            class="btn btn-success save-event waves-effect waves-light">Create
                                                            event</button>
                                                        <button type="button"
                                                            class="btn btn-danger delete-event waves-effect waves-light"
                                                            data-dismiss="modal">Delete</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Modal Add Category -->
                                        <div class="modal fade none-border" id="add-category">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-hidden="true">&times;</button>
                                                        <h4 class="modal-title">
                                                            <strong>Add a category </strong>
                                                        </h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <label class="control-label">Category Name</label>
                                                                    <input class="form-control form-white"
                                                                        placeholder="Enter name" type="text"
                                                                        name="category-name" />
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label class="control-label">Choose Category
                                                                        Color</label>
                                                                    <select class="form-control form-white"
                                                                        data-placeholder="Choose a color..."
                                                                        name="category-color">
                                                                        <option value="success">Success</option>
                                                                        <option value="danger">Danger</option>
                                                                        <option value="info">Info</option>
                                                                        <option value="pink">Pink</option>
                                                                        <option value="primary">Primary</option>
                                                                        <option value="warning">Warning</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default waves-effect"
                                                            data-dismiss="modal">Close</button>
                                                        <button type="button"
                                                            class="btn btn-danger waves-effect waves-light save-category"
                                                            data-dismiss="modal">Save</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END MODAL -->
                                    </div>
                                </div>
                            </div>
                            <!-- /# card -->
                        </div>
                        <!-- /# column -->
                    </div>
                    <!-- /# row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="footer">
                                <p>2018 © Admin Board. -
                                    <a href="#">example.com</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </div>
    </div>
@endsection
