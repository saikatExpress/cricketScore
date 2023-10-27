@extends('admin.layout.master')
<style>
    .edit_modal_box {
        box-shadow: 0 0 10px rgb(0, 0, 0);
        background-color: #e8e7e7;
        padding: 10px 10px 10px;
        position: absolute;
        z-index: 999;
        border-radius: 4px;
        top: 0;
        left: 39%;
        display: none;
    }
</style>
@section('content')
    <div class="container-fluid">
        <div class="row">

            <div id="editModalBox" class="edit_modal_box">
                <div class="d-flex align-items-center justify-content-between">
                    <h4>Edit</h4>
                    <button id="closeBtn" class="btn btn-sm btn-danger">Cancel</button>
                </div>
                <hr>

                <form class="form-valide" action="{{ route('tournament.store') }}" method="post"
                    enctype="multipart/form-data">
                    @csrf

                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label" for="val-username">Tournament Name <span
                                class="text-danger">*</span></label>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" id="val1-username" name="tournament_name"
                                placeholder="Enter a name..">
                            @error('tournament_name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label" for="val-username">Tournament Name <span
                                class="text-danger">*</span></label>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" id="val-username" name="tournament_name"
                                placeholder="Enter a name..">
                            @error('tournament_name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label" for="val-username">Tournament Logo <span
                                class="text-danger">*</span></label>
                        <div class="col-lg-8">
                            <input type="file" class="form-control" id="val-username" name="tournament_logo"
                                placeholder="Enter a name..">
                            @error('team-image')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-lg-8 ml-auto">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>

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
                            <li class="breadcrumb-item active">Add Tournament</li>
                        </ol>
                    </div>
                </div>
            </div>
            <!-- /# column -->
        </div>

        <!-- /# row -->
        <section id="main-content">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="form-validation">

                            @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif

                            <form class="form-valide" action="{{ route('tournament.store') }}" method="post"
                                enctype="multipart/form-data">
                                @csrf

                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-username">Tournament Name <span
                                            class="text-danger">*</span></label>
                                    <div class="col-lg-8">
                                        <input type="text" class="form-control" id="val-username" name="tournament_name"
                                            placeholder="Enter a name..">
                                        @error('tournament_name')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-username">Tournament Logo <span
                                            class="text-danger">*</span></label>
                                    <div class="col-lg-8">
                                        <input type="file" class="form-control" id="val-username" name="tournament_logo"
                                            placeholder="Enter a name..">
                                        @error('team-image')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-lg-8 ml-auto">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- /# card -->
                </div>
                <!-- /# column -->

                <div class="col-lg-6">
                    <div class="card" style="height: 1050px;">
                        <div class="card-title">
                            <h4>Tournament List</h4>
                        </div>

                        <div class="flot-container">
                            <div id="flot-line" class="flot-line">


                                <div id="editModalBox" class="edit_modal_box">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h4>Edit</h4>
                                        <button id="closeBtn" class="btn btn-sm btn-danger">Cancel</button>
                                    </div>
                                    <hr>

                                    <form class="form-valide" action="{{ route('tournament.store') }}" method="post"
                                        enctype="multipart/form-data">
                                        @csrf

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Tournament ID
                                                <span class="text-danger">*</span></label>
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control" id="val1-username"
                                                    name="tournament_name" placeholder="Enter a name..">
                                                @error('tournament_name')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Tournament Name
                                                <span class="text-danger">*</span></label>
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control" id="val-username"
                                                    name="tournament_name" placeholder="Enter a name..">
                                                @error('tournament_name')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Tournament Logo
                                                <span class="text-danger">*</span></label>
                                            <div class="col-lg-8">
                                                <input type="file" class="form-control" id="val-username"
                                                    name="tournament_logo" placeholder="Enter a name..">
                                                @error('team-image')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>


                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Image</th>
                                                <th>Name</th>
                                                <th>Organization</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($tournamentData as $value)
                                                <tr>
                                                    <th scope="row">{{ $value->id }}</th>
                                                    <td>
                                                        <img style="width: 40px;height:40px;"
                                                            src="{{ asset('storage/' . $value->tournament_logo) }}"
                                                            alt="">
                                                    </td>
                                                    <td>{{ $value->tournament_name }}</td>
                                                    <td><span class="badge badge-primary">ICC</span></td>
                                                    <td class="color-primary">
                                                        <button class="btn btn-sm btn-warning editBtn"
                                                            data-id="{{ $value->id }}">Edit</button>
                                                    </td>
                                                </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /# card -->
                </div>
                <!-- /# column -->
            </div>
        </section>
    </div>
    <script src="{{ asset('adminFrontend/js/lib/jquery.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('.editBtn').on('click', function() {
                var id = $(this).data('id');
                $('#val1-username').val(id);
                $('#editModalBox').show();
            })

            $('#closeBtn').click(function() {
                $('#editModalBox').hide();
            });
        })
    </script>
@endsection
