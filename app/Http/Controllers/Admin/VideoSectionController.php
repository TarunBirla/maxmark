<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\VideoSection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class VideoSectionController extends Controller
{
    /**
     * Display the video section management form.
     */
    public function index()
    {
        $videoSection = VideoSection::getContent();
        return view('admin.video', compact('videoSection'));
    }

    /**
     * Update video section content and upload video.
     */
    public function update(Request $request)
    {
        $request->validate([
            'eyebrow'     => 'required|string|max:255',
            'heading'     => 'required|string|max:255',
            'description' => 'required|string',
            'button_text' => 'nullable|string|max:255',
            'button_link' => 'nullable|string|max:255',
            'video_file'  => 'nullable|file|mimes:mp4,webm,ogg,mov,mkv,avi|max:102400',
            'poster_file' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:10240',
            'video_url'   => 'nullable|string|max:500',
        ]);

        $section = VideoSection::first();
        if (!$section) {
            $section = new VideoSection();
        }

        $videoUrl = $section->video_url ?: '/video.mp4';
        $posterUrl = $section->poster_url;

        // Check if user uploaded a new video file
        if ($request->hasFile('video_file')) {
            $file = $request->file('video_file');
            $filename = 'video_' . time() . '.' . $file->getClientOriginalExtension();
            $destinationPath = public_path('uploads/videos');

            if (!File::exists($destinationPath)) {
                File::makeDirectory($destinationPath, 0755, true, true);
            }

            $file->move($destinationPath, $filename);
            $videoUrl = '/uploads/videos/' . $filename;
        } elseif ($request->filled('video_url')) {
            $videoUrl = $request->input('video_url');
        }

        // Check if user uploaded a new poster image file
        if ($request->hasFile('poster_file')) {
            $pFile = $request->file('poster_file');
            $pFilename = 'poster_' . time() . '.' . $pFile->getClientOriginalExtension();
            $pDestinationPath = public_path('uploads/posters');

            if (!File::exists($pDestinationPath)) {
                File::makeDirectory($pDestinationPath, 0755, true, true);
            }

            $pFile->move($pDestinationPath, $pFilename);
            $posterUrl = '/uploads/posters/' . $pFilename;
        }

        $data = [
            'eyebrow'     => $request->input('eyebrow'),
            'heading'     => $request->input('heading'),
            'description' => $request->input('description'),
            'button_text' => $request->input('button_text'),
            'button_link' => $request->input('button_link'),
            'video_url'   => $videoUrl,
            'poster_url'  => $posterUrl,
        ];

        $section->fill($data);
        $section->save();

        // Also save to JSON file fallback
        $jsonPath = storage_path('app/video_section.json');
        File::put($jsonPath, json_encode($data, JSON_PRETTY_PRINT));

        return redirect()->back()->with('success', 'Video Section and poster updated successfully!');
    }

    /**
     * Reset video URL back to default /video.mp4.
     */
    public function resetVideo()
    {
        $section = VideoSection::first();
        if ($section) {
            $section->video_url = '/video.mp4';
            $section->save();
        }

        $jsonPath = storage_path('app/video_section.json');
        if (File::exists($jsonPath)) {
            $data = json_decode(File::get($jsonPath), true) ?: [];
            $data['video_url'] = '/video.mp4';
            File::put($jsonPath, json_encode($data, JSON_PRETTY_PRINT));
        }

        return redirect()->back()->with('success', 'Video reset to default /video.mp4 successfully.');
    }
}
