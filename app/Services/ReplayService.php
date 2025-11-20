<?php

namespace App\Services;

use App\Http\AdminHelpers;
use App\Replay;

class ReplayService
{
    public function saveReplay($request, $id = null)
    {
        $replay = $id ? Replay::findOrFail($id) : new Replay;

        $replay->title      = $request->title;
        $replay->video_link = $request->video_link;

        if ($request->hasFile('file') && $request->file('file')->isValid()) {

            // ✅ Get the UploadedFile object the Laravel way
            $file = $request->file('file');

            // Use original filename for extension + base name
            $pathinfo          = pathinfo($file->getClientOriginalName());
            $extension         = $pathinfo['extension'] ?? '';
            $original_filename = $pathinfo['filename'] ?? 'file';

            // ✅ Absolute path to public/storage/files
            $destinationPath = public_path('storage/files');

            // Ensure directory exists
            if (!is_dir($destinationPath)) {
                mkdir($destinationPath, 0755, true);
            }

            // ✅ Use your helper with the *absolute* path
            $fullFilePath = AdminHelpers::checkFileName($destinationPath, $original_filename, $extension);
            // e.g. /home/USER/public_html/public/storage/files/My PDF (1).pdf

            // Just the filename for move()
            $filenameOnly = basename($fullFilePath);

            // ✅ Actually move the uploaded file from tmp to destination
            $file->move($destinationPath, $filenameOnly);

            // Store web path in DB so your <a href="{{ url($replay->file) }}"> works
            $replay->file = 'storage/files/' . $filenameOnly;
        }

        $replay->save();
    }

}
