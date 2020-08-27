<template>
<div>
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Status Reference</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/administrator">Home</a></li>
                        <li class="breadcrumb-item active">Status Reference</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->

    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex justify-content-between">
                                <h3 class="card-title">List of Status Reference</h3>
                                <button type="submit" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#myModalstatus"><i class="fas fa-folder-plus"></i> Add</button>
                            </div>

                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th class="text-center">Status ID</th>
                                        <th class="text-center">Status Group Name</th>
                                        <th class="text-center">Status Short Code</th>
                                        <th class="text-center">Status Long Code</th>
                                        <th class="text-center">Status</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody v-if="postStatus.length != 0">
                                    <tr v-for="status in postStatus" :key="status.status_id">
                                        <td align="center">{{ status.status_id }}</td>
                                        <td align="center">{{ status.status_groupname }}</td>
                                        <td align="center">{{ status.status_shortacodename }}</td>
                                        <td align="center">{{ status.status_longcodename }}</td>
                                        <td align="center"><span :class="status.table_status == 1 ? 'btn-primary':'btn-warning' " class="rounded p-1">{{ status.table_status == 1 ? 'Active':'Inactive'}}</span></td>
                                        <td align="center" width="100px">
                                            <button class="btn btn-outline-secondary btn-sm" @click="editStatus(1, status)"  data-toggle="modal" data-target="#myModalstatus"><i class="fas fa-edit"></i> Edit</button>

                                        </td>
                                    </tr>
                                </tbody>

                            </table>
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
    <div class="modal fade" id="myModalstatus" style="padding-right:0px!important;">
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
                                        <label for="title">Status Name</label>
                                        <input type="text" class="form-control" name="status_groupname" id="title" v-model="formData.status_groupname" placeholder="Enter Status Name..">
                                    </div>

                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="title">Status Short Code</label>
                                        <input type="text" class="form-control" name="meta-desc" id="meta-desc" v-model="formData.status_short" placeholder="Enter Status Code...">
                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="author">Status Long Code</label>
                                        <input type="text" class="form-control" name="author" id="author" v-model="formData.status_long" placeholder="Enter Status Long Code...">
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

                                <button type="button" class="btn btn-primary" @click="createUpdateStatus(1)">Save</button>
                                <button type="button" class="btn btn-warning" @click="resetForm" id="btn-blogclear">Clear</button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
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
        return {
            formData:{
                status_id               : null,
                status_groupname        : ''
                ,status_short           : ''
                ,status_long            : ''
                ,status                 : ''
            },
            hide: true, 
            postStatus: [],
            tableStatus: []
        }
    },
    created() {
        this.getStatus('/getstatus');
    },
    methods: {
        getTableStatus(endpoint){
            var $this = this;
            axios.post(endpoint, {'status': 'TABLESTATUS'})
            .then(({data}) =>{
                $this.tableStatus = []
                $this.tableStatus.push(...data.data);
            })
        },
        getStatus(endpoint){
            var $this = this;
            axios.post(endpoint, {'status': null})
            .then(({data}) =>{
                $this.postStatus = []
                $this.postStatus.push(...data.data);
            })
        },
        resetForm(){
            this.formData.status_id = null;
            this.formData.status_groupname = '';
            this.formData.status_short = '';
            this.formData.status_long = '';
            this.formData.status = '' ;
        },
        editStatus(e, data){
            switch (e) {
                case 1:
                    this.hide = false
                    this.getTableStatus('/getstatus');
                    this.formData.status_id         = data.status_id
                    this.formData.status_groupname  = data.status_groupname
                    this.formData.status_short      = data.status_shortacodename
                    this.formData.status_long       = data.status_longcodename
                    this.formData.status            = data.table_status
                break;
                case 2:
                    console.log(data)    
                break;
                default:
                break;
            }
        },
        createUpdateStatus(e, data){
            switch (e) {
                case 1:
                    if(this.formData.status_groupname == ''){
                        return this.$toast.warning('Status Group Name is required.', "Warning", {timeout: 2000, position:'topRight'});
                    }
                    if(this.formData.status_short == ''){
                        return this.$toast.warning('Status Short Code is required.', "Warning", {timeout: 2000, position:'topRight'});
                    }
                    if(this.formData.status_long == ''){
                        return this.$toast.warning('Status Long Code is required.', "Warning", {timeout: 2000, position:'topRight'});
                    }
                    console.log(data)
                    this.formData.status_id == null ? this.callAxios('post', '/administrator/status-reference', this.formData, 1):this.callAxios('post', `/administrator/status-reference/${this.formData.status_id}`, this.formData, 2)
                break;
                case 2:
                    this.$toast.success(data.message, "Success", {timeout: 2000, position:'topRight'});
                    this.resetForm();
                    this.getStatus('/getstatus')
                    this.hide = true
                    console.log(data);
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
                            $this.createUpdateStatus(2, data)
                        break;
                        case 2:
                            $this.createUpdateStatus(2, data)
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