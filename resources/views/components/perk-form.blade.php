@props(['action', 'method'])


<form action="{{ route('home.storePerk') }}" method="POST" enctype="multipart/form-data">
    @csrf
    @if($method === 'PUT' || $method === 'PATCH')
        @method($method)
    @endif

          
   
  

    
    
    
              
    <div class="mb-3">
        <label for="description" class="form-label">Title</label>
        <input type="text" name="description" id="description" 
            value="{{ old('description', $perk->description ?? '') }}" required 
            class="form-control" />
        @error('description')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    
    
    
    
    
    
    
    
    
    
    <div class="mb-3">
        <label for="amount_required" class="form-label">Minimum Investment</label>
        <input type="number" name="amount_required" id="amount_required" 
            value="{{ old('amount_required', $perk->amount_required ?? '') }}" required 
            class="form-control" />
        @error('amount_required')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

     



    <div class="mb-3">
    <label for="image" class="form-label">Perk Image</label>
    <input type="file" name="image" id="image" {{ isset($perk) ? '' : 'required' }} 
        class="form-control" />
    @error('image')
        <div class="text-danger">{{ $message }}</div>
    @enderror
</div>

@isset($perk->image_url)
    <div class="mb-3">
        <img src="{{ asset($perk->image) }}" alt="Perk image" class="img-fluid" />
    </div>
@endisset
    
      
 
     
     



<!-- Submit Button -->
<div>
    <button type="submit" class="btn btn-primary">
        {{ isset($perk) ? 'Update Perk' : 'Add New Perk' }}
    </button>
</div>
</form>