<div id="content">
    <div class="row mb-4">
       <div class="col-md-12 ml-auto">
                           <div class="profile-header">
                               <div class="row align-items-center">
                                   <div class="col-auto profile-image">
                                       <a href="#">
                                           <img class="rounded-circle" alt="User Image" width="100px" height="100px" src="{{ asset('storage/'.$profile->profileImage) }}">
                                       </a>
                                   </div>
                                   <div class="col ml-md-n2 profile-user-info">
                                       <h4 class="user-name mb-0">Name : {{ $profile->name}} </h4>
                                       <h6 class="text-muted">Email Id : {{ $profile->email}} </h6>
                                   </div>
                               </div>
                           </div>
                           <div class="profile-menu">
                               <ul class="nav nav-tabs nav-tabs-solid">
                                   <li class="nav-item">
                                       <a class="nav-link active" data-toggle="tab" href="#per_details_tab" wire:ignore>Personal Details</a>
                                   </li>
                                   <li class="nav-item">
                                       <a class="nav-link" data-toggle="tab" href="#store_details_tab" wire:ignore>College Details</a>
                                   </li>
                                   <li class="nav-item">
                                       <a class="nav-link" data-toggle="tab" href="#password_tab" wire:ignore>Password</a>
                                   </li>

                               </ul>
                           </div>
                           <div class="tab-content profile-tab-cont">

                               <!-- Personal Details Tab -->
                               <div class="tab-pane fade show active" id="per_details_tab" wire:ignore>

                                   <!-- Personal Details -->
                                   <div class="row">
                                       <div class="col-lg-12">
                                           <div class="card">
                                               <div class="card-body">
                                                   <h5 class="card-title d-flex justify-content-between">
                                                       <span>Personal Details</span>
                                                       {{-- <a class="edit-link" data-toggle="modal" href="#edit_personal_details"><i class="fa fa-edit mr-1"></i>Edit</a> --}}
                                                   </h5>

                                                   <div class="row">
                                                       <p class="col-sm-2 text-muted text-sm-right mb-0 mb-sm-3">Name</p>
                                                       <p class="col-sm-10">{{ $profile->name}} </p>
                                                   </div>

                                                   <div class="row">
                                                       <p class="col-sm-2 text-muted text-sm-right mb-0 mb-sm-3">Email ID</p>
                                                       <p class="col-sm-10">{{$profile->email}} </p>
                                                   </div>
                                                   <div class="row">
                                                       <p class="col-sm-2 text-muted text-sm-right mb-0 mb-sm-3">Mobile</p>
                                                       <p class="col-sm-10">{{ $profile->mobileNo}} </p>
                                                   </div>
                                                   {{-- <div class="row">
                                                       <p class="col-sm-2 text-muted text-sm-right mb-0 mb-sm-3">Designation</p>
                                                       <p class="col-sm-10">{{$profile->designation}} </p>
                                                   </div> --}}
                                                   <div class="row">
                                                       <p class="col-sm-2 text-muted text-sm-right mb-0 mb-sm-3">Aadhar</p>
                                                       <p class="col-sm-10">{{ $profile->aadharNo}} </p>
                                                   </div>
                                                   <div class="row">
                                                       @php
                                                           $created = date_create($profile->created_at);
                                                           $created_at = date_format($created, 'd-m-Y h:i A');
                                                       @endphp
                                                       <p class="col-sm-2 text-muted text-sm-right mb-0 mb-sm-3">Creation Date</p>
                                                       <p class="col-sm-10">{{ $created_at}} </p>
                                                   </div>


                                               </div>
                                           </div>

                                           <!-- Edit Details Modal -->
                                           {{-- <div class="modal fade" id="edit_personal_details" aria-hidden="true" role="dialog">
                                               <div class="modal-dialog modal-dialog-centered" role="document" >
                                                   <div class="modal-content">
                                                       <div class="modal-header">
                                                           <h5 class="modal-title">Personal Details</h5>
                                                           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                               <span aria-hidden="true">&times;</span>
                                                           </button>
                                                       </div>
                                                       <div class="modal-body">
                                                           <form action="#" method="POST" enctype="multipart/form-data" data="{{ route('store.profileEditSubmit') }}" id="updateModalFormData">
                                                               @csrf
                                                               <input type="hidden" id="id" value="{{ $profile->id }}" name="id">
                                                               <div class="row form-row">
                                                                   <div class="col-12 col-sm-6">
                                                                       <div class="form-group">
                                                                           <label>Name</label>
                                                                           <input type="text" class="form-control" name="name" value="{{ $profile->name }}" required>
                                                                       </div>
                                                                   </div>
                                                                   <div class="col-12 col-sm-6">
                                                                       <div class="form-group">
                                                                           <label>Mobile</label>
                                                                           <input type="text" value="{{ $profile->mobile }}" name="mobile" class="form-control" onkeypress="return isNumber(event)" required maxlength="10" >
                                                                       </div>
                                                                   </div>
                                                                   <div class="col-12 col-sm-12">
                                                                       <div class="form-group">
                                                                           <label>Email ID</label>
                                                                           <input type="email" class="form-control" readonly name="email" value="{{ $profile->email }}" required>
                                                                       </div>
                                                                   </div>
                                                                   <div class="col-12 col-sm-6">
                                                                       <div class="form-group">
                                                                           <label>Designation</label>
                                                                           <input type="text" value="{{ $profile->designation }}"  name="designation" class="form-control" required>
                                                                       </div>
                                                                   </div>
                                                                   <div class="col-12 col-sm-6">
                                                                       <div class="form-group">
                                                                           <label>Aadhaar </label>
                                                                           <input type="text" value="{{ $profile->adhar_card }}" name="adhar_card" class="form-control" maxlength="12" onkeypress="return isNumber(event)" required >
                                                                       </div>
                                                                   </div>
                                                             
                                                               </div>
                                                               <button type="submit" id="submit1" class="btn btn-primary btn-block">Save Changes</button>
                                                           </form>
                                                       </div>
                                                   </div>
                                               </div>
                                           </div> --}}
                                           <!-- /Edit Details Modal -->

                                       </div>


                                   </div>
                                   <!-- /Personal Details -->

                               </div>
                               <!-- /Personal Details Tab -->

                               <!-- Change Password Tab -->
                               <div id="password_tab" class="tab-pane fade" wire:ignore>

                                   <div class="card">
                                       <div class="card-body">
                                           <h5 class="card-title">Change Password</h5>
                                           <form wire:submit.prevent="updatePassword"  >
                                          
                                               {{-- <input type="hidden" name="oldPassword" id="oldPassword" value="{{ $profile->password }}"> --}}
                                               <input type="hidden" name="email" id="email1" wire:model="email"  value="{{ $profile->email }}">
                                               <table class="table">
                                                   <tbody>
                                                       <tr class="info">
                                                           <th colspan="2" style="background-color:#d9edf7;">Change Password </th>
                                                       </tr>
                                                       <tr>
                                                           <td>Old Password</td>

                                                           <td>
                                                               <input type="password" class="input-lg form-control" name="old_password" id="old_password"  placeholder="Old Password" wire:model="old_password"  autocomplete="off" required >
                                                           </td>
                                                       </tr>

                                                       <tr>
                                                           <td>New Password </td>
                                                           <td>

                                                               <input type="password" class="input-lg form-control" name="new_password" id="password1" placeholder="New Password" wire:model="new_password" autocomplete="off" required >
                                                               <div class="row">
                                                                   <div class="col-sm-6">
                                                                       <span id="8char" class="fa fa-times" style="color:#FF0004;"></span> 8 Characters Long<br>
                                                                       <span id="ucase" class="fa fa-times" style="color:#FF0004;"></span> One Uppercase Letter
                                                                   </div>
                                                                   <div class="col-sm-6">
                                                                       <span id="lcase" class="fa fa-times" style="color:#FF0004;"></span> One Lowercase Letter<br>
                                                                       <span id="num" class="fa fa-times" style="color:#FF0004;"></span> One Number
                                                                   </div>
                                                               </div>
                                                           </td>
                                                       </tr>
                                                       <tr>
                                                           <td>New Password ( Retype) </td>
                                                           <td>
                                                               <input type="password" class="input-lg form-control" name="confirm_password" id="password2" wire:model="confirm_password" placeholder="Repeat Password" autocomplete="off" required >
                                                               <div class="row">
                                                                   <div class="col-sm-12">
                                                                       <span id="pwmatch" class="fa fa-times" style="color:#FF0004;"></span> Passwords Match
                                                                   </div>
                                                               </div>
                                                           </td>
                                                       </tr>
                                                       <tr>
                                                               <td></td>
                                                               <td>
                                                                   <button  class="btn btn-primary btn-block " type="submit" id="submit001" name="password_submit"> Update Password</button>

                                                               </td>
                                                               </tr>
                                                           </tbody>
                                                       </table>
                                           </form>


                                       </div>
                                   </div>
                               </div>
                               <!-- /Change Password Tab -->
                           <!-- Store Details Tab -->
                            <div id="store_details_tab" class="tab-pane fade" wire:ignore>
                               <!-- Store Details -->
                               <div class="row">
                                   <div class="col-lg-12">
                                       <div class="card">
                                           <div class="card-body">
                                               <h5 class="card-title d-flex justify-content-between">
                                                   <span>College Details</span>

                                               </h5>
                                                     
                                               <livewire:admin.system-table />
                                           </div>
                                       </div> 
                                       <!-- Edit Details Modal -->
                                       {{-- <div class="modal fade" id="edit_store_details" aria-hidden="true" role="dialog">
                                           <div class="modal-dialog modal-dialog-centered" role="document" >
                                               <div class="modal-content modal-lg">
                                                   <div class="modal-header">
                                                       <h5 class="modal-title">Store Details</h5>
                                                       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                           <span aria-hidden="true">&times;</span>
                                                       </button>
                                                   </div>
                                                   <div class="modal-body">
                                                       <form  method="POST" enctype="multipart/form-data" data="{{ route('store.submitStoreEdit') }}" redirect="{{ route('store.profile') }}" id="updateFormData">
                                                           @csrf
                                                           <input type="hidden" id="id" value="{{ $store->id }}" name="id">
                                                           <div class="row form-row">
                                                               <div class="col-12 col-sm-6">
                                                                   <div class="form-group">
                                                                       <label>Business Name</label>
                                                                       <input type="text" class="form-control" name="business_name" readonly placeholder="Enter Business Name" value="{{ $store->business_name }}">
                                                                   </div>
                                                               </div>
                                                               <div class="col-12 col-sm-6">
                                                                   <div class="form-group">
                                                                       <label>Email ID</label>
                                                                       <input type="email" class="form-control" readonly name="email" value="{{ $store->email }}">
                                                                   </div>
                                                               </div>
                                                               <div class="col-12 col-sm-6">
                                                                   <div class="form-group">
                                                                       <label>Contact Person</label>
                                                                       <input type="text" value="{{ $store->contact_person }}" readonly name="contact_person" placeholder="Enter Contact Person Name" class="form-control">
                                                                   </div>
                                                               </div>
                                                               <div class="col-12 col-sm-6">
                                                                   <div class="form-group">
                                                                       <label>Mobile No</label>
                                                                       <input type="text" value="{{ $store->mobile }}" name="mobile" readonly placeholder="Mobile"  class="form-control">
                                                                   </div>
                                                               </div>
                                                               <div class="col-12 col-sm-6">
                                                                   <div class="form-group">
                                                                   <label>Default Invoice </label>
                                                                   <select name="invoice_type" id="invoice_type" class="form-control" >
                                                                   <option value="{{ $store->invoice_type }}"  hidden selected>@if($store->invoice_type == 1){{ "A4 Sheet" }} @else {{ "Thermal(POS)" }} @endif </option>
                                                                   <option value="1">A4 Sheet</option>
                                                                   <option value="0">Thermal(POS)</option>
                                                               </select>
                                                                   </div>
                                                               </div>
                                                               <div class="col-12 col-sm-6">
                                                                   <div class="form-group">
                                                                   <label>Online Order </label>
                                                                   <select name="online_order" id="online_order" readonly class="form-control" >
                                                                   <option value="{{ $store->online_order }}"  hidden selected>@if($store->online_order == 1){{ "Yes" }} @else {{ "No" }} @endif</option>
                                                                   <option value="1">Yes</option>
                                                                   <option value="0">No</option>
                                                               </select>
                                                                   </div>
                                                               </div>
                                                               <div class="col-12 col-sm-6">
                                                                   <div class="form-group">
                                                                   <label>Home Delivery</label>
                                                                   <select name="home_delivery" id="home_delivery" readonly class="form-control">
                                                                   <option value="{{ $store->home_delivery }}"  hidden selected>@if($store->home_delivery == 1){{ "Yes" }} @else {{ "No" }} @endif </option>
                                                                   <option value="1">Yes</option>
                                                                   <option value="0">No</option>
                                                               </select>
                                                                   </div>
                                                               </div>
                                                               <div class="col-12 col-sm-6">
                                                                   <div class="form-group">
                                                                   <label>Additional Charge</label>
                                                                   <select name="additional_charge" id="additional_charge" readonly class="form-control">
                                                                   <option value="{{ $store->additional_charge }}"  hidden selected>@if($store->additional_charge == 1){{ "Yes" }} @else {{ "No" }} @endif </option>
                                                                   <option value="1">Yes</option>
                                                                   <option value="0">No</option>
                                                               </select>
                                                                   </div>
                                                               </div>
                                                               <div class="col-12 col-sm-6">
                                                                   <div class="form-group">
                                                                       <label>Delivery Charge</label>
                                                                       <input type="text" value="{{ $store->delivery_charge }}" readonly name="delivery_charge" placeholder="Enter delivery charge" class="form-control">
                                                                   </div>
                                                               </div>
                                                               <div class="col-12 col-sm-6">
                                                                   <div class="form-group">
                                                                       <label>Locality</label>
                                                                       <input type="text" value="{{ $store->locality }}" readonly  name="locality" placeholder="Enter Locality" class="form-control">
                                                                   </div>
                                                               </div>
                                                               <div class="col-12 col-sm-6">
                                                                   <div class="form-group">
                                                                       <label>State</label>
                                                                       <select name="state" id="state" class="form-control"  readonly onchange="fetchCity();" onload="fetchCity();">
                                                                           <option value="{{ $store->state }}"  hidden selected>{{ $store->state }}</option>
                                                                           @foreach($state as  $s)
                                                                           <option value="{{ $s->state }}">{{ $s->state }}</option>
                                                                           @endforeach
                                                                       </select>
                                                                   </div>
                                                               </div>
                                                               <div class="col-12 col-sm-6">
                                                                   <div class="form-group">
                                                                       <label>City</label>
                                                                       <select name="city" id="city" class="form-control" readonly>
                                                                           <option value="{{ $store->city }}"  hidden selected>{{ $store->city }}</option>
                                                                       </select>
                                                                   </div>
                                                               </div>
                                                               <div class="col-12 col-sm-6">
                                                                   <div class="form-group">
                                                                       <label>Pincode</label>
                                                                       <input type="text" id="pincode" readonly name="pincode" value="{{ $store->pincode }}" maxlength="6"  class="form-control">
                                                                   </div>
                                                               </div>
                                                               <div class="col-12 col-sm-6">
                                                                   <div class="form-group">
                                                                       <label>Logo</label>
                                                                       <input type="file" id="logo" readonly name="logo"  class="form-control">
                                                                       <div class="mt-2"> <img src="{{ asset('store_images/' .$store->logo) }}" height="40px" width="60px" alt=""></div>
                                                                   </div>
                                                               </div>
                                                               <div class="col-12 col-sm-12">
                                                                   <div class="form-group">
                                                                       <label>Full Address </label>
                                                                       <textarea type="text" name="full_address" readonly placeholder="Enter Full Address" rows="2" class="form-control">{{ $store->full_address }}</textarea>
                                                                   </div>
                                                               </div>
                                                               <div class="col-12 col-sm-12">
                                                                   <div class="form-group">
                                                                       <label>Description </label>
                                                                       <textarea type="text" name="description" readonly placeholder="Enter Description" rows="2" class="form-control">{{ $store->description }}</textarea>
                                                                   </div>
                                                               </div>
                                                           </div>
                                                           <button type="submit" id="submit" class="btn btn-primary btn-block">Save Changes</button>
                                                       </form>
                                                   </div>
                                               </div>
                                           </div>
                                       </div>
                                       <!-- /Edit Store Modal -->
                                   </div>
                               </div> --}}
                               <!-- /Store Details -->
                           </div>
                           <!-- /Store Details Tab -->
                           </div>
                       </div>
                   </div>
               </div>

               @push('scripts')
               <script type="text/javascript">
                $("input[type=password]").keyup(function(){
                    var ucase = new RegExp("[A-Z]+");
                    var lcase = new RegExp("[a-z]+");
                    var num = new RegExp("[0-9]+");
            
                    if($("#password1").val().length >= 8){
                        $("#8char").removeClass("fa-times");
                        $("#8char").addClass("fa-check");
                        $("#8char").css("color","#00A41E");
                    }else{
                        $("#8char").removeClass("fa-check");
                        $("#8char").addClass("fa-times");
                        $("#8char").css("color","#FF0004");
                    }
            
                    if(ucase.test($("#password1").val())){
                        $("#ucase").removeClass("fa-times");
                        $("#ucase").addClass("fa-check");
                        $("#ucase").css("color","#00A41E");
                    }else{
                        $("#ucase").removeClass("fa-check");
                        $("#ucase").addClass("fa-times");
                        $("#ucase").css("color","#FF0004");
                    }
            
                    if(lcase.test($("#password1").val())){
                        $("#lcase").removeClass("fa-times");
                        $("#lcase").addClass("fa-check");
                        $("#lcase").css("color","#00A41E");
                    }else{
                        $("#lcase").removeClass("fa-check");
                        $("#lcase").addClass("fa-times");
                        $("#lcase").css("color","#FF0004");
                    }
            
                    if(num.test($("#password1").val())){
                        $("#num").removeClass("fa-times");
                        $("#num").addClass("fa-check");
                        $("#num").css("color","#00A41E");
                    }else{
                        $("#num").removeClass("fa-check");
                        $("#num").addClass("fa-times");
                        $("#num").css("color","#FF0004");
                    }
            
                    if($("#password1").val() == $("#password2").val()){
                        $("#pwmatch").removeClass("fa-times");
                        $("#pwmatch").addClass("fa-check");
                        $("#pwmatch").css("color","#00A41E");
                    }else{
                        $("#pwmatch").removeClass("fa-check");
                        $("#pwmatch").addClass("fa-times");
                        $("#pwmatch").css("color","#FF0004");
                    }
                });
                </script>
                @endpush