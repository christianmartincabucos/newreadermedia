<template>
    <div>
         <section class="box-section">
            <!-- <photos-gallery></photos-gallery> -->
            {{ images }}
            <ul id="WS-LiSli" class="grid" v-for="photo in photos" :key="photo.album_images_id">
                <li>
                    <img title="Title 1" :src="photo.image_path" data-description="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ">
                </li>
            </ul>
        </section>
    </div>
</template>
<script>
export default {
    data() {
        return {
          photos:[]  
        }
    },
    methods:{
        getPhotos(){
            var $this = this
            axios.post('/getAlbums')    
            .then(({data}) =>{
                console.log(data)
                $this.albums = data.data;

            })
        }
    }
}
</script>