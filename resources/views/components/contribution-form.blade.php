@props(['action', 'method', 'investor_profile' => null])

<form action="{{ $action }}" method="POST" enctype="multipart/form-data">
    @csrf
    @if($method === 'PUT' || $method === 'PATCH')
        @method($method)
    @endif

    <!-- Risk Profile Dropdown -->
    <div class="mb-3">
        <label for="risk_profile" class="form-label">Risk Profile</label>
        <select name="risk_profile" id="risk_profile" class="form-control" required>
            <option value="low" {{ old('risk_profile', $investor_profile->risk_profile ?? '') == 'low' ? 'selected' : '' }}>Low</option>
            <option value="moderate" {{ old('risk_profile', $investor_profile->risk_profile ?? '') == 'moderate' ? 'selected' : '' }}>Moderate</option>
            <option value="high" {{ old('risk_profile', $investor_profile->risk_profile ?? '') == 'high' ? 'selected' : '' }}>High</option>
        </select>
        @error('risk_profile')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <!-- Minimum Investment Field -->
    <div class="mb-3">
        <label for="min_investment" class="form-label">Minimum Investment</label>
        <input type="number" name="min_investment" id="min_investment"
               value="{{ old('min_investment', $investor_profile->min_investment ?? '') }}" required
               class="form-control" />
        @error('min_investment')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <!-- Submit Button -->
    <div>
        <button type="submit" class="btn btn-primary">
            {{ isset($investor_profile) ? 'Update Investor Profile' : 'Add Investor Profile' }}
        </button>
    </div>
</form>