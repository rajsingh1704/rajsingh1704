<?php

namespace App\Http\Livewire\Admin\College;

use Livewire\Component;
use Livewire\WithFileUploads;

use App\Models\college_gallery;

class CollegeProfileBanner extends Component
{
    use WithFileUploads;

    public $profileImg=[];

    public $collegeDataId;




    public function uploadProfileImg(){

        $galleryData=[];
        foreach ($this->profileImg as $key => $image) {
            $this->profileImg[$key] = $image->store('images','public');

            $dArr=['type'=>'profile', 'image'=>$this->profileImg[$key]];
            array_push($galleryData, $dArr);
        }

        foreach ($galleryData as $key => $gal) {
            $galleryDetails = new college_gallery;
            $galleryDetails->college_id=$this->collegeDataId;
            $galleryDetails->type=$gal['type'];
            $galleryDetails->image=$gal['image'];
            $galleryDetails->save();

        }
        if($galleryDetails ==true){
            $this->dispatchBrowserEvent('alert', 
                ['type' => 'success',  'message' => 'Successfully Uploaded']);
                $this->emit('refreshBannerTable');
        }
    }

    public function render()
    {
        
        return <<<'blade'
            <div>
                <form wire:submit.prevent="uploadProfileImg" enctype= multipart/form-data >
                    <input type="hidden" name="collegeDataId" id="collegeDataId" wire:model="collegeDataId" />

                    @error('collegeDataId')
                        <span class="small text-danger">{{ $message }}</span>
                        @enderror
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label>Add More Banner (Multipl)</label>
                            <input type="file" class="form-control" name="profileImg" id="profileImg" wire:model="profileImg" multiple />
                        </div>
                        <div class="col-md-6" style="padding-top:35px">
                            <button type="submit" class="btn btn-success">Upload</button>
                        </div>
                    </div>
                </form>
            </div>
        blade;
    }
}
