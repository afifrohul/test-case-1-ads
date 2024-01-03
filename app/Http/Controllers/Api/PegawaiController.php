<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pegawai;
use App\Models\Cuti;
use Illuminate\Support\Facades\DB;

class PegawaiController extends Controller
{
    public function index()
    {
        $status = '';
        $message = '';
        $data = '';

        try {
            $pegawai = \App\Models\Pegawai::all();
            $status = 'success';
            $message = 'berhasil';
            $data = $pegawai;
        }catch(\Exception $e){
            $status = 'failed';
            $message = 'Gagal. ' . $e->getMessage();
        }
        catch(\Illuminate\Database\QueryException $e){
            $status = 'failed';
            $message = 'Gagal. ' . $e->getMessage();
        }
        finally{
            return response()->json([
                'status' => $status,
                'message' => $message,
                'data' => $data
            ], 200);
        }
    }
    
    public function top3pegawai()
    {
        $status = '';
        $message = '';
        $data = '';

        try {
            $pegawai = \App\Models\Pegawai::orderBy('tanggal_bergabung', 'ASC')->take(3)->get();
            $status = 'success';
            $message = 'berhasil';
            $data = $pegawai;
        }catch(\Exception $e){
            $status = 'failed';
            $message = 'Gagal. ' . $e->getMessage();
        }
        catch(\Illuminate\Database\QueryException $e){
            $status = 'failed';
            $message = 'Gagal. ' . $e->getMessage();
        }
        finally{
            return response()->json([
                'status' => $status,
                'message' => $message,
                'data' => $data
            ], 200);
        }
    }
    
    public function pegawai_cuti()
    {
        $status = '';
        $message = '';
        $data = '';

        try {
            $pegawai = \App\Models\Pegawai::has('cuti')->get();
            $status = 'success';
            $message = 'berhasil';
            $data = $pegawai;
        }catch(\Exception $e){
            $status = 'failed';
            $message = 'Gagal. ' . $e->getMessage();
        }
        catch(\Illuminate\Database\QueryException $e){
            $status = 'failed';
            $message = 'Gagal. ' . $e->getMessage();
        }
        finally{
            return response()->json([
                'status' => $status,
                'message' => $message,
                'data' => $data
            ], 200);
        }
    }
    
    public function pegawai_sisa_cuti()
    {
        $status = '';
        $message = '';
        $data = '';

        try {
            $pegawai = Pegawai::leftJoin('cuti', 'pegawai.nomor_induk', '=', 'cuti.nomor_induk')
            ->select('pegawai.nomor_induk', 'pegawai.nama', DB::raw('COALESCE((12 - SUM(cuti.lama_cuti)), 12) AS sisa_cuti'))
            ->groupBy('pegawai.nomor_induk', 'pegawai.nama')
            ->get();

            $status = 'success';
            $message = 'berhasil';
            $data = $pegawai;
        }catch(\Exception $e){
            $status = 'failed';
            $message = 'Gagal. ' . $e->getMessage();
        }
        catch(\Illuminate\Database\QueryException $e){
            $status = 'failed';
            $message = 'Gagal. ' . $e->getMessage();
        }
        finally{
            return response()->json([
                'status' => $status,
                'message' => $message,
                'data' => $data
            ], 200);
        }
    }

    public function store(Request $request)
    {
        $this->validate($request,
        [
            'nomor_induk' => 'required|unique:pegawai',
            'nama' => 'required',
            'alamat' => 'required',
            'tanggal_lahir' => 'required',
            'tanggal_bergabung' => 'required'

        ],
        [
            'required' => ':attribute harus diisi'
        ]);

        try {

            $status = '';
            $message = '';
            $data = '';

            
            $pegawai = new \App\Models\Pegawai();
            $pegawai->nomor_induk = $request->nomor_induk;
            $pegawai->nama = $request->nama;
            $pegawai->alamat = $request->alamat;
            $pegawai->tanggal_lahir = $request->tanggal_lahir;
            $pegawai->tanggal_bergabung = $request->tanggal_bergabung;
            $pegawai->save();
            
            $status = 'success';
            $message = 'berhasil';
            $data = $pegawai;

        } catch(\Exception $e){
            $status = 'failed';
            $message = 'Gagal. ' . $e->getMessage();
        }
        catch(\Illuminate\Database\QueryException $e){
            $status = 'failed';
            $message = 'Gagal. ' . $e->getMessage();
        }
        finally{
            return response()->json([
                'status' => $status,
                'message' => $message,
                'data' => $data
            ], 200);
        }
    }
    
    public function update(Request $request, Pegawai $pegawai)
    {
        $this->validate($request,
        [
            'nama' => 'required',
            'alamat' => 'required',
            'tanggal_lahir' => 'required',
            'tanggal_bergabung' => 'required'

        ],
        [
            'required' => ':attribute harus diisi'
        ]);

        try {

            $status = '';
            $message = '';
            $data = '';

            // $pegawai = Post::find($pegawai->id);
            $pegawai->nama = $request->nama;
            $pegawai->alamat = $request->alamat;
            $pegawai->tanggal_lahir = $request->tanggal_lahir;
            $pegawai->tanggal_bergabung = $request->tanggal_bergabung;
            $pegawai->save();
            
            $status = 'success';
            $message = 'berhasil';
            $data = $pegawai;

        } catch(\Exception $e){
            $status = 'failed';
            $message = 'Gagal. ' . $e->getMessage();
        }
        catch(\Illuminate\Database\QueryException $e){
            $status = 'failed';
            $message = 'Gagal. ' . $e->getMessage();
        }
        finally{
            return response()->json([
                'status' => $status,
                'message' => $message,
                'data' => $data
            ], 200);
        }
    }
    
    public function delete(Pegawai $pegawai)
    {
        try {

            $status = '';
            $message = '';

            Pegawai::find($pegawai->id)->delete();
            
            $status = 'success';
            $message = 'berhasil';

        } catch(\Exception $e){
            $status = 'failed';
            $message = 'Gagal. ' . $e->getMessage();
        }
        catch(\Illuminate\Database\QueryException $e){
            $status = 'failed';
            $message = 'Gagal. ' . $e->getMessage();
        }
        finally{
            return response()->json([
                'status' => $status,
                'message' => $message,
            ], 200);
        }
    }
}
