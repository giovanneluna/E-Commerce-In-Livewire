<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class ImageUpload extends Component
{
    use WithFileUploads;

    public $image;

    public function upload()
    {
        $this->validate([
            'image' => 'image|max:1024',
        ]);

        $url = $this->image->store('images', 'public');
    }

    public function export()
    {
        return response()->download(storage_path('storage/app/images/mibr.jpg'));
    }

    public function render()
    {
        return view('livewire.image-upload');
    }
}