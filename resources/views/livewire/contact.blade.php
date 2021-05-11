<div class="col-md-6">
    <h4 class="heading-text inline text-center"><span>Get In </span>Touch</h4>
    @if (session()->has('message'))
        <script>
            Swal.fire(
            'Success',
            '{{ session("message") }}',
            'success'
            )
        </script>
    @endif
    <form wire:submit.prevent="submit" class="contact-form">
        <div class="cf-single">
            <h4>Name </h4>
            <div class="row">
                <div class="col-md-12">
                    <input class="@error('name') error @enderror" type="text" name="name" wire:model="name" >
                    @error('name')
                        <span class="errorMessage">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </div>

        <div class="cf-single">
            
            <div class="row">
                <div class="col-md-7">
                    <h4>Email </h4>
                    <input class="@error('email') error @enderror" type="email" name="email" wire:model="email">
                    @error('email')
                        <span class="errorMessage">{{ $message }}</span>
                    @enderror
                </div>

                <div class="col-md-5">
                    <h4>Phone Number </h4>
                    <input class="@error('phoneNumber') error @enderror" type="number" name="phoneNumber" wire:model="phoneNumber">
                    @error('phoneNumber')
                        <span class="errorMessage">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </div>

        <div class="cf-single">
            <h4>Message </h4>
            <div class="row">
                <div class="col-md-12">
                    <textarea class="@error('formMessage') error @enderror" wire:model="formMessage"></textarea>
                    @error('formMessage')
                        <span class="errorMessage">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </div>
        
        <button type="submit"  class="icon-hover" >Submit <img src="images/next-black.svg"> </button>
        <div wire:loading wire:target="submit">
            please wait....
         </div>
    </form>
</div>

<style>
    input.error, textarea.error{
        border: #E91E63 solid 1px;
    }
    .errorMessage{
        color: #E91E63;
    }
</style>
