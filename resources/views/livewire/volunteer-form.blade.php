<div>
    @if (session()->has('message'))
        <script>
            Swal.fire(
            'Success',
            '{{ session("message") }}',
            'success'
            )
        </script>
    @endif
    <form wire:submit.prevent="submit()">
        <section class="volunteerr-form ptb-50">
            <div class="container">
                <p>( Form for {{ $formData['formType'] }} )</p>
                <h5>Personal Information</h5>

                <div class="row">
                    <div class="col-md-4">
                        <h6>First Name</h6>
                        <input type="text" required wire:model="formData.firstName" >
                    </div>

                    <div class="col-md-4">
                        <h6>Middle Name</h6>
                        <input type="text" wire:model="formData.middleName" >
                    </div>

                    <div class="col-md-4">
                        <h6>Last Name</h6>
                        <input type="text" required wire:model="formData.lastName" >
                    </div>

                    <div class="col-md-4">
                        <h6>Birth Date</h6>
                        <input type="date" required id="birthday" wire:model="formData.birthday">
                    </div>

                    <div class="col-md-4">
                        <h6>Gender</h6>


                        <div class="radio-choose">
                            <input type="radio"  name="gender" wire:model="formData.gender" value="M"><label for="male">Male</label>                 
                            <input type="radio"  name="gender" wire:model="formData.gender" value="F"><label for="female">Female</label>
                        </div>



                    </div>

                    <div class="col-md-4">
                        <h6>Nationality</h6>
                        <input type="text" required wire:model="formData.nationality">
                    </div>

                    <div class="col-md-4">
                        <h6>Contact-Number</h6>
                        <input type="number" required wire:model="formData.contactNumber">
                    </div>

                    <div class="col-md-4">
                        <h6>Address</h6>
                        <input type="text" required wire:model="formData.address">
                    </div>

                    <div class="col-md-4">
                        <h6>Email</h6>
                        <input type="email" required wire:model="formData.email">
                    </div>

                    <div class="col-md-4">
                        <h6>Education</h6>
                        <input type="text" required wire:model="formData.education">
                    </div>

                    <div class="col-md-4">
                        <h6>Occupation</h6>
                        <input type="text" required wire:model="formData.occupation">
                    </div>

                    <div class="col-md-4">
                        <h6>Institution</h6>
                        <input type="text" required wire:model="formData.institution">
                    </div>

                    <div class="col-md-12">
                        <h6>Reasons you want to volunteer with us</h6>
                        <textarea  required wire:model="formData.reasons"></textarea>
                    </div>


                </div>
            </div>
        </section>

        <section class="volunteerr-form ptb-50">
            <div class="container">
                <h5>Availability & Preferences</h5>

                <div class="row">
                

                    <div class="col-md-12">
                        <h6>Availability</h6>
                        <div class="avai-checkbox">
                            <input type="checkbox" wire:model="formData.days"  value="Sunday">
                            <label for="v1"> Sunday</label>
                            <input type="checkbox" wire:model="formData.days"  value="Monday">
                            <label for=""> Monday</label>
                            <input type="checkbox" wire:model="formData.days"  value="Tuesday">
                            <label for=""> Tuesday</label>
                            <input type="checkbox" wire:model="formData.days"  value="Wednesday">
                            <label for=""> Wednesday</label>
                            <input type="checkbox" wire:model="formData.days"  value="Thursday">
                            <label for=""> Thursday</label>
                            <input type="checkbox" wire:model="formData.days"  value="Friday">
                            <label for=""> Friday</label>
                            <input type="checkbox" wire:model="formData.days"  value="Saturday">
                            <label for=""> Saturday</label>

                        </div>
                    </div>

                    <div class="col-md-12">
                        <button type="submit"  class="icon-hover">Submit <img src="images/next-black.svg"> </button>
                        <div wire:loading wire:target="submit">
                            please wait....
                        </div>
                    </div>

                </div>
                
            </div>
        </section>
        
    </form>

</div>
