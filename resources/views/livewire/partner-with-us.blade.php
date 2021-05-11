    <div class="container">
        <h5>Information</h5>
            @if (session()->has('message'))
                <script>
                    Swal.fire(
                    'Success',
                    '{{ session("message") }}',
                    'success'
                    )
                </script>
            @endif
        <form wire:submit.prevent="submit" >
        <div class="row">
            <div class="col-md-4">
                <h6>First Name</h6>
                <input class="@error('firstName') error @enderror" type="text" wire:model="firstName" >
                @error('firstName')
                    <span class="errorMessage">{{ $message }}</span>
                @enderror            
            </div>

            <div class="col-md-4">
                <h6>Middle Name</h6>
                <input class="@error('middleName') error @enderror" type="text" wire:model="middleName" >
                @error('middleName')
                    <span class="errorMessage">{{ $message }}</span>
                @enderror    
            </div>

            <div class="col-md-4">
                <h6>Last Name</h6>
                <input class="@error('lastName') error @enderror" type="text" wire:model="lastName" >
                @error('lastName')
                    <span class="errorMessage">{{ $message }}</span>
                @enderror
            </div>

            <div class="col-md-8">
                <h6>Institution Name</h6>
                <input class="@error('institutionName') error @enderror" type="text" wire:model="institutionName">
                @error('institutionName')
                    <span class="errorMessage">{{ $message }}</span>
                @enderror            
            </div>

            <div class="col-md-4">
                <h6>Social Media/ Website link</h6>
                <input class="@error('socialMediaOrWebsiteLink') error @enderror" type="text" wire:model="socialMediaOrWebsiteLink">
                @error('socialMediaOrWebsiteLink')
                    <span class="errorMessage">{{ $message }}</span>
                @enderror            
            </div>  

            <div class="col-md-4">
                <h6>Contact-Number</h6>
                <input class="@error('contactNumber') error @enderror" type="number" wire:model="contactNumber">
                @error('contactNumber')
                    <span class="errorMessage">{{ $message }}</span>
                @enderror            
            </div>

            <div class="col-md-4">
                <h6>Address</h6>
                <input class="@error('address') error @enderror" type="text" wire:model="address">
                @error('address')
                    <span class="errorMessage">{{ $message }}</span>
                @enderror            
            </div>

            <div class="col-md-4">
                <h6>Email</h6>
                <input class="@error('email') error @enderror" type="text" wire:model="email">
                @error('email')
                    <span class="errorMessage">{{ $message }}</span>
                @enderror            
            </div>

            <div class="col-md-6">
                <h6>Brief Description about the Institution:</h6>
                <textarea class="@error('briefDescription') error @enderror" wire:model="briefDescription"></textarea>
                @error('briefDescription')
                    <span class="errorMessage">{{ $message }}</span>
                @enderror            
            </div>
            
            <div class="col-md-6">
                <h6>Reasons you want to partner with us</h6>
                <textarea class="@error('reasons') error @enderror" wire:model="reasons"></textarea>
                @error('reasons')
                    <span class="errorMessage">{{ $message }}</span>
                @enderror            
            </div>

            <div class="col-md-12">
                <button type="submit"  class="icon-hover">Submit <img src="images/next-black.svg"> </button>
                <div wire:loading wire:target="submit">
                    please wait....
                </div>
            </div>


        </div>
        </form>
    </div>


<style>
    input.error, textarea.error{
        border: #E91E63 solid 1px !important;
    }
    .errorMessage{
        color: #E91E63;
    }
</style>