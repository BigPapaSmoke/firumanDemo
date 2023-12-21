@extends('adminDashboard')
@section('admin')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <a href="{{ route('add.expense') }}"
                                    class="btn btn-primary rounded-pill waves-effect waves-light">Add Expense </a>
                            </ol>
                        </div>
                        <h4 class="page-title">Year Expense</h4>
                    </div>
                </div>
            </div>

            @php
                $year = date('Y');
                $expenseyear = App\Models\Expense::where('year', $year)->sum('amount');
            @endphp


            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="header-title"> Year Expense </h4>
                            <h4 style="color:white; font-size: 30px;" align="center"> Total : ${{ $expenseyear }}</h4>
                            <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>Sl</th>
                                        <th>Details</th>
                                        <th>Amount</th>
                                        <th>Year</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($yearexpense as $key => $item)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $item->details }}</td>
                                            <td>{{ $item->amount }}</td>
                                            <td>{{ $item->year }}</td>

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
