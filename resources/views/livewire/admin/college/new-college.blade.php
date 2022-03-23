<div id="content">
    <div class="row mb-4">
        <div class="col-12 col-sm-12">
            <div class="row">
                <div class="col-12 col-md-12 mb-4">
                    <div class="card redial-border-light redial-shadow">
                        <div class="card-body" style="overflow: visible;">
                            <h6 class="header-title pl-3 redial-relative">Add New College</h6>
                        
                                 <form wire:submit.prevent="collegeInsert" enctype= multipart/form-data>
                                       
                                          <div class="row">
                                            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                                <div class="form-group">
                                                    <label>Colege Name <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" name="college_name" id="college_name" wire:model="college_name" placeholder="Enter Collee Name" required/>
                                                    @error('college_name')
                                                    <span class="small text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                              </div>
                                            
                                          </div>
                                          <div class="row">
                                            <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6">
                                                <div class="form-group">
                                                    <label>Established <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" name="established" id="established" wire:model="established" placeholder="Enter Established in Year" required/>
                                                    @error('established')
                                                    <span class="small text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                              </div>

                                              <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6">
                                                <div class="form-group">
                                                    <label>Approved By <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" name="approved_by" id="approved_by" wire:model="approved_by" placeholder="Enter Approved By" required/>
                                                    @error('approved_by')
                                                    <span class="small text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                              </div>

                                              
                                            
                                          </div>
                                          <div class="row">
                                                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6">
                                                    <div class="form-group">
                                                        <label>City <span class="text-danger">*</span></label>
                                                        <select wire:model="city" class="form-control" required>
                                                            <option value="" selected>Choose City</option>
                                                            @foreach($cityList as $citList)
                                                                <option value="{{ $citList->id }}">{{ $citList->city }}</option>
                                                            @endforeach
                                                        </select>
                                                        @error('city')
                                                        <span class="small text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Pincode <span class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" name="pincode" id="pincode" wire:model="pincode" placeholder="Enter Pincode" required/>
                                                        @error('pincode')
                                                        <span class="small text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6">
                                                    <div class="form-group">
                                                        <label>Addrss <span class="text-danger">*</span></label>
                                                        <textarea class="form-control" name="address" id="address" wire:model="address" placeholder="Enter Address" rows="6" required ></textarea>
                                                        @error('address')
                                                        <span class="small text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                          </div>

                                          <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Collage Logo</label>
                                                    <input type="file" class="form-control" wire:model="logo" >
                                                    @error('image.*') <span class="text-danger error">{{ $message }}</span>@enderror
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Collage Profile Image</label>
                                                    <input type="file" class="form-control" wire:model="profile_image" >
                                                    @error('image.*') <span class="text-danger error">{{ $message }}</span>@enderror
                                                </div>
                                            </div>
                                            
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Collage Gallery (Multiple)</label>
                                                        <input type="file" class="form-control" wire:model="gallery" multiple>
                                                        @error('image.*') <span class="text-danger error">{{ $message }}</span>@enderror
                                                    </div>
                                                </div>
                                          </div>
                                      

                                        {{-- ***************** Fee Structure ************** --}}
                                        <hr>
                                        <h5><u>Fee Structure</u></h5>
                                            <table class="table table-bordered table-hover active " cellspacing="0" width="100%">
                                                <thead>
                                                    <tr>
                                                        <th>Sl.No</th>
                                                        <th>Select Course</th>
                                                        <th>Duration</th>
                                                        <th>Fee</th>
                                                        <th><button type="button" class="btn btn-primary mb-3" wire:click.prevent="add({{$i}})"><i class="fa fa-plus" style="color: green;"></i></button></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($inputs as $key => $value)
                                                        <tr>
                                                            <td>{{$key + 1}}</td>
                                                            <td>
                                                                <select wire:model="course.{{ $value }}" class="form-control" required>
                                                                    <option value="" selected>Choose Course</option>
                                                                    @foreach($courseList as $cList)
                                                                        <option value="{{ $cList->id }}">{{ $cList->course}}</option>
                                                                    @endforeach
                                                                </select>
                                                                
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control" name="duration" id="duration" wire:model="duration.{{ $value }}" placeholder="Enter Duration" required/>
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control" name="fee" id="fee" wire:model="fee.{{ $value }}" placeholder="Enter Fee" required/>
                                                            </td>
                                                            <td>
                                                                <button class="btn btn-light mb-3" wire:click.prevent="remove({{$key}})"><i class="fa fa-close" style="color: red;"></i></button>
                                                            </td>
                                                        </tr>
                                                    @endforeach

                                                </tbody>
                                            </table>

                                        {{-- ****************** End Fee Structure ************ --}}
                                            <hr>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                <label>Abouts Collage<span class="text-danger">*</span> </label>
                                                <textarea wire:ignore name="college_about"  id="college_about" class="form-control summernote" placeholder="write here" wire:model="college_about" rows="5"></textarea>
                                            </div>
                                            </div>
                                        </div>

                                        <hr>
                                          <div class="col-md-4">
                                            <br>
                                            <input type="submit" id="submit" class="btn btn-primary redial-rounded-circle-50">
                                          
                                      </div>

                                          
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
{{-- 
                <div class="container">
                    <div class="row mt-5">
                         <h1 class="fs-5 text-center">Dynamic Form with Laravel 8 & Livewire</h1>
                    </div>
                    <div class="row justify-content-center">
                        <div class="w-50">
                            <div class="card my-3">
                                <div class="card-body">
                                    <form class="row g-3 justify-content-center">
                                        <div class="col-4">
                                            <label class="visually-hidden">Account</label>
                                            <select class="form-select" aria-label="Default select example" wire:model="account.0">
                                                <option selected>Account</option>
                                                <option value="facebook">Facebook</option>
                                                <option value="instagram">Instagram</option>
                                                <option value="twitter">Twitter</option>
                                                <option value="github">Github</option>
                                            </select>
                                            @error('account.0') <span class="text-danger error">{{ $message }}</span>@enderror
                                        </div>
                                        <div class="col-6">
                                            <label class="visually-hidden">Username</label>
                                            <input type="text" class="form-control" wire:model="username.0" placeholder="Your Username">
                                            @error('username.0') <span class="text-danger error">{{ $message }}</span>@enderror
                                        </div>
                                        <div class="col-2">
                                            <button class="btn btn-primary mb-3" wire:click.prevent="add({{$i}})"><i class="bi bi-plus"></i></button>
                                        </div>
                                      

                                        @foreach ($inputs as $key => $value)
                                        <div class="col-4">
                                            <label class="visually-hidden">Account</label>
                                            <select class="form-select" aria-label="Default select example" wire:model="account.{{ $value }}">
                                                <option selected>Account</option>
                                                <option value="facebook">Facebook</option>
                                                <option value="instagram">Instagram</option>
                                                <option value="twitter">Twitter</option>
                                                <option value="github">Github</option>
                                            </select>
                                            @error('account.') <span class="text-danger error">{{ $message }}</span>@enderror
                                        </div>
                                        <div class="col-6">
                                            <label class="visually-hidden">Username</label>
                                            <input type="text" class="form-control" wire:model="username.{{ $value }}" placeholder="Your Username">
                                            @error('username.') <span class="text-danger error">{{ $message }}</span>@enderror
                                        </div>
                                        <div class="col-2">
                                            <button class="btn btn-light mb-3" wire:click.prevent="remove({{$key}})"><i class="bi bi-x"></i></button>
                                        </div>
                                        @endforeach
                                        <div class="row">
                                            <div class="col-12 ps-0">
                                                 <button type="button" class="btn btn-primary" wire:click.prevent="store()">Save</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                     
                        </div>
                    </div>
                </div> --}}
{{-- 
                @push()
                <script>
                    $('#note-editable p').on('change', function (e) {
                        console.log("Changed editor");
                        @this.set('college_about', e.target.value);
                    });
                </script>
                    
                @endpush --}}