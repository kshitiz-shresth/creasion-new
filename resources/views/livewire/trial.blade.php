<div>
    <div class="panel panel-bordered">
        <form  wire:submit.prevent="submit" class="form-edit-add" enctype="multipart/form-data">
            <div class="panel-body">
                <!-- Banner Section -->
                <div class="form-group h4 col-md-12">
                    <strong>Banner Section</strong>
                </div>
                @foreach ($title as $item)
                <div class="form-group  col-md-12 ">
                    <label class="control-label" for="name">Title</label>
                    <input type="text" class="form-control" wire:model.defer="title[]">
                </div>
                @endforeach
                <div class="form-group  col-md-12 ">
                <button class="btn btn-success" wire:click.prevent="hello">Add</button>
                </div>
            </div>
            <div class="container panel-footer">
                <button type="submit" class="btn btn-primary save" >Save</button>
            </div>
        </form>
        
    </div>
</div>


