<template>
    <div>
        <div class="form-group  col-md-12 ">
                <label class="control-label" for="name">Title</label>
                <input class="form-control" type="text" v-on:keyup="slugify" v-model="title">
        </div>

        <div class="form-group  col-md-12 ">
                <label class="control-label" for="name">Slug</label>
                <input class="form-control" type="text" v-model="slug">
        </div>

        <div class="form-group  col-md-12 ">
                <label class="control-label" for="name">Date</label>
                <datetime type="datetime" value-zone="UTC" input-class="form-control" v-model="date" />
        </div>

        <!-- Print Coverage -->
        <div class="form-group h4 col-md-12">
            <strong>Print Coverage</strong>
        </div>
        <div class="container-fluid">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr class="d-flex">
                        <th>SN</th>
                        <th class="col-md-4">Title</th>
                        <th class="col-md-2">Type</th>
                        <th>Date</th>
                        <th>Page Number</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody is="draggable" tag="tbody" v-model="printCoverage">
                    <tr v-for="(printCoverageItem,printCoverageIndex) in printCoverage" :key="printCoverageIndex">
                    <td>{{ printCoverageIndex+1 }}</td>
                    <td><input type="text" class="form-control" v-model="printCoverageItem.title"></td>
                    <td><select class="form-control" v-model="printCoverageItem.printCoverageID">
                        <option value="0" selected="selected" hidden disabled> 
                            Select 
                        </option> 
                        <option  v-for="(printCoverageCategoryItem, printCoverageCategoryIndex) in printCoverageCategory" :key = "printCoverageCategoryIndex" :value="printCoverageCategoryItem.id">
                            {{ printCoverageCategoryItem.title }}
                        </option>        
                    </select></td>
                    <td><input class="form-control" v-model="printCoverageItem.date"></td>
                    
                    <td><input type="number" class="form-control" v-model="printCoverageItem.pageNumber"></td>
                    <td>
                    <button type="button" @click="deletePrintCoverage(printCoverageIndex)" class="btn btn-danger"><span class="voyager-trash"></span></button>
                    </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="form-group col-md-12">
                <a href="#" class="btn btn-success" v-on:click.prevent="addPrintCoverage()">Add</a>
        </div>

        <!-- Online Coverage -->
        <div class="form-group h4 col-md-12">
            <strong>Online Coverage</strong>
        </div>
        <div class="container-fluid">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr class="d-flex">
                        <th>SN</th>
                        <th class="col-md-4">Title</th>
                        <th class="col-md-2">Type</th>
                        <th>Date</th>
                        <th>Link</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody is="draggable" tag="tbody" v-model="onlineCoverage">
                    <tr v-for="(onlineCoverageItem,onlineCoverageIndex) in onlineCoverage" :key="onlineCoverageIndex">
                    <td>{{ onlineCoverageIndex+1 }}</td>
                    <td><input type="text" class="form-control" v-model="onlineCoverageItem.title"></td>
                    <td><select class="form-control" v-model="onlineCoverageItem.onlineCoverageID">
                        <option value="0" selected="selected" hidden disabled> 
                            Select 
                        </option> 
                        <option  v-for="(onlineCoverageCategoryItem, onlineCoverageCategoryIndex) in onlineCoverageCategory" :key = "onlineCoverageCategoryIndex" :value="onlineCoverageCategoryItem.id">
                            {{ onlineCoverageCategoryItem.title }}
                        </option>        
                    </select></td>
                    <td><input class="form-control" v-model="onlineCoverageItem.date"></td>
                    <td><input type="text" class="form-control" v-model="onlineCoverageItem.link"></td>
                    <td>
                    <button type="button" @click="deleteOnlineCoverage(onlineCoverageIndex)" class="btn btn-danger"><span class="voyager-trash"></span></button>
                    </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="form-group col-md-12">
                <a href="#" class="btn btn-success" v-on:click.prevent="addOnlineCoverage()">Add</a>
        </div>
        <div class="form-group  col-md-1 ">
        <label class="control-label" for="name"></label>

        <button @click="onSubmit" class="btn btn-primary save" :disabled = '!submitClickable'>Save</button>
        </div>
    </div>
