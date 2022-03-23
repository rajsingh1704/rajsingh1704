<div id="content">
    <div class="row mb-4">
        <div class="col-12 col-sm-12">
            <div class="row">
                <div class="col-12 col-md-12 mb-4">
                    <div class="card redial-border-light redial-shadow">
                        <div class="card-body" style="overflow: visible;">
                            <h6 class="header-title pl-3 redial-relative">Dashboard</h6>
                                {{-- Start Form   --}}

                                <div class="content-wrapper">

                                    <!-- Main content -->

                    
                                        <section class="content">
                                            <!-- Small boxes (Stat box) -->
                                            <div class="row">
                                                <div class="col-lg-4 col-xs-6 col-md-4 col-sm-6 mt-2 service-card">
                                                    <!-- small box -->
                                                    <div class="card shadow-sm rounded-0 pl-3 py-2" style="background-color: rgb(156, 53, 216)">
                                                        <div class="inner">
                                                            <span class="icon float-right mr-3">
                                                                <i class="fas fa-university fa-2x text-light"></i>
                                                              
                                                            </span>
                                                            <h3 class="text-white"> {{$college}} </h3>
                                                            <p class="text-white font-weight-bold">Total College</p>
                                                        </div>
                                                        <a href="CollegeList" class="small-box-footer text-warning">More info <i class="fa fa-arrow-circle-right"></i></a>
                                                    </div>
                                                </div>
                                                <!-- ./col -->
                                                <div class="col-lg-4 col-xs-6 col-md-4 col-sm-6 mt-2 service-card">
                                                    <!-- small box -->
                                                    <div class="card shadow-sm pl-3 py-2 rounded-0" style="background-color: rgb(216, 136, 16)">
                                                        <div class="inner">
                                                            <span class="icon float-right mr-3">
                                                                <i class="fas fa-city fa-2x text-light"></i>
                                                            </span>
                                                            <h3 class="text-white"> {{$city}} </h3>
                                                            <p class="text-white font-weight-bold">Total City</p>
                                                        </div>
                                                        <a href="/city" class="small-box-footer  text-warning">More info <i class="fa fa-arrow-circle-right"></i></a>
                                                    </div>
                                                </div>
                                                <!-- ./col -->
                                                <div class="col-lg-4 col-xs-6 col-md-4 col-sm-6 mt-2 service-card">
                                                    <!-- small box -->
                                                    <div class="card shadow-sm pl-3 py-2 rounded-0" style="background-color: rgb(45, 137, 190)">
                                                        <div class="inner">
                                                            <span class="icon float-right mr-3">
                                                                <i class="fab fa-discourse fa-2x text-light"></i>
                                                            </span>
                                                            <h3 class="text-white"> {{$coursess}} </h3>
                                                            <p class="text-white font-weight-bold">Total Courses</p>
                                                        </div>
    
                                                        <a href="/course" class="small-box-footer text-warning">More info <i class="fa fa-arrow-circle-right"></i></a>
                                                    </div>
                                                </div>
                                                  <!-- ./col -->

                                                    <!-- ./col -->
                                                <div class="col-lg-4 col-xs-6 col-md-4 col-sm-6 mt-2 service-card">
                                                    <!-- small box -->
                                                    <div class="card shadow-sm pl-3 py-2 rounded-0" style="background-color: rgb(45, 137, 190)">
                                                        <div class="inner">
                                                            <span class="icon float-right mr-3">
                                                                <i class="fas fa-user-plus pr-1 fa-2x text-light"></i>
                                                         
                                                            </span>
                                                            <h3 class="text-white"> {{$user}} </h3>
                                                            <p class="text-white font-weight-bold">Total Employee</p>
                                                        </div>
    
                                                        <a href="/admin/employeeList" class="small-box-footer text-warning">More info <i class="fa fa-arrow-circle-right"></i></a>
                                                    </div>
                                                </div>
                                                  <!-- ./col -->
                        
                                            </div>
                                        </section>
                                        <!-- right col -->
                                
                                    
                                </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>