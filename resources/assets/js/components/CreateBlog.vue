<template>
    <div>
        <div class="modal fade" id="myModal" style="padding-right:0px!important;">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">

                    <div class="modal-header">
                        <h4 class="modal-title">Create Blog</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <div class="modal-body">
                        <form id="form-blog" enctype="multipart/form-data"  method="POST" action="">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="title">Title</label>
                                        <input type="text" class="form-control" name="title"  v-model="formData.title" placeholder="Enter title...">
                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="title">Meta Description</label>
                                        <input type="text" class="form-control" name="meta-desc" v-model="formData.meta_desc" placeholder="Enter meta description...">
                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="main">Main Keyword</label>
                                        <input type="text" class="form-control" v-model="formData.mainkey"  placeholder="Enter Main Keyword ...">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="secondary">Secondary Keyword</label>
                                        <input type="text" class="form-control" v-model="formData.secondkey"  placeholder="Enter Secondary Keyword ...">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="author">Author</label>
                                        <input type="text" class="form-control" name="author"  v-model="formData.author" placeholder="Enter author...">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="sel1">Category</label>
                                        <select class="form-control" name="category" v-model="formData.category">
                                            <option value="0" :disabled="true">Select Blog Category</option>
                                            <option v-for="category in blogcategories" v-bind:value="category.category_id" :key="category.blog_category_id">{{ category.category_name }}</option>

                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="author">Image</label>
                                        <input type="file" class="form-control" name="image"  ref="image" @change="onFileChange"  placeholder="Browse image...">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="blog-editor">Description:</label>

                                <!-- <textarea name="blog-editor" id="blog-editor" rows="40" v-model="formData.body" style="color:#000!important; visibility: visible!important;">
                                </textarea> -->
                                <!-- <textarea :id="id" v-model="formData.body" v-el:editor></textarea> -->
                                <tinymce v-model="formData.body"
                                    :plugins="myPlugins" 
                                    :toolbar ="myToolbar1"
                                    :init="myInit"
                                    >
                                </tinymce>
                            </div>
                            <div class="text-right">

                                <button type="button" class="btn btn-primary" @click="imageSaveBlog(1)">Save</button>
                                <button type="button" class="btn btn-warning" @click="resetForm">Clear</button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
            
        <!-- <span v-if="!formData.image || !formData.image.length">No files selected</span>
        <ul v-else>
            <li v-for="file in formData.image" :key="file.name">{{file.name}}</li>
        </ul> -->
    </div>
</template>
<script>
import Editor from '@tinymce/tinymce-vue'
import tinymce from 'tinymce/tinymce'
export default {
    components: {
     'tinymce': Editor
    },
    watch: {
        model() {
        if (this.formData.body == null)
            tinymce.editors[this.id].setContent(value);
        }
    },
    data() {
        return {
            
            id: 'editor_' + _.random(10000, 99999),
            blogcategories: [],
            formData:{
                title: '',
                meta_desc:'',
                author:'',
                category:0,
                image:null,
                mainkey: '',
                secondkey: '',
                body:'',
                
            },
            myModel:'',
            theme: "modern",
            myToolbar1: 'insertfile undo redo | formatselect | bold italic underline forecolor backcolor emoticons | alignleft aligncenter alignright alignjustify | hr bullist numlist outdent indent | removeformat link image table | print fullscreen | code preview',
            myPlugins: "link image code preview imagetools table lists textcolor hr wordcount| print fullscreen",
           
            myInit: {
              
                images_dataimg_filter: function(img) {
                    return false;
                    return img.hasAttribute('internal-blob');
                },
                convert_urls : false,
                height:500,
                automatic_uploads: true, 
                images_upload_base_path: '/../../',
                relative_urls : false,

                // override default upload handler to simulate successful upload
                file_picker_types: 'image',
                images_upload_handler: function (blobInfo, success, failure) {
                    let data = new FormData();
                    data.append('file', blobInfo.blob(), blobInfo.filename());
                    axios.post('/tinymce/upload', data)
                        .then(function (res) {
                            success(res.data.location);
                        })
                        .catch(function (err) {
                            failure('HTTP Error: ' + err.message);
                        });
                }
            }     
        }
    },
    mounted() {
        var $this = this;
        axios.get('/getcategory')
        .then(function (response) {
            // console.log($this.blogcategories);
            for (let i = 0; i < response.data.categories.length; i++) {
               
                $this.blogcategories.push({
                    'category_id' :response.data.categories[i]['category_id'],
                    'category_name' : response.data.categories[i]['category_name']
                })
                
            }
        })
        .catch(function (error) {
            // handle error
            console.log(error);
        })
        
    },
    methods: {
        onFileChange(e) {
            var files = e.target.files || e.dataTransfer.files;
            this.formData.image = e.target.files[0]
            if (!files.length)
                return;
        },
        resetForm(){
            this.formData.title = '';
            this.formData.meta_desc = '';
            this.formData.author = '';
            this.formData.category = 0;
            this.formData.image = '';
            this.formData.body = '';
            this.formData.mainkey = '';
            this.formData.secondkey = '';
            this.$refs.image.value=null;

        },
        
        imageSaveBlog(e, data) {
            switch (e) {
                case 1:
                    if(this.formData.title == ''){
                        return this.$toast.warning('Title is required.', "Warning", {timeout: 2000, position:'topRight'});
                    }
                    if(this.formData.meta_desc == ''){
                        return this.$toast.warning('Meta Description is required.', "Warning", {timeout: 2000, position:'topRight'});
                    }
                    if(this.formData.category == 0){
                        return this.$toast.warning('Category is required.', "Warning", {timeout: 2000, position:'topRight'});
                    }
                    if(this.formData.body == ''){
                        return this.$toast.warning('Body Description is required.', "Warning", {timeout: 2000, position:'topRight'});
                    }
                    let formData = new FormData();
                    formData.append('image', this.formData.image);
                    formData.append('title', this.formData.title);
                    formData.append('meta_desc', this.formData.meta_desc);
                    formData.append('author', this.formData.author);
                    formData.append('category', this.formData.category);
                    formData.append('body', this.formData.body);
                    formData.append('mainkey', this.formData.mainkey);
                    formData.append('secondkey', this.formData.secondkey);
                    this.callAxios('post', '/formSubmit', formData, 1)
                break;
                case 2:
                    this.$toast.success(data.message, "Success", {timeout: 2000, position:'topRight'});
                    $('#myModal').modal('hide')
                    this.resetForm();
                default:
                break;
            }
            
        },
        callAxios(http, url, data, e){
            let $this = this;

            const config = {
                headers: { 'content-type': 'multipart/form-data' }
            }
            axios({method: http,url: url,data: data, config})
                .then(function (response) {
                    switch (e) {
                        case 1:
                            $this.imageSaveBlog(2, response.data)
                        break;
                        default:
                            break;
                    }
                })
                .catch(function (error) {
                    // handle error
                    console.log(error);
                });
        },
    },
}
</script>