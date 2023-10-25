@extends('admin/layout/master')
@section('content')
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
                            <li class="breadcrumb-item active">Add Team</li>
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

                            <form class="form-valide" action="{{ route('team.store') }}" method="post"
                                enctype="multipart/form-data">
                                @csrf

                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-username">Teamname <span
                                            class="text-danger">*</span></label>
                                    <div class="col-lg-8">
                                        <input type="text" class="form-control" id="val-username" name="team-name"
                                            placeholder="Enter a name..">
                                        @error('team-name')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-username">Team Image <span
                                            class="text-danger">*</span></label>
                                    <div class="col-lg-8">
                                        <input type="file" class="form-control" id="val-username" name="team-image"
                                            placeholder="Enter a name..">
                                        @error('team-image')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-select2">Team Type <span
                                            class="text-danger">*</span></label>
                                    <div class="col-lg-8">
                                        <select class="js-select2 form-control" id="val-select2" name="team-type"
                                            style="width: 100%;" data-placeholder="Choose one..">
                                            <option disabled selected>Select</option>
                                            <option value="1">Test Playing</option>
                                            <option value="2">Assit Team</option>
                                        </select>
                                        @error('team-type')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-select2">Team Area <span
                                            class="text-danger">*</span></label>
                                    <div class="col-lg-8">
                                        <select class="js-select2 form-control" id="val-select2" name="team-area"
                                            style="width: 100%;" data-placeholder="Choose one..">
                                            <option disabled selected>Select</option>
                                            <option value="asia">Asia</option>
                                            <option value="australia">Australia</option>
                                            <option value="europe">Europe</option>
                                            <option value="america">America</option>
                                            <option value="africa">Africa</option>
                                        </select>
                                        @error('team-area')
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
                    <div class="card">
                        <div class="card-title">
                            <h4>Team List</h4>
                        </div>

                        <div class="flot-container">
                            <div id="flot-line" class="flot-line">

                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Name</th>
                                                <th>Status</th>
                                                <th>Date</th>
                                                <th>Price</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Kolor Tea Shirt For Man</td>
                                                <td><span class="badge badge-primary">Sale</span></td>
                                                <td>January 22</td>
                                                <td class="color-primary">$21.56</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>Kolor Tea Shirt For Women</td>
                                                <td><span class="badge badge-success">Tax</span></td>
                                                <td>January 30</td>
                                                <td class="color-success">$55.32</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td>Blue Backpack For Baby</td>
                                                <td><span class="badge badge-danger">Extended</span></td>
                                                <td>January 25</td>
                                                <td class="color-danger">$14.85</td>
                                            </tr>
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
@endsection
