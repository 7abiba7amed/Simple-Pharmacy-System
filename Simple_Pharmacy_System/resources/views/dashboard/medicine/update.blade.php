<!-- extand alyout.blade.php  -->
@extends('dashboard.layout.layout')

<!-- yeild body -->
@section('body')
<div class="content-wrapper">
    <!-- /.content-header -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Medicine</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Medicine</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">

                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Update Medicine</h3>
                        </div>
                        <div class="card-body">
                            {{-- <form action="{{ route('dashboard.medicine.update' , $medicine['id']) }}" method="POST">
                                @csrf
                                @method('PUT')

                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Name" name="name">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fas fa-check"></i></span>
                                    </div>
                                </div>

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                    </div>
                                    <input type="number" class="form-control" placeholder="Quantity" name="quantity">
                                </div>

                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Type"
                                        name="type">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fas fa-check"></i></span>
                                    </div>
                                </div>

                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Price" name="price">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fas fa-check"></i></span>
                                    </div>
                                </div>
                                <div class="input-group mb-3">
                                    <button type="submit" class="btn btn-info">Update Medicine</button>
                                </div>
                            </form> --}}
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- endsetcion -->
@endsection
