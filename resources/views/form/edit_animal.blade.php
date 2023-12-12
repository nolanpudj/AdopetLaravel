@extends('template')

@section('content')
    <main class="form-adopet">
        {{-- <img src = "Assets/personal-data.svg" alt = "Logo"> --}}
            <div class="form-inputs">
                {{-- <form name="FormAdopet" class="form-data" id="FormAdopet" action="./form-address-data"> --}}
                <form name="form-add-animal" class="form-add-animal" action="{{route('edit-animal-validate',['id' => $pet->id])}}" method="POST" enctype="multipart/form-data" >
                    @csrf
                    <h1>Edit Animal</h1>
                    <p>Please input the new data/information within this form</p><br>
                    <!-- Animal Name -->
                    <label for = "animal-name"> Animal Name*</label>
                    <input type="text" class="input-field" id="animal-name" name="petName" value="{{$pet->petName}}"><br>
                    
                    <!-- Animal Type -->
                    <label for = "animal-type"> Animal Type*</label><br>
                    <input type="text" class="input-field" id="animal-type" name="petType" value="{{$pet->petType}}"><br>

                    <!-- Animal Image -->
                    <label for="animal-image"> Animal Image </label>
                    <input type="text" placeholder="MASUKIN NAMA IMAGE" name="image" value="Dog_Rectangle 7-1.png">

                    {{-- <!-- Animal breed -->
                    <label for = "animal-breed"> Animal Breed*</label>
                    <input type = "text" class="input-field" id="place-of-birth" name="place-of-birth"> --}}
                    
                    {{-- <!-- Animal Radio Button -->
                    <label for="gender">Gender:&nbsp</label><br>
                    <input type="radio" id="male" name="gender" value="male" class="gender-male">
                    <label for="male" class="gender-label-male">Male</label>
                    <input type="radio" id="female" name="gender" value="female"class="gender-female">
                    <label for="female">Female</label><br>
                    
                    <!-- Animal status Radio Button -->
                    <label for="status">Animal status:&nbsp</label><br>
                    <input type="radio" id="vaccinated" name="status" value="vaccinated" class="status-vaccinated">
                    <label for="vaccinated" class="status-label-vaccinated">vaccinated</label>
                    <input type="radio" id="not-vaccinated" name="status" value="not-vaccinated"class="status-not-vaccinated">
                    <label for="not-vaccinated">not-vaccinated</label><br> --}}


                    <div id="model-input-container"></div>
                    <!-- Submit Button -->
                    <input type="submit" class="next-button">
                    @if(session('success'))
                        <div class="alert alert-success auto-dismiss" data-dismiss-timeout="3000">
                            {{ session('success') }}
                      
                        </div>
                        
                    @endif
                    {{-- <div class="alert alert-success auto-dismiss" data-dismiss-timeout="3000">
                        {{ session('success') }}
                  
                    </div> --}}
                </form>
            </div>
    </main>
<script src="/js/scripts.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
    // Find all elements with the auto-dismiss class
    var autoDismissElements = document.querySelectorAll('.auto-dismiss');

    // Loop through each element and set a timeout to remove it
    autoDismissElements.forEach(function (element) {
        var timeout = element.dataset.dismissTimeout || 5000; // Default to 5000 milliseconds if not specified
        setTimeout(function () {
            element.remove(); // Remove the element from the DOM
        }, timeout);
    });
    });
</script>
</html>
@endsection