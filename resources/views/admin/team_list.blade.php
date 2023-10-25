@extends('admin/layout/master')
@section('content')
    <div class="container-fluid">

        <!-- /# row -->
        <section id="main-content">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div style="display: flex; justify-content:space-between;" class="card-title">
                            <h4>Team List</h4>
                            <a class="btn btn-primary btn-sm" href="{{ route('team.us') }}">Add Team</a>
                        </div>

                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Flag</th>
                                        <th>Name</th>
                                        <th>Status</th>
                                        <th>Area</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>


                                    @foreach ($teamData as $team)
                                        <tr>
                                            <th scope="row">{{ $team->id }}</th>
                                            <td><img style="width: 70px;height:50px;"
                                                    src="{{ asset('storage/' . $team->team_image) }}" alt="" />
                                            </td>
                                            <td>{{ $team->team_name }}</td>
                                            <td>
                                                <span class="badge badge-primary">
                                                    @if ($team->team_type == 1)
                                                        Test Team
                                                    @else
                                                        Assit Team
                                                    @endif
                                                </span>
                                            </td>
                                            <td style="text-transform: uppercase;">{{ $team->team_area }}</td>
                                            <td class="color-primary">
                                                <a class="btn btn-primary btn-sm" href="">Edit</a> / <a
                                                    class="btn btn-warning btn-sm" href="">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /# card -->
                </div>
                <!-- /# column -->
            </div>
        </section>
    </div>
@endsection
