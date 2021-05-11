<template>
    <div class="panel panel-bordered">
        <form v-on:submit.prevent @keydown.enter.prevent role="form" class="form-edit-add" enctype="multipart/form-data">
            
            <div class="panel-body">
                <div class="row container mr-0">
                    <div class="form-group col-md-6">
                        <label for="name" class="control-label">
                        Title
                        </label>
                        <input class="form-control" type="text" v-on:keyup="slugify" v-model="subProjectData.title">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="name" class="control-label">
                        Slug
                        </label>
                        <input class="form-control" type="text" v-model="subProjectData.slug">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="name" class="control-label">
                            Title Image
                        </label>
                        <input class="form-control" v-model="subProjectData.titleImage">
                        <div v-if="subProjectData.titleImage" data-field-name="image">
                            <!-- <a href="#" class="voyager-x" style="position:absolute;"></a> -->
                            <img :src="'/storage/sub-projects/title-images/'+subProjectData.titleImage" style="max-width:200px; height:auto; clear:both; display:block; padding:2px; border:1px solid #ddd; margin-bottom:10px;" @error="showDummyImage">
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="name" class="control-label">
                            Short Description
                        </label>
                        <ckeditor :editor="editor" v-model="subProjectData.shortDescription" :config="editorConfig"></ckeditor>
                    </div>
                </div>

                <!-- Counter Section -->
                <div class="form-group h4 col-md-12">
                    <strong>Counter Section</strong>
                </div>
                <div class="container-fluid">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr class="d-flex">
                                <th>SN</th>
                                <th class="col-md-2">Title</th>
                                <th>Count</th>
                                <th class="col-md-1">Subscript</th>
                                <th>Icon</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody is="draggable" tag="tbody" v-model="subProjectData.counterSection">
                            <tr v-for="(counterItem,counterIndex) in subProjectData.counterSection" :key="counterIndex">
                                <td>{{ counterIndex+1 }}</td>
                                <td><input class="form-control" type="text" v-model="counterItem.title"></td>
                                <td><input class="form-control" type="text" v-model="counterItem.count"></td>
                                <td><input class="form-control" type="text" v-model="counterItem.subscript"></td>
                                <td>
                                    <input class="form-control" type="text" v-model="counterItem.icon">
                                    <img v-if="counterItem.icon" :src="`/storage/icons/${counterItem.icon}`" @error="showDummyImage" style="max-width:105px; height:auto; clear:both; padding:2px; border:1px solid #ddd; margin-bottom:10px;">
                                </td>
                                <td>
                                    <button type="button" @click="deleteCounter(counterIndex)" class="btn btn-danger"><span class="voyager-trash"></span></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    
                </div>
                <div class="form-group col-md-12">
                        <a href="#" class="btn btn-default" v-on:click.prevent="addCounter()">Add</a>
                </div>
                <!-- End of Counter Section -->

                <!-- Description Section -->
                <div class="form-group h4 col-md-12">
                    <strong>Description Section</strong>
                </div>
                
                <div class="form-group" v-for="(descriptionItem,descriptionIndex) in subProjectData.description" :key="descriptionIndex">
                    <div class="form-group  col-md-5 ">
                        <label class="control-label" for="name">Title</label>
                        <input class="form-control" v-model="descriptionItem.title" :config="editorConfig">

                    </div>
                    <div class="form-group col-md-6">
                        <label class="control-label" for="name">Body</label>
                        <ckeditor :editor="editor" v-model="descriptionItem.body" :config="editorConfig"></ckeditor>
                    </div>

                    <div class="form-group col-md-1">
                        <label :for="'delete'+descriptionIndex">Delete</label>
                        <button type="button" @click="deleteDescription(descriptionIndex)" :id="'delete'+descriptionIndex" class="btn btn-danger"><span class="voyager-trash"></span></button>
                    </div>
                </div>

                <div class="form-group col-md-12">
                    <a href="#" class="btn btn-default" v-on:click.prevent="addDescription()">Add</a>
                </div> 
                <!--  End of Description Section-->

                <!-- Flag Section -->
                <div class="form-group h4 col-md-12">
                    <strong>Flag Section</strong>
                </div>
                <div class="form-group col-md-12">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr class="d-flex">
                                <th>SN</th>    
                                <th>Country Name</th>
                                <th>Image</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody is="draggable"  tag="tbody" v-model="subProjectData.flagSection">
                            <tr v-for="(flagItem, flagIndex) in subProjectData.flagSection" :key="flagIndex">
                                <td>{{ flagIndex + 1 }}</td>
                                <td><input class="form-control" v-model="subProjectData.flagSection[flagIndex]"></td>
                                <td><img v-if="subProjectData.flagSection[flagIndex]" :src="`/storage/sub-projects/countries/${subProjectData.flagSection[flagIndex]}`" @error="showDummyImage" style="max-width:105px; height:auto; clear:both; padding:2px; border:1px solid #ddd; margin-bottom:10px;"></td>
                                <td>
                                    <button type="button" @click="deleteFlag(flagIndex)" class="btn btn-danger"><span class="voyager-trash"></span></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="form-group col-md-12">
                    <a href="#" class="btn btn-default" v-on:click.prevent="addFlag()">Add</a>
                </div>
                <!-- End of Flag Section -->

                <!-- Map Section -->
                <div class="form-group h4 col-md-12">
                    <strong>Map Section</strong>
                </div>
                <div class="form-group col-md-12">
                    <label class="control-label" for="name">Map Code</label>
                    <textarea class="form-control" v-model="subProjectData.mapSection.mapCode" id="" cols="30" rows="10"></textarea>
                </div>
                <div class="form-group col-md-12">
                    <label class="control-label" for="name">Districts</label>
                    <input class="form-control" v-model="subProjectData.mapSection.districtName" id="" >
                </div>
                <!-- End of Map Section -->

                <!-- Carousel Section -->
                <div class="form-group h4 col-md-12">
                    <strong>Carousel Section</strong>
                </div>
                <div class="form-group col-md-12">

                <div is="draggable" v-model="subProjectData.carouselSection">
                    <div v-for="(carouselItem,carouselIndex) in subProjectData.carouselSection" :key="carouselIndex" class="carouselSection">
                        <div class="form-group  col-md-11" style="position:relative">
                            <label class="control-label" for="name">Title</label>
                            <input class="form-control" v-model="carouselItem.topLevelTitle" :config="editorConfig">
                        </div> 
                           <span class="voyager-trash delete"  @click="deleteCarouselSection(carouselIndex)" ></span>
                        <div class="container-fluid">
                            <table class="table table-striped table-bordered">
                                <thead>
                                    <tr class="d-flex">
                                        <th>SN</th>
                                        <th class="col-md-2">Title</th>
                                        <th>Body</th>
                                        <th>Image</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody is="draggable" tag="tbody" v-model="carouselItem.topLevelBody">
                                    <tr v-for="(topLevelBodyItem,topLevelBodyIndex) in carouselItem.topLevelBody" :key="topLevelBodyIndex">
                                        <td>{{ topLevelBodyIndex + 1 }}</td>
                                        <td><input class="form-control" type="text" v-model="topLevelBodyItem.insideTitle"></td>
                                        <td>
                                        <editor api-key="e0sfwtge5hj5521pgonmxd11jv08drd7c8v8jwex0xjj35zu" 
                                            :init="{
                                                    height: 150,
                                                    menubar: false,
                                                    plugins: 'fulscreen',
                                                    toolbar:
                                                    'h2 h3 bold  italic underline | styleselect alignleft aligncenter alignright fullscreen'
                                                }"
                                            v-model="topLevelBodyItem.insideBody" />
                                        </td>
                                        <td>
                                            <input class="form-control" type="text" v-model="topLevelBodyItem.image">
                                            <img v-if="topLevelBodyItem.image" :src="`/storage/sub-projects/carousel-images/${topLevelBodyItem.image}`" @error="showDummyImage" style="max-width:105px; height:auto; clear:both; padding:2px; border:1px solid #ddd; margin-bottom:10px;">
                                        </td>
                                        <td>
                                            <button type="button" @click="deleteTopLevelBody(topLevelBodyIndex,carouselIndex)" class="btn btn-danger"><span class="voyager-trash"></span></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <a href="#" class="btn btn-default" v-on:click.prevent="addTopLevelBody(carouselIndex)">Add</a>
                        </div>
                    </div>
                </div>
                    <a href="#" class="btn btn-success" v-on:click.prevent="addCarouselSection()">Add Section</a>
                </div>



                <!-- End of Counter Section -->
                

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
import Editor from '@tinymce/tinymce-vue';

