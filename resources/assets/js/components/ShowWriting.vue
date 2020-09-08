<template>
<div>
    <div class="d-flex justify-content-between">
        <div class="form-group">
            <label for="sel1">Status Category</label>
            <select class="custom-select custom-select-sm" name="status" v-cloak v-model="post_status" @change="getMedia(1, '/getmedia')">
                <option v-for="post in postStatus" v-bind:value="post.status_id" :key="post.status_id">{{ post.status_longcodename }}</option>
            </select>
        </div>
    
        <div class="form-group">
            <label for="sel1">Search</label>
            <input class="form-control form-control-sm" type="text" v-model="search" @input="resetPagination" placeholder="Search...">
        </div>
    </div>
    
    <table id="example1" class="table table-bordered table-hover table-striped rounded" v-cloak>
        <thead>
            
            <tr>
                <th style="text-align:center;" v-for="column in columns" :key="column.name" @click="sortBy(column.name)">
                    {{column.label}}
                </th>
                <th style="text-align:center;">Action</th>
            </tr>
        </thead>
        <tbody v-if="blogs.length != 0">
            <tr v-for="blog in filteredpost" :key="blog.blog_id">
                <td align="center">{{ blog.title }}</td>
                <td align="center">{{ blog.meta_desc }}</td>
                <td align="center">{{ blog.author == ''? 'anonymous':  blog.author }}</td>
                <td align="center">Writing Tips</td>
                <td align="center" width="100px">
                    <button v-if="blog.post_status == 4" class="btn btn-outline-warning btn-sm" @click="updateBlog(1, blog.blog_id)" ><i class="fas fa-trash "></i> Cancel</button>
                    <button v-else class="btn btn-outline-primary btn-sm" @click="show(blog.blog_id)" data-toggle="modal" data-target="#myModal"><i class="fas fa-eye"></i> Check</button>
                </td>
            </tr>
        </tbody>
        <tbody v-else>
            <td align="center" colspan="5">No Data Found</td>
        </tbody>
    </table>
    <div class="d-flex justify-content-center">
        <ul class="pagination" v-if="blogs.length != 0">
            <li :class="!pagination.prev_page_url ? 'disabled':''" class="page-item "><a class="page-link" @click="fetchPaginate(pagination.prev_page_url)">Previous</a></li>
            <li :class="pagination.current_page == page ? 'active':''" class="page-item" v-for="page in pagination.last_page" :key="page.index">
                <a class="page-link" @click="getMedia(1, `/getmedia?page=${page}`)">{{ page }}</a>
            </li>
            <li :class="!pagination.next_page_url ? 'disabled':''" class="page-item"><a class="page-link" @click="fetchPaginate(pagination.next_page_url)">Next</a></li>
        </ul>
    </div>
    
    <div class="modal fade" id="myModal">
        <div class="modal-dialog modal-xl">
            <div class="modal-content box">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Writing Tips | Checking</h4>
                    <button type="button" class="btn bg-gradient-primary btn-xs" @click="approve(1)" data-dismiss="modal"><i class="fas fa-thumbs-up"></i>&nbsp;Approve</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                   <h3 class="text-center"><strong>{{ title }}</strong></h3>
                        <div v-html="body"></div>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>
</div>
</template>
<script>

export default {
    data() {
        let sortOrders = {};
        let columns = [
            {label: 'Title', name: 'title' },
            {label: 'Meta Description', name: 'meta description'},
            {label: 'Author', name: 'author'},
            {label: 'Category', name: 'category'},
        ];
        columns.forEach((column) => {
           sortOrders[column.name] = -1;
        });
        
        return {
            search:'',
            columns: columns,
            post_status: '',
            blogs: [],
            title:'',
            body:'',
            blog_id:'',
            url: '/getmedia',
            nextUrl: null,
            postStatus:[],
            pagination:[],
        }
    },
   
    created() {
        this.getStatus('/getstatus');
    },
   
    methods: {
        resetPagination(){
            this.pagination.current_page = 1;
            this.pagination.prev_page_url = '';
            this.pagination.next_page_url = '';
        },
        fetchPaginate(url){
            this.url = url
            this.getMedia(1, '/getmedia')
        },
        makePagination(data){
            let pagination = {
                current_page: data.current_page,
                last_page: data.last_page,
                next_page_url: data.next_page_url,
                prev_page_url:data.prev_page_url,
            }
            this.pagination = pagination
        },
        updateBlog(e, data){
            switch (e) {
                case 1:
                    this.callAxios('post', `/administrator/updateblog/${data}`, {'status': 2}, 3)
                break;
                case 2:
                    // console.log(data)
                    this.$toast.success(data.message, "Success", {timeout: 2000, position:'topRight'});
                    this.blogs = []
                    this.getMedia(1, '/getmedia')
                break;
                default:
                    break;
            }
        },
        getStatus(endpoint){
            var $this = this;
            axios.post(endpoint, {'status': 'BLOGSTATUS'})
            .then(({data}) =>{
                // console.log(data.data);
                $this.postStatus.push(...data.data);
                $this.post_status = this.postStatus[0].status_id
                this.getMedia(1, '/getmedia');

            })
        },
        getMedia(e, data){
            switch (e) {
                case 1:
                    data != undefined ? this.url = data : this.url
                    this.callAxios('post', this.url,{'category_id': 4,'post_status': this.post_status || 3}, 2)
                break;
                case 2:
                    this.blogs = []
                    this.blogs.push(...data.data.data)
                    this.makePagination(data.data)
                    this.nextUrl = data.data.next_page_url;
                break;
                
                default:
                    break;
            }
            /* var $this = this;
            axios.post('/getmedia', {'category_id': 3,'post_status': 2})
            .then(({data}) =>{
                // console.log(data);
                $this.blogs.push(...data.data.data);
                $this.nextUrl = data.data.next_page_url;
            }) */
        },
        show(id){
            var $this = this;
            axios.get(`/administrator/media/${id}`)
            .then(({data}) =>{
                $this.title = data.data.title;
                $this.body = data.data.body;
                $this.blog_id = data.data.blog_id;
            })
        },
        approve(e, data){
            switch (e) {
                case 1:
                    this.callAxios('post', `/administrator/approve/${this.blog_id}`, {'post_status': 4}, 1)
                    break;
                case 2:
                    this.$toast.success(data.message, "Success", {timeout: 2000, position:'topRight'});
                    this.blogs = [];
                    // console.log(this.blogs);
                    this.getMedia(this.endpoint)
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
                            // console.log(data);
                            $this.approve(2, data)
                        break;
                        case 2:
                            this.getMedia(2, data)
                        break;
                        case 3:
                            this.updateBlog(2, data)
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
    
    computed:{
        endpoint(){
            return '/getmedia';
        },
        filteredpost() {
            let blogs = this.blogs;
            if (this.search) {
                
                blogs = blogs.filter((row) => {
                    return Object.keys(row).some((key) => {
                        return String(row[key]).toLowerCase().indexOf(this.search.toLowerCase()) > -1;
                    })
                });
            }
            return blogs
        },
    },
}
</script>