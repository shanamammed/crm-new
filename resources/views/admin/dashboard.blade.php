@extends("admin.layouts.master")
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
@section("content")    
    <div class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <h4 class="page-title float-left">Dashboard</h4>
                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item"><a href="#">SayG CRM</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!-- end row -->
          <!--  -->
            <!-- end row -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="card-box">
                        <h4 class="header-title">Bar Chart</h4>

                        <canvas id="myChart" style="width:100%;max-width:600px"></canvas>
                    </div>
                </div>
            </div>
        </div> <!-- container -->
    </div> <!-- content -->
@endsection  
@push('scripts')
<script src="{{ asset('/js/vendor.min.js') }}"></script> 
<script src="{{ asset('/plugins/chart.js/chart.bundle.js') }}"></script> 
<script src="{{ asset('/plugins/charts.js/chartjs.init.js') }}"></script>
<script src="{{ asset('/js/app.min.js') }}"></script>
@endpush
