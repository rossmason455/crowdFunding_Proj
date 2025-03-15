@props(['action', 'method'])


<form action="{{ $action }}" method="POST" enctype="multipart/form-data">
    @csrf
    @if($method === 'PUT' || $method === 'PATCH')
        @method($method)
    @endif

   
    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" name="title" id="title" 
            value="{{ old('title', $campaign->title ?? '') }}" required 
            class="form-control" />
        @error('title')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    
    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <input type="text" name="description" id="description" 
            value="{{ old('description', $campaign->description ?? '') }}" required 
            class="form-control" />
        @error('description')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

     
      <div class="mb-3">
        <label for="solution" class="form-label">Solution</label>
        <input type="text" name="solution" id="solution" 
            value="{{ old('solution', $campaign->solution ?? '') }}" required 
            class="form-control" />
        @error('solution')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
      
      <div class="mb-3">
        <label for="start_date" class="form-label">Start Date</label>
        <input type="date" name="start_date" id="start_date" 
            value="{{ old('start_date', $campaign->start_date ?? '') }}" required 
            class="form-control" />
        @error('start_date')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
     
      <div class="mb-3">
        <label for="end_date" class="form-label">End Date</label>
        <input type="date" name="end_date" id="end_date" 
            value="{{ old('end_date', $campaign->end_date ?? '') }}" required 
            class="form-control" />
        @error('end_date')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
      
      <div class="mb-3">
        <label for="goal" class="form-label">Goal</label>
        <input type="number" name="goal" id="goal" 
            value="{{ old('goal', $campaign->goal ?? '') }}" required 
            class="form-control" />
        @error('goal')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
      
      <div class="mb-3">
        <label for="progress" class="form-label">Progress</label>
        <input type="number" name="progress" id="progress" 
            value="{{ old('progress', $campaign->progress ?? '') }}" required 
            class="form-control" />
        @error('progress')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
     
      <div class="mb-3">
        <label for="competitive_landscape" class="form-label">Competitve Landscape</label>
        <input type="text" name="competitive_landscape" id="competitive_landscape" 
            value="{{ old('competitive_landscape', $campaign->competitive_landscape ?? '') }}" required 
            class="form-control" />
        @error('competitive_landscape')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
     
     <div class="mb-3">
        <label for="team" class="form-label">Team</label>
        <input type="text" name="team" id="team" 
            value="{{ old('team', $campaign->team ?? '') }}" required 
            class="form-control" />
        @error('team')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
    <label for="campaign_type" class="form-label">Campaign Type</label>
    <select name="campaign_type" id="campaign_type" class="form-control" required>
        <option value="Angel Investment" {{ old('campaign_type', $campaign->campaign_type ?? '') }}>Angel Investment</option>
        <option value="Crowdfunding" {{ old('campaign_type', $campaign->campaign_type ?? '')}}>Crowdfunding</option>
    </select>
    @error('campaign_type')
        <div class="text-danger">{{ $message }}</div>
    @enderror
</div>


    
<div class="mb-3">
    <label for="image" class="form-label">Banner Image</label>
    <input type="file" name="image" id="image" {{ isset($campaign) ? '' : 'required' }} 
        class="form-control" />
    @error('image')
        <div class="text-danger">{{ $message }}</div>
    @enderror
</div>

@isset($campaign->image_url)
    <div class="mb-3">
        <img src="{{ asset($campaign->image) }}" alt="Campaign image" class="img-fluid" />
    </div>
@endisset

<!-- Submit Button -->
<div>
    <button type="submit" class="btn btn-primary">
        {{ isset($campaign) ? 'Update Campaign' : 'Add Campaign' }}
    </button>
</div>
</form>