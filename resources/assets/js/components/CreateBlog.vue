<template>
    <div>
        <form id="form-blog" method="POST" action="">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" name="title" id="title" v-model="formData.title" placeholder="Enter title...">
                    </div>

                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="title">Meta Description</label>
                        <input type="text" class="form-control" name="meta-desc" id="meta-desc" v-model="formData.meta_desc" placeholder="Enter meta description...">
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="author">Author</label>
                        <input type="text" class="form-control" name="author" id="author" v-model="formData.author" placeholder="Enter author...">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="sel1">Category</label>
                        <select class="form-control" name="category" v-model="formData.category">
                            <option v-for="category in blogcategories" v-bind:value="category.category_id" :key="category.blog_category_id">{{ category.category_name }}</option>

                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="author">Image</label>
                        <input type="file" class="form-control" name="image" id="image" ref="image" @change="onFileChange"  placeholder="Browse image...">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="blog-editor">Description:</label>

                <!-- <textarea name="blog-editor" id="blog-editor" rows="40" v-model="formData.body" style="color:#000!important; visibility: visible!important;">
                </textarea> -->
                <!-- <textarea :id="id" v-model="formData.body" v-el:editor></textarea> -->
                <editor 
                    api-key="no-api-key"
                    :init="{
                        height: 500,
                        menubar: true,
                        plugins: [
                            'advlist autolink lists link image charmap print preview hr anchor pagebreak',
                            'searchreplace wordcount visualblocks visualchars code fullscreen',
                            'insertdatetime media nonbreaking save table contextmenu directionality',
                            'emoticons template paste textcolor colorpicker textpattern',
                            'image code'
                        ],
                        toolbar:
                        'insertfile undo redo | formatselect | bold italic backcolor | \
                        alignleft aligncenter alignright alignjustify | \
                        bullist numlist outdent indent | removeformat | link image media | fullscreen | code | help',
                        /* without images_upload_url set, Upload tab won't show up*/
                        convert_urls : false,
                        automatic_uploads: false, 
                        images_upload_base_path: '/public/storage/blogs/',
                        relative_urls : false,

                        // override default upload handler to simulate successful upload
                        images_upload_handler: function (blobInfo, success, failure,folderName) {
                            var xhr, formData;
                            xhr = new XMLHttpRequest();
                            xhr.withCredentials = false;
                        
                            xhr.open('POST', '/api/upload-image');
                            var token = document.head.querySelector('[name=csrf-token]').content;
                            xhr.setRequestHeader('X-CSRF-Token', token);
                        
                            xhr.onload = function() {
                                var json;
                            
                                if (xhr.status != 200) {
                                    failure('HTTP Error: ' + xhr.status);
                                    return;
                                }
                                json = JSON.parse(xhr.responseText);

                                if (!json || typeof json.location != 'string') {
                                    failure('Invalid JSON: ' + xhr.responseText);
                                    return;
                                }
                                success(json.location);
                            
                            };
                        
                            formData = new FormData();
                            formData.append('file', blobInfo.blob(), blobInfo.filename());
                    
                            xhr.send(formData);
                        
                        }                
                    }"
                    v-model="formData.body" 
                    value="test"
                    v-cloak
                    />
            </div>
            <div class="text-right">

                <button type="button" class="btn btn-primary" @click="saveBlog(1)">Save</button>
                <button type="button" class="btn btn-warning" id="btn-blogclear">Clear</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </form>
        <!-- <span v-if="!formData.image || !formData.image.length">No files selected</span>
        <ul v-else>
            <li v-for="file in formData.image" :key="file.name">{{file.name}}</li>
        </ul> -->
    </div>
</template>
<script>
import Editor from '@tinymce/tinymce-vue'
export default {
    name:'formblog',
    components: {
     'editor': Editor
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
                title:'',
                meta_desc:'',
                author:'',
                category:'',
                image:'',
                body:'',
            }
        }
    },
    mounted() {
        var $this = this;
        axios.get('/getcategory')
        .then(function (response) {
            console.log($this.blogcategories);
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
            this.formData.image = files[0]['name'];
            if (!files.length)
                return;
        },
        resetForm(){
            this.formData.title = '';
            this.formData.meta_desc = '';
            this.formData.author = '';
            this.formData.category = '';
            this.formData.image = '';
            this.formData.body = '';
            this.$refs.image.value=null;
        },
        saveBlog(e, data){
            switch (e) {
                case 1:
                    if(this.formData.title == ''){
                        return this.$toast.warning('Title is required.', "Warning", {timeout: 2000, position:'topRight'});
                    }
                    if(this.formData.meta_desc == ''){
                        return this.$toast.warning('Meta Description is required.', "Warning", {timeout: 2000, position:'topRight'});
                    }
                    if(this.formData.meta_desc == '0'){
                        return this.$toast.warning('Category is required.', "Warning", {timeout: 2000, position:'topRight'});
                    }
                    if(this.formData.body == ''){
                        return this.$toast.warning('Body Description is required.', "Warning", {timeout: 2000, position:'topRight'});
                    }
                    this.callAxios('post', '/blog/post', this.formData, 1)
                break;
                case 2:
                    this.$toast.success(data.message, "Success", {timeout: 2000, position:'topRight'});
                    this.resetForm();
                    console.log(data)
                default:
                break;
            }
        },
        callAxios(http, url, data, e){
            var $this = this;
            axios({method: http,url: url,data: data,})
                .then(function (response) {
                    switch (e) {
                        case 1:
                            $this.saveBlog(2, response.data)
                        break;
                    
                        default:
                            break;
                    }
                })
                .catch(function (error) {
                    // handle error
                    console.log(error);
                });
        }   
    },
}
</script>