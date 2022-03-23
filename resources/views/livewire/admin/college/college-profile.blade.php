<div id="content">
    <div class="row mb-4">
        <div class="col-12 col-sm-12">
            <div class="row">
                <div class="col-12 col-md-12 mb-4">
                    <div class="card redial-border-light redial-shadow">
                        <div class="card-body" style="overflow: visible;">
                            {{-- <h6 class="header-title pl-3 redial-relative">Add New Employee</h6> --}}
                            {{-- <img src="{{ asset('storage/'.$setting->logo) }}" > --}}
                            <div id="demo" class="carousel slide" data-ride="carousel">

                                <!-- Indicators -->
                                <ul class="carousel-indicators">
                                  <li data-target="#demo" data-slide-to="0" class="active"></li>
                                  <li data-target="#demo" data-slide-to="1"></li>
                                  <li data-target="#demo" data-slide-to="2"></li>
                                </ul>
                                
                                <!-- The slideshow -->
                                <div class="carousel-inner">
                                    @foreach ($courseGal as $key=> $val )
                                        <div class="carousel-item {{ ($key ==0) ? 'active' : '' }} ">
                                            <img src="{{ asset('storage/'.$val->image) }}" alt="Los Angeles" width="1100" min-height="300px" max-height="300px">
                                      </div>
                                    @endforeach
                                  
                                  
                                </div>
                                
                                <!-- Left and right controls -->
                                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                                  <span class="carousel-control-prev-icon"></span>
                                </a>
                                <a class="carousel-control-next" href="#demo" data-slide="next">
                                  <span class="carousel-control-next-icon"></span>
                                </a>
                            </div>
                            {{-- end slider --}}
                            <br>
                            <center><h3>{{$collegeData->college_name}}</h3></center>
                            <hr>
                            <div class="row">
                                <div class="col-md-6" style="padding-left: 50px">
                                    <div class="row">
                                        <p class="col-sm-4 text-muted text-sm-right mb-0 mb-sm-3">City</p>
                                        <p class="col-sm-8">{{ $collegeData->city}} </p>
                                    </div>
                                    <div class="row">
                                        <p class="col-sm-4 text-muted text-sm-right mb-0 mb-sm-3">Pincode</p>
                                        <p class="col-sm-8">{{ $collegeData->address}} </p>
                                    </div>
                                    <div class="row">
                                        <p class="col-sm-4 text-muted text-sm-right mb-0 mb-sm-3">Address</p>
                                        <p class="col-sm-8">{{ $collegeData->pincode}} </p>
                                    </div>
                                    <div class="row">
                                        <p class="col-sm-4 text-muted text-sm-right mb-0 mb-sm-3">Established</p>
                                        <p class="col-sm-8">{{ $collegeData->established}} </p>
                                    </div>
                                    <div class="row">
                                        <p class="col-sm-4 text-muted text-sm-right mb-0 mb-sm-3">Approved By</p>
                                        <p class="col-sm-8">{{ $collegeData->approved_by}} </p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <center>
                                        <img src="{{ asset('storage/'.$collegeData->logo) }}" >
                                    
                                    </center>
                                </div>
                            </div>

                            <hr>
                            {{-- <livewire:admin.college.banner-table, ['params' => 3 ] /> --}}
                                <h4>Course fee Structures</h4>
                                @livewire('admin.college.course-fee-table', ['params' => $collegeData->id])
                                <hr>
                                <h4>College Banner</h4>
                                @livewire('admin.college.college-profile-banner', ['collegeDataId' => $collegeData->id])
                                <hr>
                                @livewire('admin.college.banner-table', ['params' => $collegeData->id])

                                <hr>
                            {{-- <livewire:admin.college.banner-table, ['params' => 3 ] /> --}}
                                <h4>College Gallery</h4>
                                @livewire('admin.college.college-profile-gallery', ['collegeDataId' => $collegeData->id])
                                <hr>
                                @livewire('admin.college.gellery-table', ['params' => $collegeData->id])
                         
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
