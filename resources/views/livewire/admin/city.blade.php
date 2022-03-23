<div id="content">
    <div class="row mb-4">
        <div class="col-12 col-sm-12">
           
            <div class="row">
                <div class="col-12 col-md-12 mb-4">
                    <div class="card redial-border-light redial-shadow">
                        <div class="card-body" style="overflow: visible;">
                            <h6 class="header-title pl-3 redial-relative" style="float: left">List City</h6>
                            <button wire:click="modalOpen" class="btn btn-info" style="float: right;" >Add New City</button>
                            <br>
                            <hr>
                
                                
                                        {{-- <livewire:datatable
                                        model="App\Models\college_cities"
                                        include="id, city, created_at"
                                        dates="created_at"
                                        searchable="city"
                                        exportable
                                        /> --}}

                                        {{-- <livewire:CityTable 
                                        searchable="name, email"
                                        exportable
                                        /> --}}
                                        {{-- <livewire:admin.cityTable /> --}}
                                        <livewire:admin.city-table />

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>


                   <!-------------------Product Info Modal----------->

            <div wire:ignore.self class="modal fade " id="modalForm" tabindex="-1" role="dialog" data-overlayspeed="200" aria-labelledby="myModalLabel">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document" style="min-width:90%">
                    <div class="modal-content ">
                        <div class="modal-header"
                            style="background: rgba(0, 0, 0, 0) linear-gradient(to right, #719e66 0%, #5684f2 100%) repeat scroll 0 0;">
                            <center>
                                <h4 class="modal-title" id="myModalLabel" style="color: #ffffff;">{{ ($cityID != null) ? 'Update City' : 'Add New City' }}</h4>
                            </center>
                            <button type="button" class="close" id="close_botton" data-dismiss="modal" aria-label="Close"
                                style="color: white; background-color: red"><span aria-hidden="true">&times;</span></button>
    
                        </div>
                        <div class="modal-body" id="showItem_data">
                        
                            <form wire:submit.prevent="cityInsert" wire:ignore.self>
                                {{-- @csrf --}}
                                    <input type="hidden" class="for-control" name="cityID" id="cityID" wire:modal="cityID">
                                <div class="row">
                                  <div class="col-md-8 col-lg-8 col-sm-8 col-xs-8">
                                      <div class="form-group">
                                          <label>City Name <span class="text-danger">*</span></label>
                                          <input type="text" class="form-control" name="city_name" id="city_name" wire:model="city_name" placeholder="Enter City Name" required/>
                                          @error('city_name')
                                          <span class="small text-danger">{{ $message }}</span>
                                          @enderror
                                      </div>
                                    </div>
                                    <div class="col-md-4">
                                          <br>
                                          {{-- <button class="btn btn-primary redial-rounded-circle-50" >Save</button> --}}
                                          <input type="submit" id="submit" value="{{ ($cityID !=null) ? 'Update' : 'Save' }}" class="btn btn-primary redial-rounded-circle-50">
                                        
                                    </div>
                                  
                                </div>
    
                                
                              </form>
                        </div>
    
                    </div>
                </div>
                </div>
            {{-- End Modal --}}

                </div>

