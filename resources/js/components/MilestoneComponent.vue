<template>
    <div>
        <div class="container">
        <label>
        <input type="checkbox" v-model="showHeading"> <strong>Edit Heading Details</strong></label>
        </div>
        <div v-if="showHeading">
            <div class="page-content browse container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-bordered">
                            <div class="panel-body">
                            <div class="form-group  col-md-4 ">
                                    <label class="control-label" for="name">Title</label>
                                    <editor api-key="e0sfwtge5hj5521pgonmxd11jv08drd7c8v8jwex0xjj35zu" 
                                    :init="{
                                            height: 150,
                                            menubar: false,
                                            plugins: 'fulscreen',
                                            toolbar:
                                            'h2 h3 bold  italic underline | styleselect alignleft aligncenter alignright fullscreen'
                                        }"
                                    v-model="data.title" />
                            </div>
                            <div class="form-group  col-md-7 ">
                                    <label class="control-label" for="name">Description</label>
                                    <editor 
                                    
                                    api-key="e0sfwtge5hj5521pgonmxd11jv08drd7c8v8jwex0xjj35zu"
                                    :init="{
                                            height: 150,
                                            menubar: false,
                                            plugins: [
                                            ],
                                            toolbar:
                                            'h2 h3 bold  italic underline | styleselect alignleft aligncenter alignright'
                                        }"
                                    v-model="data.description" />
                            </div>
                            <div class="form-group  col-md-1 ">
                                <label class="control-label" for="name"></label>

                                <button @click="onSubmit" class="btn btn-primary save" :disabled = '!submitClickable'>Save</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         </div>

    </div>
</div>
</template>


<script>
// for CK editor
  import Editor from '@tinymce/tinymce-vue';

// for Axios
import axios from 'axios';

export default {
        
        data(){
            return {
                data:{
                    title:'',
                    description:'',
                },
                showHeading: true,
                submitClickable: true,
            }
        },
        components:{
            'editor': Editor
        },
        mounted(){
            this.fetchMilestoneData(); 
            this.showHeading = false;    
        },
        methods: {
            onSubmit(){
                this.submitClickable = false;
                var myPointer = this;
                axios.post('/admin/milestone',{data:this.data}).then(
                    function(response){
                        myPointer.submitClickable = true;
                        toastr.success('Successfully Updated');

                    }
                ).catch(
                    function(error){
                        console.log(error);
                    }
                )
            },
            fetchMilestoneData(){
                var myPointer = this;
                axios.get('/admin/milestone').then(
                    function(response){
                        myPointer.data = JSON.parse(response.data.data);                 
                    }
                ).catch(
                    function(error){
                        console.log(error);
                    }
                )
            }
        }


}
</script>