<template>
    <div>
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Create Album</h3>
            </div>
            <div class="card-body">
                <form class="form-inline" action="">
                    <div class="col-md-12">
                        <input type="text" class="form-control mb-2 mr-sm-2" v-model="albumname" placeholder="Enter Album Name" id="email">
                        <button type="button" class="btn btn-primary mb-2" @click.prevent="saveAlbum(1)">Submit</button>
                    </div>
                </form>

            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Photos</h3>
            </div>
            <div class="card-body">
                <form>
                    <div class="form-group">
                        <label for="email">Album Name:</label>
                        <select name="cars" class="custom-select">
                            <option selected>Select Album</option>
                            <option value="volvo">Volvo</option>
                            <option value="fiat">Fiat</option>
                            <option value="audi">Audi</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="pwd">Select Photo(s)</label>
                        <div class="custom-file">
                            <!-- <input accept="image/*" multiple="multiple" @change.prevent="previewMultiImage" id="fileUpload" type="file" hidden> -->
                            <input accept="image/*" multiple="multiple" @change.prevent="previewMultiImage" id="fileUpload"  type="file" class="custom-file-input">
                            <label class="custom-file-label" for="customFile">Choose files</label>
                        </div>
                    </div>
                    <div class="card" style="border-radius:8px!important;">
                        <a type="button" @click="reset" class="float-right m-2 text-warning" style="position: absolute;"></a>
                        <div id="photos" class="collapsed collapse show rounded">
                            <div  v-for="(item, index) in preview_list" :key="index" class="rounded">
                                <a type="button" @click="deleteItem(index)" class="float-right m-2 text-warning" style="position: absolute;" data-toggle="tooltip" data-placement="top" title="movet to trash">
                                    <i class="far fa-trash-alt fa-2x"></i>
                                </a>
                                <img :src="item" style="height: 100%!important;border-radius:8px!important;padding:1px;">
                            </div> 
                        </div>
                    </div>
                    <button type="button" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
        

    </div>
</template>
<style scoped>
    .display{
        display: none!important;
    }
    .show{
        display: block!important;
    }
    .overlay { 
        opacity: 0;
        transition: .5s ease;
        transition: all 0.3s ease; 
        opacity: 0; 
        background-color: #9bcd9b; 
    } 
        
    .overlay { 
        opacity: 0; 
    } 
        
    .overlayFade { 
        background-color: #9bcd9b; 
    } 
    .text {
        color: white;
        font-size: 20px;
        position: absolute;
        top: 50%;
        left: 50%;
        -webkit-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        text-align: center;
    }
    .thumb{
         border-radius: 3%;
         border-color: #A1A1A1!important;
    }
    fieldset {
        border: 2px solid #eeeeee;
        border-radius: 5px;
    }
    legend {    
        background-color: gray;
        color: white;
    }
    .modal-header {
        padding: 0.5rem 0.5rem;
        border-bottom: 0.5px solid #f8f9fa;
    }
    .btn-gray {
        background-color: #A1A1A1 !important;
    }
    #photos {
    /* Prevent vertical gaps */
    line-height: 3;
    
    -webkit-column-count: 3;
    -webkit-column-gap:   0px;
    -moz-column-count:    3;
    -moz-column-gap:      0px;
    column-count:         3;
    column-gap:           0px;  
    }

    #photos img {
        /* Just in case there are inline attributes */
        width: 100% !important;
        height: auto !important;
    }
    @media (max-width: 1200px) {
        #photos {
            -moz-column-count:    3;
            -webkit-column-count: 3;
            column-count:         3;
        }
    }
    @media (max-width: 1000px) {
    #photos {
        -moz-column-count:    3;
        -webkit-column-count: 3;
        column-count:         3;
        }
    }
    @media (max-width: 800px) {
    #photos {
        -moz-column-count:    2;
        -webkit-column-count: 2;
        column-count:         2;
        }
    }
    @media (max-width: 400px) {
    #photos {
        -moz-column-count:    1;
        -webkit-column-count: 1;
        column-count:         1;
        }
    }

</style>

<script>
export default {
    data() {
        return {
            albumname:'',
            albums:[],
            preview: null,
            image: null,
            data: [],
            preview_list: [],
            image_list: [],
        }
    },
    computed:{
        getAlbums(){
            $this = this
            axios.post('/getAlbums')
            .then(({data}) =>{
                $this.albums = data;
                $this.post_status = this.postStatus[0].status_id

            })
        }
    },
    methods: {
        deleteItem(e) {
            this.preview_list.splice(e, 1)
            this.image_list.splice(e, 1)
            this.image_list.length > 4 ? this.togggle = true: this.togggle = false;

        },
        previewMultiImage(event) {
            var input = event.target;
            var count = input.files.length;
            var index = 0;
            if (input.files) {
                while(count --) {
                var reader = new FileReader();
                reader.onload = (e) => {
                    this.preview_list.push(e.target.result);
                }
                this.image_list.push(input.files[index]);
                reader.readAsDataURL(input.files[index]);
                index ++;
                }
            }
            this.image_list.length > 4 ? this.togggle = true:false;
           
        },
        reset() {
            this.image = null;
            this.preview = null;
            this.image_list = [];
            this.preview_list = [];
        },
        saveAlbum(e, data){
            switch (e) {
                case 1:
                    this.callAxios('post', '/savealbum', {'albumname':this.albumname}, 1)
                break;
                case 2:
                    this.albumname = ''
                    this.$toast.success(data.message, "Success", {timeout: 2000, position:'topRight'});
                    console.log(data)
                break;
                default:
                    break;
            }
        },
        callAxios(http, url, data, e){
            var $this = this;
            axios({method: http, url: url,data: data,})
                .then(({data}) =>{
                    switch (e) {
                        case 1:
                            $this.saveAlbum(2, data)
                        break;
                        default:
                            break;
                    }
                })
                .catch(function (error) {
                    // handle error
                    console.log(error)
                });
        }
    }
}
</script>