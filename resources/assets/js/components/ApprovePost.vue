<template>
    <div>
    </div>
</template>
<script>
export default {
    props:['blog'],
    data() {
    console.log(blog);
        return {
            blog_id: this.blog
        }
    },

    methods: {
        approve(e, data){
            switch (e) {
                case 1:
                    this.callAxios('post', `/administrator/approve/${this.blog_id}`, {'post_status': 4}, 1)
                    break;
                case 2:
                    this.$toast.success(data.message, "Success", {timeout: 2000, position:'topRight'});
                    console.log(data);
                    break;
                default:
                    break;
            }
        },
        callAxios(http, url, data, e){
            var $this = this;
            axios({method: http, url: url,data: data,})
                .then(function (response) {
                    switch (e) {
                        case 1:
                            $this.approve(2, response.data)
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