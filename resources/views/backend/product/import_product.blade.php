@extends('adminDashboard')
@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <a href="{{ route('export') }}"
                                    class="btn btn-primary rounded-pill waves-effect waves-light">Download Xlsx</a>

                            </ol>
                        </div>
                        <h4 class="page-title">Import Product</h4>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-lg-8 col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="tab-pane" id="settings">
                                <form method="post" action="{{ route('import') }}" enctype="multipart/form-data">
                                    @csrf


                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group mb-3">
                                                <label for="firstname" class="form-label">Xlsx file Import</label> (feature
                                                needs updating)
                                                <input type="file" name="import_file" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    {{-- <div class="text-end">
                                        <button type="submit" class="btn btn-success waves-effect waves-light mt-2"><i
                                                class="mdi mdi-content-save"></i> Upload </button>
                                    </div> --}}
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
