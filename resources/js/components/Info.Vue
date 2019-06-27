<template>
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex align-item-center justify-content-between">
                    <h3 class="card-title">Info Table</h3>

                    <!-- <div class="card-tools float-right">
                        <button class="btn btn-success" @click="createModal" >Update Info <i class="fas fa-user-plus fa-fw"></i></button>
                    </div> -->
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                    <table class="table table-hover">
                    <tbody>
                        <tr>
                            <th>ID</th>
                            <th>Tracking Id</th>
                            <th>Location</th>
                            <th>Status</th>
                            <th>Remark</th>
                            <th>Date / Time</th>
                            <th>Modify</th>
                        </tr>
 
                        <tr v-for=" info in infos" :key="info.id" >
                            <td>{{info.id}}</td>
                            <td>{{info.trackId}}</td>
                            <td>{{info.location}}</td>
                            <td>{{info.status }}</td>
                             <td>{{info.remark }}</td>
                            <td>{{info.created_at }}</td>
                            <td>
                                <a class="btn btn-info" href="#" @click="editModal(info)">
                                    <i class="fa fa-edit blue"></i>
                                </a>
                                
                                <button class="btn btn-danger" href="#" @click="deleteInfo(info.id)">
                                    <i class="fa fa-trash red"></i>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
 </div>
<!-- Modal -->
        <div class="modal fade" id="AddNew" tabindex="-1" role="dialog" aria-labelledby="AddNewLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" v-show="editMode"  id="AddNewLabel">Edit Info</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form @submit.prevent="updateInfo()">
                        <div class="modal-body">
                            <div class="form-group">
                                <input v-model="form.location" type="text" location="location"
                                    placeholder="Location"
                                    class="form-control" :class="{ 'is-invalid': form.errors.has('location') }">
                                <has-error :form="form" field="location"></has-error>
                            </div>

                            <div class="form-group">
                                <input v-model="form.status" type="text" name="status"
                                    placeholder="Status"
                                    class="form-control" :class="{ 'is-invalid': form.errors.has('status') }">
                                <has-error :form="form" field="status"></has-error>
                            </div>
                            
                            <div class="form-group">
                                <input v-model="form.remark" type="text" name="remark"
                                    placeholder="Remark"
                                    class="form-control" :class="{ 'is-invalid': form.errors.has('remark') }">
                                <has-error :form="form" field="remark"></has-error>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            <button v-show="editMode" type="submit" class="btn btn-success">Update</button>
                        </div>
                    </form>
            </div>
        </div>
    </div>
</div>
    <!-- /.card-body -->           
</template>

<script>
    export default {
        data(){
            return{
                editMode: false,
                infos: {},
                form: new Form({
                    id: '',
                    trackId: '',
                    location: '',
                    status: '',
                    remark: '',
                })
            }
        },
        methods: {
            updateInfo(){
                this.$Progress.start()
                this.form.put('api/info/'+this.form.id)

                .then(() => {
                    // hide modal
                    $('#AddNew').modal('hide')
                    // show success message
                    swal.fire(
                    'Updated!',
                    'Info details updated successfully',
                    'success'
                    )  
                     this.$Progress.finish()
                })

                .catch(() => {
                   this.$Progress.fail()
                })

                // alert('Edit data')
            },

            editModal(info){
                this.editMode = true;
                this.form.reset();
                $('#AddNew').modal('show')
                this.form.fill(info);
            },

            deleteInfo(id){
                swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
                }).then((result) => {

                    //send request to the server
                    if (result.value) {
                        this.form.delete('api/info/'+id).then(() => {                     
                            swal.fire(
                            'Deleted!',
                            'Info deleted.',
                            'success'
                            )                     
                        }).catch(()=>{
                            swal("Failed!", "There was something wronge.", "warning");
                        })
                    }
                })
            },

            loadInfos(){
                axios.get("api/info").then(({ data })=> (this.infos = data));
            },
            
        },
        mounted(){
            this.loadInfos();
            // Fire.$on('afterCreated', () => { this.loadInfos(); })
            setInterval(() => this.loadInfos(), 3000);
        }
    }
</script>


