<div id="content">
    <div class="row mb-4">
        <div class="col-12 col-sm-12">
            <div class="row">
                <div class="col-12 col-md-12 mb-4">
                    <div class="card redial-border-light redial-shadow">
                        <div class="card-body" style="overflow: visible;">
                            <h6 class="header-title pl-3 redial-relative">Add New Employee</h6>
                        
                                 <form wire:submit.prevent="employeeInsert" enctype= multipart/form-data>
                                       
                                          <div class="row">
                                            <div class="col-md-4 col-lg-4 col-sm-4 col-xs-4">
                                                <div class="form-group">
                                                    <label>Employee Name <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" name="employee_name" id="employee_name" wire:model="employee_name" placeholder="Enter Employee Name" required/>
                                                    @error('employee_name')
                                                    <span class="small text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                              </div>

                                              <div class="col-md-4 col-lg-4 col-sm-4 col-xs-4">
                                                <div class="form-group">
                                                    <label>Email Id <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" name="email_id" id="email_id" wire:model="email_id" placeholder="Enter Email Id" required/>
                                                    @error('email_id')
                                                    <span class="small text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                              </div>

                                              <div class="col-md-4 col-lg-4 col-sm-4 col-xs-4">
                                                <div class="form-group">
                                                    <label>Mobile No. <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" name="mobile_no" id="mobile_no" wire:model="mobile_no" placeholder="Enter Mobile Number" required/>
                                                    @error('mobile_no')
                                                    <span class="small text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                              </div>
                                            
                                          </div>
                                          <div class="row">
                                            
                                            

                                              <div class="col-md-4 col-lg-4 col-sm-4 col-xs-4">
                                                <div class="form-group">
                                                    <label>Aadhar No. <span class="text-green">(Opt)</span></label>
                                                    <input type="text" class="form-control" name="aadhar_no" id="aadhar_no" wire:model="aadhar_no" placeholder="Enter Aadhar Number" />
                                                    @error('aadhar_no')
                                                    <span class="small text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                              </div>

                                              <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Profile Image</label>
                                                    <input type="file" class="form-control" wire:model="profile_image" >
                                                    @error('image.*') <span class="text-danger error">{{ $message }}</span>@enderror
                                                </div>
                                            </div>

                                            <div class="col-md-4 col-lg-4 col-sm-4 col-xs-4">
                                                <div class="form-group">
                                                    <label>Password <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" name="password" id="password" wire:model="password" placeholder="Enter Password" required/>
                                                    @error('password')
                                                    <span class="small text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                              </div>
                                            
                                          </div>
                                    
                                            <hr>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                <label>Address<span class="text-danger">*</span> </label>
                                                <textarea name="address"  id="address" class="form-control" placeholder="write here" wire:model="address" rows="5"></textarea>
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
