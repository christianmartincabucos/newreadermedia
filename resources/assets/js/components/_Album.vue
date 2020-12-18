<template>
    <div>
        <!-- Card -->
        <div class="card pb-5">

            <!-- Card content -->
            <div class="rowcard-body px-5 " v-if="albums.length < 1">
                <div class="col-md-3" v-for="album in albums" :key="album.album_id">
                    <button class="folder"><a :href="'album/'+album.album_id" >{{ album.album_name }}</a></button>
                </div>
            </div>
            <div v-else>
                <div class="text-center">
                    <i class="fa fa-folder-open fa-5x" style="color: #FB8C00; "></i>
                    <h3>It looks there's no album added! </h3>
                    <p>Ask the admin to add album first. <i class="fa fa-frown-o"  style="color:#FB8C00;"></i></p>
                </div>
            </div>

        </div>
        <!-- Card -->
    </div>
</template>
<style scoped>
a{
    text-decoration: none;
    color: #fff;
}
.folder {
    width: 150px;
    height: 105px;
    margin: 0 auto;
    margin-top: 50px;
    position: relative;
    background-color: #708090;
    border-radius: 0 6px 6px 6px;
    box-shadow: 4px 4px 7px rgba(0, 0, 0, 0.59);
}

.folder:before {
    content: '';
    width: 50%;
    height: 12px;
    border-radius: 0 20px 0 0;
    background-color: #708090;
    position: absolute;
    top: -12px;
    left: 0px;
}
</style>
<script>
export default {
    data() {
        return {
            albums:[]
        }
    },
    created() {
        this.getAlbums();
    },
    methods: {
        getAlbums(){    
            var $this = this
            axios.post('/getAlbums')    
            .then(({data}) =>{
                console.log(data)
                $this.albums = data.data;

            })
        },
    },
}
</script>