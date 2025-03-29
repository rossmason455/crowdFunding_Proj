@props([
'name',
'email',
'role',
'image'
])

<div class="container mt-4">
    <div class="card shadow-lg">
        <!-- Image -->
        <img src="{{ asset($image) }}" alt="{{ $title }}" class="card-img-top img-fluid" style="height: 400px; object-fit: cover;">

        <div class="card-body">
    
        
            <h1 class="card-title text-primary">{{ $name }}</h1>
          

       
            
            <h2 class="h5 mt-3">Email</h2>
            <p class="card-text">{{ $email }}</p>


            
            <h2 class="h5 mt-3">Role</h2>
            <p class="card-text">{{ $role }}</p>

            
        
       
        </div>
    </div>
</div>
