<template>
    <div class="panel panel-bordered">
        <form v-on:submit.prevent @keydown.enter.prevent role="form" class="form-edit-add" enctype="multipart/form-data">
            
            <div class="panel-body">
                <!-- Banner Section -->
                <div class="form-group h4 col-md-12">
                    <strong>Banner Section</strong>
                </div>
                <div class="row container mr-0">
                <div class="form-group col-md-6">
                    <label for="name" class="control-label">
                        Banner Image <small>( goto media > homepage and copy image-name & paste here )</small>
                    </label>
                    <input class="form-control" type="text" v-model="homeData.homePageSection.bannerImage">
                    <div v-if="homeData.homePageSection.bannerImage" data-field-name="image">
                        <!-- <a href="#" class="voyager-x" style="position:absolute;"></a> -->
                        <img :src="'/storage/homepage/'+homeData.homePageSection.bannerImage" style="max-width:200px; height:auto; clear:both; display:block; padding:2px; border:1px solid #ddd; margin-bottom:10px;" @error="showDummyImage">
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label for="name" class="control-label">
                        Banner Title
                    </label>
                    <ckeditor :editor="editor" v-model="homeData.homePageSection.bannerTitle" :config="editorConfig"></ckeditor>
                </div>
                </div>
                <div class="row container mr-0">
                    <div class="form-group col-md-6">
                        <label for="name" class="control-label">
                            Button Title
                        </label>
                        <input  class="form-control" v-model="homeData.homePageSection.bannerButton">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="name" class="control-label">
                            Button URL
                        </label>
                        <input  class="form-control" v-model="homeData.homePageSection.bannerButtonUrl">
                    </div>
                </div>

                <!-- About Section -->
                <div class="form-group h4 col-md-12">
                    <strong>About Section</strong>
                </div>
                <div class="row container mr-0">
                    <div class="form-group col-md-12">
                            <label for="name" class="control-label">
                                Title
                            </label>
                            <ckeditor :editor="editor" v-model="homeData.aboutSection.title" :config="editorConfig"></ckeditor>
                    </div>
                    <div class="form-group col-md-12">
                            <label for="name" class="control-label">
                                Body
                            </label>
                            <ckeditor :editor="editor" v-model="homeData.aboutSection.body" :config="editorConfig"></ckeditor>
                    </div>
                </div>
                <div class="row container mr-0">
                    <div class="form-group col-md-4">
                        <label for="name" class="control-label">
                            Top Image
                        </label>
                        <input  class="form-control" v-model="homeData.aboutSection.topImage">
                        <img v-if="homeData.aboutSection.topImage" :src="'/storage/homepage/'+homeData.aboutSection.topImage" style="max-width:200px; height:auto; clear:both; display:block; padding:2px; border:1px solid #ddd; margin-bottom:10px;" @error="showDummyImage">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="name" class="control-label">
                            Middle Image
                        </label>
                        <input  class="form-control" v-model="homeData.aboutSection.middleImage">
                        <img v-if="homeData.aboutSection.middleImage" :src="'/storage/homepage/'+homeData.aboutSection.middleImage" style="max-width:200px; height:auto; clear:both; display:block; padding:2px; border:1px solid #ddd; margin-bottom:10px;" @error="showDummyImage">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="name" class="control-label">
                            Bottom Image
                        </label>
                        <input  class="form-control" v-model="homeData.aboutSection.bottomImage">
                        <img v-if="homeData.aboutSection.bottomImage" :src="'/storage/homepage/'+homeData.aboutSection.bottomImage" style="max-width:200px; height:auto; clear:both; display:block; padding:2px; border:1px solid #ddd; margin-bottom:10px;" @error="showDummyImage">
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
                                <th>Body</th>
                                <th>Link</th>
                                <th>Count</th>
                                <th class="col-md-1">Subscript</th>
                                <th>Top Icon</th>
                                <th>Bottom Icon</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody is="draggable" tag="tbody" v-model="homeData.counterSection">
                            <tr v-for="(counterItem,counterIndex) in homeData.counterSection" :key="counterIndex">
                                <td>{{ counterIndex+1 }}</td>
                                <td><input class="form-control" type="text" v-model="counterItem.title"></td>
                                <td><textarea v-model="counterItem.body" rows="6" cols="47" class="form-control"></textarea></td>
                                <td><input class="form-control" type="text" v-model="counterItem.link"></td>
                                <td><input class="form-control" type="text" v-model="counterItem.count"></td>
                                <td><input class="form-control" type="text" v-model="counterItem.subscript"></td>
                                <td>
                                    <input class="form-control" type="text" v-model="counterItem.topIcon">
                                    <img v-if="counterItem.topIcon" :src="`/storage/icons/${counterItem.topIcon}`" @error="showDummyImage" style="max-width:105px; height:auto; clear:both; padding:2px; border:1px solid #ddd; margin-bottom:10px;">
                                </td>
                                <td>
                                    <input class="form-control" type="text" v-model="counterItem.bottomIcon">
                                    <img v-if="counterItem.bottomIcon" :src="`/storage/icons/${counterItem.bottomIcon}`" @error="showDummyImage" style="max-width:105px; height:auto; clear:both; padding:2px; border:1px solid #ddd; margin-bottom:10px;">
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

                <!-- Frequently Asked Questions -->
                <div class="form-group h4 col-md-12">
                    <strong>Frequently Asked Questions</strong>
                </div>
                
                <div v-for="(faqItem,faqIndex) in homeData.faqSection" :key="faqIndex">
                    <div class="form-group  col-md-5 ">
                        <label class="control-label" for="name">Question</label>
                        <ckeditor :editor="editor" v-model="faqItem.question" :config="editorConfig"></ckeditor>

                    </div>
                    <div class="form-group col-md-6">
                        <label class="control-label" for="name">Answer</label>
                        <ckeditor :editor="editor" v-model="faqItem.answer" :config="editorConfig"></ckeditor>
                    </div>
                    <div class="form-group col-md-1">
                        <label :for="'delete'+faqIndex">Delete</label>
                        <button type="button" @click="deleteFaq(faqIndex)" :id="'delete'+faqIndex" class="btn btn-danger"><span class="voyager-trash"></span></button>
                    </div>
                </div>

                <div class="form-group col-md-12">
                    <a href="#" class="btn btn-default" v-on:click.prevent="addFaq()">Add</a>
                </div> 
                <!--  End of FAQs-->


                <!-- Video Slide Section -->
                <div class="form-group h4 col-md-12">
                    <strong>Video Slide Section</strong>
                </div>
                <div class="container-fluid">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr class="d-flex">
                                <th>SN</th>
                                <th class="col-md-2">Title</th>
                                <th>Body</th>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Youtube Link</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody is="draggable" tag="tbody" v-model="homeData.videoSlideSection">
                            <tr v-for="(videoSlideItem,videoSlideIndex) in homeData.videoSlideSection" :key="videoSlideIndex">
                                <td>{{ videoSlideIndex+1 }}</td>
                                <td><input class="form-control" type="text" v-model="videoSlideItem.title"></td>
                                <td><textarea v-model="videoSlideItem.body" rows="6" cols="47" class="form-control"></textarea></td>
                                <td><input class="form-control" type="text" v-model="videoSlideItem.name"></td>
                                <td>
                                    <input class="form-control" type="text" v-model="videoSlideItem.image">
                                    <img v-if="videoSlideItem.image" :src="`/storage/homepage/${videoSlideItem.image}`" @error="showDummyImage" style="max-width:105px; height:auto; clear:both; padding:2px; border:1px solid #ddd; margin-bottom:10px;">
                                </td>
                                <td>
                                    <input class="form-control" type="text" v-model="videoSlideItem.youtubeLink">
                                    <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" :src="`https://www.youtube.com/embed/${youtube_parser(videoSlideItem.youtubeLink)}?rel=0`" allowfullscreen></iframe>
                                    </div>

                                </td>
                                <td>
                                    <button type="button" @click="deleteVideoSlide(videoSlideIndex)" class="btn btn-danger"><span class="voyager-trash"></span></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    
                </div>
                <div class="form-group col-md-12">
                        <a href="#" class="btn btn-default" v-on:click.prevent="addVideoSlide()">Add</a>
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
                homeData : {
                    homePageSection:{
                        bannerTitle:'',
                        bannerImage:'',
                        bannerButton:'',
                        bannerButtonUrl:''
                    },
                    aboutSection:{
                        title:'',
                        body:'',
                        topImage:'',
                        middleImage:'',
                        bottomImage:''
                    },
                    counterSection:[{
                        title:'',
                        body:'',
                        topIcon:'',
                        bottomIcon:'',
                        count:'',
                        subscript:'',
                    }],
                    faqSection: [
                        {
                            question:'',
                            answer:''
                        }
                    ],
                    videoSlideSection: [
                        {
                            title:'',
                            body:'',
                            name:'',
                            image:'',
                            youtubeLink:''
                        }
                    ]
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
                axios.post('/admin/homepage',this.homeData).then(
                    function (response){
                            toastr.success('Success');
                            myPointer.submitClickable = true;
                        }
                    ).catch(function (error){
                        // myPointer.submitClickable = true;
                        toastr.error(error);
                    })  
            },
            // add FAQ
            addFaq(){
                this.homeData.faqSection.push({
                        question:'',
                        answer:''
                })
            },
            // delete FAQ
            deleteFaq(faqIndex){
                this.homeData.faqSection.splice(faqIndex,1);
            },

            // add Video Slide
            addVideoSlide(){
                this.homeData.videoSlideSection.push({
                            title:'',
                            body:'',
                            name:'',
                            image:'',
                            youtubeLink:''
                        })
            },
            // delete FAQ
            deleteVideoSlide(videoSlideIndex){
                this.homeData.videoSlideSection.splice(videoSlideIndex,1);
            },

            // add CounterSection
            addCounter(){
                this.homeData.counterSection.push({
                        title:'',
                        body:'',
                        topIcon:'',
                        bottomIcon:'',
                        count:'',
                        subscript:'',
                    });
            },
            deleteCounter(counterIndex){
                this.homeData.counterSection.splice(counterIndex,1);
            }

        }
    }
</script>
