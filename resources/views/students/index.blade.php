@extends('students.dashboard')

@section('content')
  <section class="content">
      <div class="container-fluid">
          <div class="block-header">
              <h2>DASHBOARD</h2>
          </div>

          <!-- Widgets -->
          <div class="row clearfix">
              <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                  <div class="info-box bg-pink hover-expand-effect">
                      <div class="icon">
                          <i class="material-icons">trending_up</i>
                      </div>
                      <div class="content">
                          <div class="text">Ammount Received</div>
                          <div class="number count-to" data-from="0" data-to="20000" data-speed="15" data-fresh-interval="20"></div>
                      </div>
                  </div>
              </div>
          </div>
          <!-- #END# Widgets -->
          <!-- CPU Usage -->
          <div class="row clearfix">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <div class="card">
                      <div class="header">
                          <div class="row clearfix">
                              <div class="col-xs-12 col-sm-6">
                                  <h2>CPU USAGE (%)</h2>
                              </div>
                              <div class="col-xs-12 col-sm-6 align-right">
                                  <div class="switch panel-switch-btn">
                                      <span class="m-r-10 font-12">REAL TIME</span>
                                      <label>OFF<input type="checkbox" id="realtime" checked><span class="lever switch-col-cyan"></span>ON</label>
                                  </div>
                              </div>
                          </div>
                          <ul class="header-dropdown m-r--5">
                              <li class="dropdown">
                                  <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                      <i class="material-icons">more_vert</i>
                                  </a>
                                  <ul class="dropdown-menu pull-right">
                                      <li><a href="javascript:void(0);">Action</a></li>
                                      <li><a href="javascript:void(0);">Another action</a></li>
                                      <li><a href="javascript:void(0);">Something else here</a></li>
                                  </ul>
                              </li>
                          </ul>
                      </div>
                      <div class="body">
                          <div id="real_time_chart" class="dashboard-flot-chart"></div>
                      </div>
                  </div>
              </div>
          </div>
          <!-- #END# CPU Usage -->
      </div>
  </section>
@endsection

@push('scripts')
  <!-- Jquery Core Js -->
  <script src="/dash/plugins/jquery/jquery.min.js"></script>

  <!-- Bootstrap Core Js -->
  <script src="/dash/plugins/bootstrap/js/bootstrap.js"></script>

  <!-- Select Plugin Js -->
  <script src="/dash/plugins/bootstrap-select/js/bootstrap-select.js"></script>

  <!-- Slimscroll Plugin Js -->
  <script src="/dash/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

  <!-- Waves Effect Plugin Js -->
  <script src="/dash/plugins/node-waves/waves.js"></script>

  <!-- Jquery CountTo Plugin Js -->
  <script src="/dash/plugins/jquery-countto/jquery.countTo.js"></script>

  <!-- Morris Plugin Js -->
  <script src="/dash/plugins/raphael/raphael.min.js"></script>
  <script src="/dash/plugins/morrisjs/morris.js"></script>

  <!-- ChartJs -->
  <script src="/dash/plugins/chartjs/Chart.bundle.js"></script>

  <!-- Flot Charts Plugin Js -->
  <script src="/dash/plugins/flot-charts/jquery.flot.js"></script>
  <script src="/dash/plugins/flot-charts/jquery.flot.resize.js"></script>
  <script src="/dash/plugins/flot-charts/jquery.flot.pie.js"></script>
  <script src="/dash/plugins/flot-charts/jquery.flot.categories.js"></script>
  <script src="/dash/plugins/flot-charts/jquery.flot.time.js"></script>

  <!-- Sparkline Chart Plugin Js -->
  <script src="/dash/plugins/jquery-sparkline/jquery.sparkline.js"></script>

  <!-- Custom Js -->
  <script src="/dash/js/admin.js"></script>
  <script src="/dash/js/pages/index.js"></script>
  <script src="/dash/js/pages/forms/form-wizard.js"></script>
  <!-- Jquery Validation Plugin Css -->
  <script src="/dash/plugins/jquery-validation/jquery.validate.js"></script>

  <!-- JQuery Steps Plugin Js -->
  <script src="/dash/plugins/jquery-steps/jquery.steps.js"></script>

  <!-- Demo Js -->
  <script src="/dash/js/demo.js"></script>
@endpush
