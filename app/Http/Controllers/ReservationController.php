<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\ReservationRequest;
use App\Models\Reservation;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ReservationController extends Controller
{
    /**
     * Show the reservation form.
     */
    public function create(): View
    {
        return view('reservations.create');
    }

    /**
     * Store a new reservation.
     */
    public function store(ReservationRequest $request): RedirectResponse
    {
        $validated = $request->validated();
        
        Reservation::create($validated);
        
        return redirect()->route('reservations.thank-you')
            ->with('success', 'Your reservation has been received. We will confirm shortly.');
    }
    
    /**
     * Show thank you page after reservation.
     */
    public function thankYou(): View
    {
        return view('reservations.thank-you');
    }
} 