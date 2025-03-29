@props(['action', 'method'])


<form action="{{ $action }}" method="POST" enctype="multipart/form-data">
    @csrf
    @if($method === 'PUT' || $method === 'PATCH')
        @method($method)
    @endif

   
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

    
    <div class="mb-3">
        <label for="min_investment" class="form-label">Minimum Investment</label>
        <input type="number" name="min_investment" id="min_investment" 
            value="{{ old('min_investment', $investor_profile->min_investment ?? '') }}" required 
            class="form-control" />
        @error('min_investment')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

     
      <div class="mb-3">
        <label for="max_investment" class="form-label">Maximum Investment</label>
        <input type="number" name="max_investment" id="max_investment" 
            value="{{ old('max_investment', $investor_profile->max_investment ?? '') }}" required 
            class="form-control" />
        @error('max_investment')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
      
      <div class="mb-3">
        <label for="investment_preference" class="form-label">Investment Preference</label>
        <input type="text" name="investment_preference" id="investment_preference" 
            value="{{ old('investment_preference', $investor_profile->investment_preference ?? '') }}" required 
            class="form-control" />
        @error('investment_preference')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
     
      <div class="mb-3">
        <label for="investment_approach" class="form-label">Investment Approach</label>
        <input type="text" name="investment_approach" id="investment_approach" 
            value="{{ old('investment_approach', $investor_profile->investment_approach ?? '') }}" required 
            class="form-control" />
        @error('investment_approach')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
      
      <div class="mb-3">
        <label for="preferred_investment_stage" class="form-label">Preferred Investment Stage</label>
        <select name="preferred_investment_stage" id="preferred_investment_stage" class="form-control" required>
            <option value="Early Stage" {{ old('preferred_investment_stage', $investor_profile->preferred_investment_stage ?? '') == 'early_stage' ? 'selected' : '' }}>Early Stage</option>
            <option value="Growth Stage" {{ old('preferred_investment_stage', $investor_profile->preferred_investment_stage ?? '') == 'growth_stage' ? 'selected' : '' }}>Growth Stage</option>
            <option value="Late Stage" {{ old('preferred_investment_stage', $investor_profile->preferred_investment_stage ?? '') == 'late_stage' ? 'selected' : '' }}>Late Stage</option>
        </select>
        @error('preferred_investment_stage')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
      
      <div class="mb-3">
        <label for="investment_interest" class="form-label">Investment Interest</label>
        <input type="text" name="investment_interest" id="investment_interest" 
            value="{{ old('investment_interest', $investor_profile->investment_interest ?? '') }}" required 
            class="form-control" />
        @error('investment_interest')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
     
     



<!-- Submit Button -->
<div>
    <button type="submit" class="btn btn-primary">
        {{ isset($investor_profile) ? 'Update Investor Profile' : 'Add Investor profile' }}
    </button>
</div>
</form>