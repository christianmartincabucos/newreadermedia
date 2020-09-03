<template>
<div>
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Users</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/administrator">Home</a></li>
                        <li class="breadcrumb-item active">Users</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->

    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex justify-content-between">
                                <h3 class="card-title">List of Users</h3>
                                <div class="form-group mb-0">
                                    <input class="form-control form-control-sm" type="text" v-model="search" @input="resetPagination" placeholder="Search...">
                                </div>
                            </div>
    
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped" v-cloak>
                                <thead>
                                    <tr>
                                        <th style="text-align:center;" v-for="column in columns" :key="column.name" @click="sortBy(column.name)">
                                            {{column.label}}
                                        </th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody v-if="users.length != 0">
                                    <tr v-for="user in filteredusers" :key="user.id">
                                        <td align="center">{{ user.name }}</td>
                                        <td align="center">{{ user.email }}</td>
                                        <td align="center">{{ user.user_type }}</td>
                                        <td align="center"><span :class="user.status == 1 ? 'btn-primary':'btn-warning'" class="rounded p-1">{{ user.status == 1 ? 'Active':'Inactive'}}</span></td>
                                        <td align="center">
                                            <button type="submit" class="btn btn-outline-secondary btn-sm" @click="editUser(1, user)"><i class="fas fa-user-edit"></i> Edit</button>
                                            
                                        </td>
                                    </tr>
                                </tbody>
                                <tbody v-else>
                                    <td align="center" colspan="5">No Data Found</td>
                                </tbody>
                            </table>
                            <div class="d-flex justify-content-center mt-4">
                                <ul class="pagination" v-if="users.length != 0">
                                    <li :class="!pagination.prev_page_url ? 'disabled':''" class="page-item "><a class="page-link" @click="fetchPaginate(pagination.prev_page_url)">Previous</a></li>
                                    <li :class="pagination.current_page == page ? 'active':''" class="page-item" v-for="page in pagination.last_page" :key="page.index">
                                        <a class="page-link" @click="getUsers(1,null, `/getusers?page=${page}`)">{{ page }}</a>
                                    </li>
                                    <li :class="!pagination.next_page_url ? 'disabled':''" class="page-item"><a class="page-link" @click="fetchPaginate(pagination.next_page_url)">Next</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <div class="modal fade" id="myModaluser" style="padding-right:0px!important;">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <div class="modal-header">
                    <h4 class="modal-title">Create Ststus Reference</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <div class="modal-body">
                    <div id="app">
                        <form id="form-blog" method="POST" action="">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="author">Name</label>
                                        <input type="text" class="form-control" disabled name="name" v-model="formData.name" id="author">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="author">User Types</label>
                                        <select class="custom-select custom-select-sm" name="status" v-cloak v-model="formData.user_type">
                                            <option v-for="user_type in user_types" v-bind:value="user_type.typename" :key="user_type.index">{{ user_type.typename }}</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group" :hidden="hide">
                                        <select class="custom-select custom-select-sm" name="status" v-cloak v-model="formData.status">
                                            <option v-for="post in tableStatus" v-bind:value="post.status_id" :key="post.status_id">{{ post.status_longcodename }}</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="text-right">
                                <button type="button" class="btn btn-primary" @click="updateUser(1)"><i class="fas fa-save"></i> Update</button>
                                <button type="button" class="btn btn-danger" ref="close" data-dismiss="modal"><i class="fas fa-times-circle"></i> Close</button>
                            </div>
                        </form>
                    </div>

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
                {label: 'Name', name: 'name' },
                {label: 'Email', name: 'email'},
                {label: 'User Type	', name: 'usertype'},
                {label: 'Status', name: 'status'},
            ];
            columns.forEach((column) => {
            sortOrders[column.name] = -1;
            });
            return {
                modal: 'fade',
                search:'',
                columns: columns,
                nextUrl: null,
                pagination:[],
                users:[],
                hide: true, 
                tableStatus: [],
                user_types:[
                    {typename: 'default'},
                    {typename: 'admin'}
                ],
                user_id : '',
                formData:{
                    name: '',
                    user_type: 'default',
                    status: ''
                }
            }
        },
        created() {
            this.getUsers(1, null, '/getusers')
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
            updateUser(e, data){
                switch (e) {
                    case 1:
                        this.callAxios('post', `/administrator/user/update/${this.user_id}`, this.formData, 2)
                    break;
                    case 2:
                        $('#myModaluser').modal('hide')
                        this.getUsers(1, null, '/getusers')
                        this.$toast.success(data.message, "Success", {timeout: 2000, position:'topRight'})
                        console.log(data)
                    break;
                
                    default:
                        break;
                }
            },
            editUser(e, data){
                switch (e) {
                    case 1:
                        $('#myModaluser').modal('show')

                       /*  this.modal = 'fade'*/
                        this.hide = false 
                        this.getTableStatus('/getstatus');
                        this.user_id = data.id
                        this.formData.name = data.name
                        this.formData.user_type = data.user_type
                        this.formData.status = data.status
                    break;
                
                    default:
                    break;
                }
            },
            getUsers(e, data, url){
                switch (e) {
                    case 1:
                        this.users = []
                        this.callAxios('post', url, null, 1)
                    break;
                    case 2:
                        this.users.push(...data.data.data)
                        this.makePagination(data.data)
                        this.nextUrl = data.data.next_page_url;
                        console.log(this.users)
                    break;
                
                    default:
                        break;
                }
            },
            getTableStatus(endpoint){
                var $this = this;
                axios.post(endpoint, {'status': 'TABLESTATUS'})
                .then(({data}) =>{
                    $this.tableStatus = []
                    $this.tableStatus.push(...data.data);
                })
            },
            callAxios(http, url, data, e){
                var $this = this;
                axios({method: http, url: url,data: data,})
                    .then(({data}) =>{
                        switch (e) {
                            case 1:
                                $this.getUsers(2, data)
                            break;
                            case 2:
                                $this.updateUser(2, data)
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
            filteredusers() {
                let users = this.users;
                if (this.search) {
                    
                    users = users.filter((row) => {
                        return Object.keys(row).some((key) => {
                            return String(row[key]).toLowerCase().indexOf(this.search.toLowerCase()) > -1;
                        })
                    });
                }
                return users
            },
        },
    }
</script>
