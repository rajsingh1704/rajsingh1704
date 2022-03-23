<div id="content">


    {{-- ******************* List ****************** --}}
    <div class="row mb-4">
        <div class="col-12 col-sm-12">
            <div class="row">
                <div class="col-12 col-md-12 mb-4">
                    <div class="card redial-border-light redial-shadow">
                        <div class="card-body" style="overflow: visible;">
                            <h6 class="header-title pl-3 redial-relative" style="float: left">Show Course</h6>
                            <button wire:click="modalOpen" class="btn btn-info" style="float: right; " >Add New Course</button>
                            <br>
                            <hr>
                            <livewire:admin.courses-table />

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    {{-- *********** eNd List ***************** --}}

                   <!-------------------Product Info Modal----------->

            <div wire:ignore.self class="modal fade " id="modalForm" tabindex="-1" role="dialog" data-overlayspeed="200" aria-labelledby="myModalLabel">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document" style="min-width:90%">
                    <div class="modal-content ">
                        <div class="modal-header"
                            style="background: rgba(0, 0, 0, 0) linear-gradient(to right, #719e66 0%, #5684f2 100%) repeat scroll 0 0;">
                            <center>
                                <h4 class="modal-title" id="myModalLabel" style="color: #ffffff;">{{ ($courseID != null) ? 'Update Course' : 'Add New Course' }}</h4>
                            </center>
                            <button type="button" class="close" id="close_botton" data-dismiss="modal" aria-label="Close"
                                style="color: white; background-color: red"><span aria-hidden="true">&times;</span></button>
    
                        </div>
                        <div class="modal-body" id="showItem_data">
                        
                            <form wire:submit.prevent="courseInsert" wire:ignore.self>
                                {{-- @csrf --}}
                                    <input type="hidden" class="for-control" name="courseID" id="courseID" wire:modal="courseID">
                                <div class="row">
                                  <div class="col-md-8 col-lg-8 col-sm-8 col-xs-8">
                                      <div class="form-group">
                                          <label>Course Name <span class="text-danger">*</span></label>
                                          <input type="text" class="form-control" name="course_name" id="course_name" wire:model="course_name" placeholder="Enter Course Name" required/>
                                          @error('course_name')
                                          <span class="small text-danger">{{ $message }}</span>
                                          @enderror
                                      </div>
                                    </div>
                                    <div class="col-md-4">
                                          <br>
                                          {{-- <button class="btn btn-primary redial-rounded-circle-50" >Save</button> --}}
                                          <input type="submit" id="submit" value="{{ ($courseID !=null) ? 'Update' : 'Save' }}" class="btn btn-primary redial-rounded-circle-50">
                                        
                                    </div>
                                  
                                </div>
    
                                
                              </form>
                        </div>
    
                    </div>
                </div>
                </div>
            {{-- End Modal --}}

                </div>

            {{-- ***************************  List ****************** --}}
            


            {{-- *********************** --}}
           


            @push('scripts')
<script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function () {        
        @this.on('triggerDelete', id => {
            alert('hi');
            
        });
    })
</script>
@endpush
