<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Beranda;
use Illuminate\Support\Str;


class BerandaController extends Controller
{
    public function index()
    {
        $beranda = Beranda::orderBy('created_at', 'desc')->get();
        return view('admin.beranda', compact('beranda')); // Kirim ke view
    }
    public function edit($slug)
    {
        $beranda = Beranda::where('slug', $slug)->firstOrFail();
        return view('admin.detail', compact('beranda'));
    }
    
    public function store(Request $request)
    {
        try {
            $request->validate([
                'title' => 'required|string|max:255',
                'body' => 'required|string',
                'status' => 'required|string',
                'file' => 'nullable|file|max:2048',
            ]);
    
            $filePath = null;
            if ($request->hasFile('file')) {
                $file = $request->file('file');
                $fileName = $file->getClientOriginalName();
                $filePath = $file->storeAs('documents', $fileName, 'public');
            }
    
            $beranda = new Beranda();
            $beranda->title = $request->title;
            $beranda->body = $request->body;
            $beranda->status = $request->status;
            $beranda->file = $filePath ? basename($filePath) : null;
            $beranda->save();
    
            return redirect()->route('admin.beranda')->with('success', 'Berhasil disimpan!');
        } catch (\Exception $e) {
            \Log::error($e->getMessage());
            return redirect()->route('admin.beranda')->with('error', 'Terjadi kesalahan saat menyimpan data.');
        }
    }
    

    public function update(Request $request)
    {
        try {
            // Validasi data input
            $validatedData = $request->validate([
                'id' => 'required|integer',
                'title' => 'required|string|max:255',
                'slug' => 'nullable|string|max:255',
                'body' => 'required|string',
                'file' => 'nullable|file',
                'status' => 'required|string',
            ]);
    
            // Cari data berdasarkan ID, bukan slug
            $beranda = Beranda::findOrFail($validatedData['id']);
    
            // Jika ada file yang diunggah, simpan file
            if ($request->hasFile('file')) {
                $filePath = $request->file('file')->getClientOriginalName();
                $request->file('file')->storeAs('documents', $filePath, 'public');
                $beranda->file = $filePath;
            }
    
            // Update data
            $beranda->title = $validatedData['title'];
            // Jika slug tidak disediakan, buat slug dari title
            $beranda->slug = $validatedData['slug'] ?? Str::slug($validatedData['title']);
            $beranda->body = $validatedData['body'];
            $beranda->status = $validatedData['status'];
            $beranda->save();
    
            // Redirect setelah berhasil update dengan slug yang benar
            return redirect()->route('beranda.edit', ['slug' => $beranda->slug])
                             ->with('success', 'Berhasil diupdate!');
        } catch (\Exception $e) {
            \Log::error($e->getMessage());
    
            // Tangkap slug dari request atau beranda jika ada
            $slug = $beranda->slug ?? $request->slug;
    
            // Redirect ke halaman edit dengan slug
            return redirect()->route('beranda.edit', ['slug' => $slug])
                             ->with('error', 'Terjadi kesalahan saat menyimpan data.');
        }
    }
    
    public function destroy($slug)
    {
        $beranda = Beranda::where('slug', $slug)->first();
        
        if ($beranda) {
            $beranda->delete();
            return redirect()->back()->with('success', 'Data berhasil dihapus.');
        } else {
            return redirect()->back()->with('error', 'Data tidak ditemukan.');
        }
    }
}