</template>


<script>
// for CK editor
import ClassicEditor from '@ckeditor/ckeditor5-build-classic';
// for Axios
import axios from 'axios';
import { Datetime } from 'vue-datetime'
// You need a specific loader for CSS files
import 'vue-datetime/dist/vue-datetime.css'

export default {
        props:[
                    "edit",
                    "content"
            ], 
        components:{
            'datetime' : Datetime
        }, 
        data(){
            return {
                editor: ClassicEditor,
                editorConfig: {
                    // The configuration of the editor.
                },
                title:'',
                date:'',
                slug:'',
                printCoverage:[
                        {
                            title:'',
                            printCoverageID:0,
                            date:'',
                            pageNumber:''
                        }
                ],
                onlineCoverage:[
                        {
                            title:'',
                            onlineCoverageID:0,
                            date:'',
                            link:''
                        }
                ],
                printCoverageCategory:[],
                onlineCoverageCategory:[],
                submitClickable: true,
            }
        },
        created(){
            // fetching data for category
            this.fetchPrintCoverageCategory();
            this.fetchOnlineCoverageCategory();
         
            if(this.edit){
                this.printCoverage = JSON.parse(this.content.print_coverages);
                this.onlineCoverage = JSON.parse(this.content.online_coverages);
                this.title = this.content.title;
                this.slug = this.content.slug;
                this.date = this.content.published_date;
            }

            // this.fetchMilestoneData();     
        },
        methods: {
            slugify (text, ampersand = 'and') {
                const a = 'àáäâèéëêìíïîòóöôùúüûñçßÿỳýœæŕśńṕẃǵǹḿǘẍźḧ'
                const b = 'aaaaeeeeiiiioooouuuuncsyyyoarsnpwgnmuxzh'
                const p = new RegExp(a.split('').join('|'), 'g')

                this.slug =  this.title.toString().toLowerCase()
                    .replace(/[\s_]+/g, '-')
                    .replace(p, c =>
                    b.charAt(a.indexOf(c)))
                    .replace(/&/g, `-${ampersand}-`)
                    .replace(/[^\w-]+/g, '')
                    .replace(/--+/g, '-')
                    .replace(/^-+|-+$/g, '')
            }, 
            addPrintCoverage(){
                this.printCoverage.push(
                        {
                            title:'',
                            printCoverageID:0,
                            date:'',
                            pageNumber:''
                        }
                )
            },
            deletePrintCoverage(printCoverageIndex){
                this.printCoverage.splice(printCoverageIndex,1);
            },
            addOnlineCoverage(){
                this.onlineCoverage.push(
                        {
                            title:'',
                            onlineCoverageID:0,
                            date:'',
                            link:''
                        }
                )
            },
            deleteOnlineCoverage(onlineCoverageIndex){
                this.onlineCoverage.splice(onlineCoverageIndex,1);
            },
            onSubmit(){
                this.submitClickable = false;
                var myPointer = this;
                axios.post('/admin/newsArticles',{
                    edit:this.edit,
                    id:this.content.id,
                    title:this.title,
                    slug:this.slug,
                    date:this.date,
                    printCoverage:this.printCoverage,
                    onlineCoverage:this.onlineCoverage,
                    }).then(
                    function(response){
                        console.log(response);
                        myPointer.submitClickable = true;
                        
                        if(response.data=='done'){
                        toastr.success('Successfully Updated');
                        window.location.replace("/admin/news-articles");
                        }
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
            },
            fetchPrintCoverageCategory(){
                var myPointer = this;
                axios.get('/admin/fetchPrintCoverage').then(
                    function(response){
                        myPointer.printCoverageCategory = response.data;
                        console.log(myPointer.printCoverageCategory);
                    }).catch(
                        function(error){
                            console.log(error);
                        }
                    )
                
            },
            fetchOnlineCoverageCategory(){
                var myPointer = this;
                axios.get('/admin/fetchOnlineCoverage').then(
                    function(response){
                        myPointer.onlineCoverageCategory = response.data;
                    }).catch(
                        function(error){
                            console.log(error);
                        }
                    )
                
            }
        }


}
</script>

