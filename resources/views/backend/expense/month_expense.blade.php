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
                                    class="btn btn-primary rounded-pill waves-effect waves-light">Add Expense</a>
                            </ol>
                        </div>
                        <h4 class="page-title">Month Expense</h4>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            @php
                                $month = date('F');
                                $expensemonth = App\Models\Expense::where('month', $month)->sum('amount');
                            @endphp

                            <h4 class="header-title">Month Expense</h4>
                            <h4 style="color: white; font-size: 30px;" align="center">Total: ${{ $expensemonth }}</h4>

                            <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>Sl</th>
                                        <th>Details</th>
                                        <th>Amount</th>
                                        <th>Month</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($monthexpense as $key => $item)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $item->details }}</td>
                                            <td>{{ $item->amount }}</td>
                                            <td>{{ $item->month }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
