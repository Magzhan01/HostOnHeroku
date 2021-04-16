<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clients;
use App\Models\ClientsDetails;

class UploadController extends Controller
{
    function index(Request $request) {
        $file = $request->file('file');

        echo 'File Name: '.$file->getClientOriginalName();
        echo '<br>';

        echo 'File extension: '.$file->getClientOriginalExtension();
        echo '<br>';

        echo 'File real path: '.$file->getRealPath();
        echo '<br>';
 
        echo 'File size: '.$file->getSize();
        echo '<br>';

        echo 'File Mime Type: '.$file->getMimeType();

        $destinationPath = 'C:\xampp\htdocs\lab_10\upload';
        $file->move($destinationPath,$file->getClientOriginalName());
    }

    public function uploadForm() {
        return view('Upload_form');
    }

    public function uploadSubmit(Request $request) {
        $this->validate($request,[
        'fullname' => 'required',
        'email' => 'required',
        'photos' => 'required',
        ]);

        if($request->hasFile('photos')) {
            $allowedfileExtension=['pdf','jpg','png','DOCX','docx','ZIP','zip'];
            $files = $request->file('photos');
            foreach($files as $file) {
                $filename = $file->getClientOriginalName();
                $extension = $file->getClientOriginalExtension();
                $check = in_array($extension,$allowedfileExtension);
                if($check) {
                    $clients= Clients::create($request->all());
                    foreach($request->photos as $photo) {
                        $filename = $photo->store('photos');
                        ClientsDetails::create([
                            'client_id' => $clients->id,
                            'filename' => $filename
                        ]);
                    }
                    echo "Upload Succesfully";
                }
                else {
                    echo '<div class="alert alert-warning"><strong>Warning!</strong>Sorry Only Upload png,jpg,doc</div>';
                }
            }
        }
    }
}
