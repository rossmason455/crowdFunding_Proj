@props(['action', 'method'])

<form action="{{ route('home.storeContribution') }}" method="POST">
    @csrf
    @if($method === 'PUT' || $method === 'PATCH')
        @method($method)
    @endif


    <div class="mb-3">
        <label for="amount" class="form-label">Contribution Amount</label>
        <input type="number" name="amount" id="amount" 
            value="{{ old('amount') }}" required min="1" step="0.01" 
            class="form-control" />
        @error('amount')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>


    <div class="mb-3">
        <label for="payment_method" class="form-label">Payment Method</label>
        <select name="payment_method" id="payment_method" class="form-control" required>
            <option value="card">Credit Card (Stripe)</option>
            <option value="paypal">PayPal</option>
        </select>
        @error('payment_method')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>


    <div>
        <button type="submit" class="btn btn-primary">
            Contribute Now
        </button>
    </div>
</form>