<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AppliedJob;

class ApplyJobController extends Controller
{
    public function apply($id)
    {
        // Logika untuk menampilkan form aplikasi pekerjaan
        // Contoh: 
        return view('job_posts.apply_job', ['jobId' => $id]);
    }

    public function store(Request $request, $id)
    {
        $appliedJob = new AppliedJob();
        $appliedJob->job_id = $id;
        $appliedJob->user_id = auth()->user()->id; // Mendapatkan user_id dari pengguna yang sedang masuk
        // Simpan data lainnya sesuai kebutuhan
        $appliedJob->save();
    
        // Redirect ke halaman yang sesuai
        return redirect()->route('applied.jobs');
    }

// ApplyJobController.php

    public function appliedJobs(Request $request, $id)
    {
        // Lakukan logika untuk menyimpan data pekerjaan yang telah diapply ke dalam database
        // Anda dapat menggunakan model AppliedJob untuk menyimpan data yang diperlukan
        
        // Misalnya, menyimpan ID pekerjaan yang diapply ke dalam tabel AppliedJob
        $appliedJob = new AppliedJob();
        $appliedJob->job_post_id = $id; // Atur ID pekerjaan yang diapply
        $appliedJob->save();
        
        // Temukan pekerjaan yang telah diapply
        $jobPost = JobPost::find($id); // Ganti JobPost dengan nama model yang benar
        
        // Kirimkan $jobPost ke view
        return view('nama_view', compact('jobPost'));
    }

}