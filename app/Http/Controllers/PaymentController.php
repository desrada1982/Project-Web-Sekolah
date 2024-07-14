<?php

namespace App\Http\Controllers;

use App\Models\Enrollment;
use App\Models\Payment;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():View
    {
        $payments = Payment::all();
        return view('payments.index')->with('payments',$payments);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        $enrollments = Enrollment::pluck('enroll_no','id');
        return view('payments.create',compact('enrollments'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request):RedirectResponse
    {
        $input = $request->all();
        Payment::create($input);
        return redirect('payments')->with('flash_message','Pembayaran Berhasil di tambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id):View
    {
        $payments = Payment::find($id);
        return view('payments.show')->with('payments',$payments);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id):View
    {
        $payments = Payment::find($id);
        return view('payments.edit')->with('payments',$payments);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id):RedirectResponse
    {
        $payments = Payment::find($id);
        $input = $request->all();
        $payments->update($input);
        return redirect('payments')->with('flash_message','Pembayaran Siswa berhasil DiUpdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Payment::destroy($id);
        return redirect('payments')->with('flash_message','Pembayaran siswa berhasil Dihapus!');
    }
}