import axios from 'axios';

    export default {
        components: {
            draggable,
            'editor': Editor
        },
        props: [
            'edit',
            'content'
        ],
        data() {
            return {
                editor: ClassicEditor,
                editorConfig: {
                    // The configuration of the editor.
                },
                subProjectData : {
                    id:'',
                    edit:0,
                    title:'',
                    slug:'',
                    titleImage:'',
                    shortDescription:'',
                    counterSection:[{
                        title:'',
                        icon:'',
                        count:'',
                        subscript:'',
                    }],
                    description: [
                        {
                            title:'',
                            body:'',
                            image:[
                                {
                                    src: ''
                                }
                            ]
                        }
                    ],
                    mapSection: {
                        mapCode: '',
                        districtName: ''
                    },
                    flagSection: [
                        ''
                    ],
                    carouselSection : [
                        {
                            topLevelTitle:'',
                            topLevelBody: [
                                {
                                    insideTitle:'',
                                    insideBody:'',
                                    image:''
                                }
                            ]
                        }
                    ]
                },
                submitClickable:true
                

            }
        },
        created(){
            if(this.edit){
            this.subProjectData = JSON.parse(this.content.data);
            this.subProjectData.id = this.content.id;
            this.subProjectData.edit = 1;
            }
        },
        methods: {
            slugify (text, ampersand = 'and') {
                const a = 'àáäâèéëêìíïîòóöôùúüûñçßÿỳýœæŕśńṕẃǵǹḿǘẍźḧ'
                const b = 'aaaaeeeeiiiioooouuuuncsyyyoarsnpwgnmuxzh'
                const p = new RegExp(a.split('').join('|'), 'g')

                this.subProjectData.slug =  this.subProjectData.title.toString().toLowerCase()
                    .replace(/[\s_]+/g, '-')
                    .replace(p, c =>
                    b.charAt(a.indexOf(c)))
                    .replace(/&/g, `-${ampersand}-`)
                    .replace(/[^\w-]+/g, '')
                    .replace(/--+/g, '-')
                    .replace(/^-+|-+$/g, '')
            }, 
            fetchData(){
                var myPointer = this;
                axios.get('/admin/fetchData').then(
                    function(response){
                        myPointer.homeData = response.data;
                    }
                ).catch(function(error){
                    console.log(error)
                });
            },
            showDummyImage(e){
                e.target.src="/admin-images/no-image-found.jpg";
            },
             youtube_parser(url){
                var regExp = /^.*((youtu.be\/)|(v\/)|(\/u\/\w\/)|(embed\/)|(watch\?))\??v?=?([^#&?]*).*/;
                var match = url.match(regExp);
                return (match&&match[7].length==11)? match[7] : false;
            },
            onSubmit(){
                var myPointer = this;
                this.submitClickable = false;
                axios.post('/admin/subprojects',this.subProjectData).then(
                    function (response){
                            toastr.success(`Form ${myPointer.edit ? 'Updated' : 'Created'}`);
                            console.log(response);

                            if(response.data=='done'){
                            window.location.replace("/admin/sub-projects");
                            console.log(response);
                            }
                            myPointer.submitClickable = true;
                        }
                    ).catch(function (error){
                        // myPointer.submitClickable = true;
                        toastr.error(error);
                    })  
            },
            // add Description
            addDescription(){
                this.subProjectData.description.push({
                        title:'',
                        body:''
                })
            },
            // delete Description
            deleteDescription(descriptionIndex){
                this.subProjectData.description.splice(descriptionIndex,1);
            },

            // add CarouselSection
            addCarouselSection(){
                this.subProjectData.carouselSection.push({
                            topLevelTitle:'',
                            topLevelBody: [
                                {
                                    insideTitle:'',
                                    insideBody:'',
                                    image:''
                                }
                            ]
                        })
            },
            // delete Carousel Section
            deleteCarouselSection(carouselIndex){
                this.subProjectData.carouselSection.splice(carouselIndex,1);
            },

            addTopLevelBody(carouselIndex){
                console.log('haha')
                this.subProjectData.carouselSection[carouselIndex].topLevelBody.push(
                    {
                        insideTitle:'',
                        insideBody:'',
                        image:''
                    }
                );
            },

            deleteTopLevelBody(topLevelBodyIndex, carouselIndex){
                this.subProjectData.carouselSection[carouselIndex].topLevelBody.splice(topLevelBodyIndex,1);

            },

            // add CounterSection
            addCounter(){
                this.subProjectData.counterSection.push({
                        title:'',
                        icon:'',
                        count:'',
                        subscript:'',
                    });
            },
            deleteCounter(counterIndex){
                this.subProjectData.counterSection.splice(counterIndex,1);
            },

            // add flagSection
            addFlag(){
                this.subProjectData.flagSection.push('');
            },
            deleteFlag(flagIndex){
                this.subProjectData.flagSection.splice(flagIndex,1);

            }

        }
    }
</script>


<style>
    .carouselSection {
    border: 1.5px solid #888888ab;
    border-radius: 10px;
    padding: 10px;
    margin-bottom: 10px;
    position: relative;
    }
    .delete {
    position: absolute;
    right: 9px;
    top: 5px;
    cursor: pointer;
    }
</style>