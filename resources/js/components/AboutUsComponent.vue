<template>
    <div class="panel panel-bordered">
        <form v-on:submit.prevent @keydown.enter.prevent role="form" class="form-edit-add" enctype="multipart/form-data">
            
            <div class="panel-body">
                <div class="row container mr-0">
                    <div class="form-group col-md-6">
                        <label for="name" class="control-label">
                            Cover <small>( goto media > aboutus and copy image-name & paste here )</small>
                        </label>
                        <input class="form-control" type="text" v-model="data.aboutUsData.cover">
                        <div v-if="data.aboutUsData.cover" data-field-name="image">
                            <!-- <a href="#" class="voyager-x" style="position:absolute;"></a> -->
                            <img :src="'/storage/aboutus/'+data.aboutUsData.cover" style="max-width:200px; height:auto; clear:both; display:block; padding:2px; border:1px solid #ddd; margin-bottom:10px;" @error="showDummyImage">
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="name" class="control-label">
                            Short Info
                        </label>
                        <ckeditor :editor="editor" v-model="data.aboutUsData.shortInfo" :config="editorConfig"></ckeditor>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="name" class="control-label">
                            Description
                        </label>
                        <ckeditor :editor="editor" v-model="data.aboutUsData.description" :config="editorConfig"></ckeditor>
                    </div>
                    
                </div>

                <!-- Our Approach -->
                <div class="form-group h4 col-md-12">
                    <strong>Our Approach</strong>
                </div>
                <div class="container-fluid">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr class="d-flex">
                                <th>SN</th>
                                <th>Icon</th>
                                <th class="col-md-2">Title</th>
                                <th>Description</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody is="draggable" tag="tbody" v-model="data.aboutUsData.ourApproach">
                            <tr v-for="(ourApproachItem,ourApproachIndex) in data.aboutUsData.ourApproach" :key="ourApproachIndex">
                                <td>{{ ourApproachIndex+1 }}</td>
                                <td>
                                    <input class="form-control" type="text" v-model="ourApproachItem.icon">
                                    <img v-if="ourApproachItem.icon" :src="`/storage/icons/${ourApproachItem.icon}`" @error="showDummyImage" style="max-width:105px; height:auto; clear:both; padding:2px; border:1px solid #ddd; margin-bottom:10px;">
                                </td>
                                <td><input class="form-control" type="text" v-model="ourApproachItem.title"></td>
                                <td><textarea v-model="ourApproachItem.description" rows="6" cols="47" class="form-control"></textarea></td>
                                <td>
                                    <button type="button" @click="deleteOurApproach(ourApproachIndex)" class="btn btn-danger"><span class="voyager-trash"></span></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    
                </div>
                <div class="form-group col-md-12">
                        <a href="#" class="btn btn-default" v-on:click.prevent="addOurApproach()">Add</a>
                </div>

                <!-- Our Values -->
                <div class="form-group h4 col-md-12">
                    <strong>Our Values</strong>
                </div>
                <div class="container-fluid">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr class="d-flex">
                                <th>SN</th>
                                <th>Icon</th>
                                <th class="col-md-2">Title</th>
                                <th>Description</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody is="draggable" tag="tbody" v-model="data.aboutUsData.ourValues">
                            <tr v-for="(ourValuesItem,ourValuesIndex) in data.aboutUsData.ourValues" :key="ourValuesIndex">
                                <td>{{ ourValuesIndex+1 }}</td>
                                <td>
                                    <input class="form-control" type="text" v-model="ourValuesItem.icon">
                                    <img v-if="ourValuesItem.icon" :src="`/storage/icons/${ourValuesItem.icon}`" @error="showDummyImage" style="max-width:105px; height:auto; clear:both; padding:2px; border:1px solid #ddd; margin-bottom:10px;">
                                </td>
                                <td><input class="form-control" type="text" v-model="ourValuesItem.title"></td>
                                <td><textarea v-model="ourValuesItem.description" rows="6" cols="47" class="form-control"></textarea></td>
                                <td>
                                    <button type="button" @click="deleteOurValues(ourValuesIndex)" class="btn btn-danger"><span class="voyager-trash"></span></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    
                </div>
                <div class="form-group col-md-12">
                        <a href="#" class="btn btn-default" v-on:click.prevent="addOurValues()">Add</a>
                </div>

                <!-- President -->
                <div class="form-group h4 col-md-12">
                    <strong>President</strong>
                </div>
                <div class="row container mr-0">
                    <div class="form-group col-md-6">
                        <label for="name" class="control-label">
                            Cover
                        </label>
                        <input class="form-control" type="text" v-model="data.aboutUsData.president.cover">
                        <div v-if="data.aboutUsData.president.cover" data-field-name="image">
                            <!-- <a href="#" class="voyager-x" style="position:absolute;"></a> -->
                            <img :src="'/storage/aboutus/'+data.aboutUsData.president.cover" style="max-width:200px; height:auto; clear:both; display:block; padding:2px; border:1px solid #ddd; margin-bottom:10px;" @error="showDummyImage">
                        </div>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="name" class="control-label">
                            Name
                        </label>
                        <input class="form-control"  type="text" v-model="data.aboutUsData.president.name">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="name" class="control-label">
                            Designation
                        </label>
                        <input class="form-control"  type="text" v-model="data.aboutUsData.president.designation">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="name" class="control-label">
                            Description
                        </label>
                        <ckeditor :editor="editor" v-model="data.aboutUsData.president.description" :config="editorConfig"></ckeditor>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="name" class="control-label">
                            Button Title
                        </label>
                        <input class="form-control"  type="text" v-model="data.aboutUsData.president.buttonTitle">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="name" class="control-label">
                            Button Link
                        </label>
                        <input class="form-control"  type="text" v-model="data.aboutUsData.president.buttonLink">
                    </div>
                    
                </div>

            </div>
            <div class="container panel-footer">
                <button @click="onSubmit" class="btn btn-primary save" :disabled = '!submitClickable'>Save</button>
            </div>
        </form>
        
    </div>
