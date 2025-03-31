@props(['action', 'method'])


<form action="{{ $action }}" method="PUT" enctype="multipart/form-data">
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
        <label for="use_of_funds" class="form-label">Use of Funds</label>
        <input type="text" name="use_of_funds" id="use_of_funds" 
            value="{{ old('team', $campaign->use_of_funds ?? '') }}" required 
            class="form-control" />
        @error('team')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>



    <div class="mb-3">
    <label for="campaign_type" class="form-label">Campaign Type</label>
    <select name="campaign_type" id="campaign_type" class="form-control" required>
        <option value="Angel Investment" {{ old('campaign_type', $campaign->campaign_type ?? '') === 'Angel Investment' ? 'selected' : '' }}>Angel Investment</option>
        <option value="Crowdfunding" {{ old('campaign_type', $campaign->campaign_type ?? '') === 'Crowdfunding' ? 'selected' : ''}}>Crowdfunding</option>
    </select>
    @error('campaign_type')
        <div class="text-danger">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="category" class="form-label">Category</label>
    <select name="category" id="category" class="form-control" required>
        @foreach(['Funding', 'Marketing', 'Research', 'Development', 'Education', 
                 'Technology', 'Healthcare', 'Non-profit', 'Art & Culture', 'Environment', 
                 'Social Impact', 'Innovation', 'Startups', 'Sports', 'Fashion', 
                 'Food & Beverage', 'Travel', 'Entertainment', 'Real Estate', 'Financial Services'] as $category)
            <option value="{{ $category }}" {{ old('category', $campaign->category ?? '') === $category ? 'selected' : '' }}>
                {{ $category }}
            </option>
        @endforeach
    </select>
    @error('category')
        <div class="text-danger">{{ $message }}</div>
    @enderror
</div>


<div class="mb-3">
    <label for="image1" class="form-label">Banner Image</label>
    <input type="file" name="image1" id="image1" {{ isset($campaign) ? '' : 'required' }} 
        class="form-control" />
    @error('image1')
        <div class="text-danger">{{ $message }}</div>
    @enderror
</div>

@isset($campaign->image1)
    <div class="mb-3">
        <img src="{{ asset($campaign->image1) }}" alt="Campaign image" class="img-fluid" />
    </div>
@endisset






    
<div class="mb-3">
    <label for="image2" class="form-label">Competitve Landscape Image</label>
    <input type="file" name="image2" id="image2" {{ isset($campaign) ? '' : 'required' }} 
        class="form-control" />
    @error('image2')
        <div class="text-danger">{{ $message }}</div>
    @enderror
</div>

@isset($campaign->image2)
    <div class="mb-3">
        <img src="{{ asset($campaign->image2) }}" alt="Campaign image" class="img-fluid" />
    </div>
@endisset





<div class="mb-3">
    <label for="image3" class="form-label">Solution Image</label>
    <input type="file" name="image3" id="image3" {{ isset($campaign) ? '' : 'required' }} 
        class="form-control" />
    @error('image3')
        <div class="text-danger">{{ $message }}</div>
    @enderror
</div>

@isset($campaign->image3)
    <div class="mb-3">
        <img src="{{ asset($campaign->image3) }}" alt="Campaign image" class="img-fluid" />
    </div>
@endisset


<div class="mb-3">
    <label for="image4" class="form-label">Team Image</label>
    <input type="file" name="image4" id="image4" {{ isset($campaign) ? '' : 'required' }} 
        class="form-control" />
    @error('image4')
        <div class="text-danger">{{ $message }}</div>
    @enderror
</div>


@isset($campaign->image4)
    <div class="mb-3">
        <img src="{{ asset($campaign->image4) }}" alt="Campaign image" class="img-fluid" />
    </div>
@endisset


<!-- Submit Button -->
<div>
    <button type="submit" class="btn btn-primary">
        {{ isset($campaign) ? 'Update Campaign' : 'Add Campaign' }}
    </button>
</div>
</form>