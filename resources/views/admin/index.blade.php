@extends('admin.kebun_master')

@section('title')
Dashboard Bloomify
@endsection

@section('admin.index')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box">
                        <span class="info-box-icon bg-success elevation-1"><i class="fas fa-tree"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Tanaman Hias</span>
                            <span class="info-box-number">100<small>buah</small></span>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-success elevation-1"><i class="fas fa-seedling"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Bibit Tanaman</span>
                            <span class="info-box-number">50<small>buah</small></span>
                        </div>
                    </div>
                </div>
                <div class="clearfix hidden-md-up"></div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-success elevation-1"><i class="fas fa-tools"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Perlengkapan Berkebun</span>
                            <span class="info-box-number">50<small>buah</small></span>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Pembeli</span>
                            <span class="info-box-number">500<small>orang</small></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection