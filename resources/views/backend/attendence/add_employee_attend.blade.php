@extends('adminDashboard')
@section('admin')
    <x-backend.topattend />
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <h4>
                                    <a href="{{ route('employee.attend.list') }}" class="btn btn-primary float-sm-right"> <i
                                            class="fas fa-list"></i>Employee Attendance List</a>
                                </h4>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('employee.attend.store') }}" method="post" id="myForm">
                                @csrf
                                <div class="form-group col-md-4">
                                    <label for="date" class="control-label">Attendance Date</label>
                                    <input type="date" name="date" id="date"
                                        class="checkdate form-control form-control-sm singledatepicker"
                                        placeholder="Attendance Date" autocomplete="off">
                                </div>
                                <table class="table sm table-bordered table-striped dt-responsive" style="width: 100%">
                                    <thead>
                                        <tr>
                                            <th rowspan="2" class="text-center" style="vertical-align: middle">Sl.</th>
                                            <th rowspan="2" class="text-center" style="vertical-align: middle">Employee
                                                Name</th>
                                            <th colspan="3" class="text-center" style="vertical-align: middle">Attendance
                                                Status</th>
                                        </tr>
                                        <tr>
                                            <th class="text-center btn present_all"
                                                style="display: table-cell;background-color:#114190">Present</th>
                                            <th class="text-center btn leave_all"
                                                style="display: table-cell;background-color:#114190">Leave</th>
                                            <th class="text-center btn absent_all"
                                                style="display: table-cell;background-color:#114190">Absent</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($employees as $key => $employee)
                                            <tr id="div {{ $employee->id }}" class="text-center">
                                                <input type="hidden" name="employee_id[]" value="{{ $employee->id }}"
                                                    class="employee_id">
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $employee->name }}</td>
                                                <td colspan="3">
                                                    <div class="switch-toggle switch-3 switch-candy">
                                                        <input class="present" id="present{{ $key }}"
                                                            name="attend_status{{ $key }}" value="present"
                                                            type="radio" checked="checked">

                                                        <label for="present{{ $key }}">Present</label>
                                                        <input class="leave" id="leave{{ $key }}"
                                                            name="attend_status{{ $key }}" value="Leave"
                                                            type="radio">

                                                        <label for="leave{{ $key }}">Leave</label>
                                                        <input class="absent" id="absent{{ $key }}"
                                                            name="attend_status{{ $key }}" value="Absent"
                                                            type="radio">

                                                        <label for="absent{{ $key }}">Absent</label>
                                                        <a></a>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <button type="submit" class="btn btn-success btn-sm"> Submit </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <x-backend.attend />
@endsection