</template>

<script>
// for CK editor
import draggable from 'vuedraggable'
import ClassicEditor from '@ckeditor/ckeditor5-build-classic';
import axios from 'axios';

    export default {
        components: {
            draggable,
        },
        props: [
            'page'
        ],
        data() {
            return {
                editor: ClassicEditor,
                editorConfig: {
                    // The configuration of the editor.
                },
                data : {
                    aboutUsData : {
                        title : '',
                        cover : '',
                        shortInfo : '',
                        description : '',
                        ourApproach : [
                            {
                                icon:'',
                                title:'',
                                description:''
                            }
                        ],
                        ourValues: [
                            {
                                icon:'',
                                title:'',
                                description:''
                            }
                        ],
                        president: {
                            cover:'',
                            name:'',
                            designation:'',
                            description:'',
                            buttonTitle:'',
                            buttonLink:''
                        }

                    }
                },
                submitClickable:true
                

            }
        },
        async mounted(){
            this.fetchData();
        },
        methods: {
            fetchData(){
                var myPointer = this;
                axios.get('/admin/aboutus/fetchData').then(
                    function(response){
                        myPointer.data.aboutUsData = response.data;
                    }
                ).catch(function(error){
                    console.log(error)
                });
            },
            showDummyImage(e){
                e.target.src="/admin-images/no-image-found.jpg";
            },
            
            onSubmit(){
                var myPointer = this;
                this.submitClickable = false;
                axios.post('/admin/aboutus',this.data).then(
                    function (response){
                            toastr.success('Success');
                            myPointer.submitClickable = true;
                        }
                    ).catch(function (error){
                        // myPointer.submitClickable = true;
                        toastr.error(error);
                    })  
            },
            
            // add our Values
            addOurValues(){
                this.data.aboutUsData.ourValues.push({
                        icon:'',
                        title:'',
                        description:'',
                    });
            },
            deleteOurValues(counterIndex){
                this.data.aboutUsData.ourValues.splice(counterIndex,1);
            },

            // add ourApproach
            addOurApproach(){
                this.data.aboutUsData.ourApproach.push({
                        icon:'',
                        title:'',
                        description:'',
                    });
            },
            deleteOurApproach(counterIndex){
                var myData = 'aboutUsData';
                this.data.aboutUsData.ourApproach.splice(counterIndex,1);
            }

        }
    }
</script>
