<template>
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-12 ">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">User's Table</h3>

                        <div class="card-tools">
                            <button class="btn btn-success" @click="newModal">Add New
                                <i class="fas fa-user-plus fa-fw"></i>
                            </button>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover">
                        <thead>
                            <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Type</th>
                            <th>Registered At</th>
                            <th>Modify</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="user in users.data" :key="user.id">
                                <td>{{user.id}}</td>
                                <td>{{user.name }}</td>
                                <td>{{user.email}}</td>
                                <td>{{user.type | upText}}</td>
                                <td>{{user.created_at  | myDate}}</td>
                                <td>
                                    <a @click="editModal(user)">
                                        <i class="fa fa-edit text-blue"></i>
                                    </a>
                                    /
                                    <a  @click="deleteUsers(user.id)">
                                        <i class="fa fa-trash text-red"></i>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="addNew" tabindex="-1" role="dialog" aria-labelledby="addNewTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" v-show="!editmode" id="addNewTitle">Add New User</h5>
                        <h5 class="modal-title" v-show="editmode" id="addNewTitle">Update User's info</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form @submit.prevent="editmode ? updateUser() : createUser()">

                    <div class="modal-body">
                        <div class="form-group">
                            <input v-model="form.name" type="text" name="name" placeholder="Name"
                                class="form-control" :class="{ 'is-invalid': form.errors.has('name') }">
                            <has-error :form="form" field="name"></has-error>
                        </div>
                        <div class="form-group">
                            <input v-model="form.email" type="email" name="email" placeholder="Email"
                                class="form-control" :class="{ 'is-invalid': form.errors.has('email') }">
                            <has-error :form="form" field="email"></has-error>
                        </div>
                        <div class="form-group">
                            <select name="type" v-model="form.type" id="type" class="form-control" :class="{ 'is-invalid': form.errors.has('type') }">
                                <option value="">Select User Role</option>
                                <option value="admin">Admin</option>
                                <option value="user">Standard user</option>
                                <option value="manager">Manager</option>
                            </select>
                            <has-error :form="form" field="type"></has-error>
                        </div>
                        <div class="form-group">
                                <textarea v-model="form.bio" type="text" name="bio" placeholder="Short Bio for user (Optional)"
                                    class="form-control" :class="{ 'is-invalid': form.errors.has('bio') }"></textarea>
                                <has-error :form="form" field="bio"></has-error>
                        </div>
                        <div class="form-group">
                            <input v-model="form.password" type="password" name="password" placeholder="Password"
                                class="form-control" :class="{ 'is-invalid': form.errors.has('password') }">
                            <has-error :form="form" field="password"></has-error>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <button type="submit" v-show="editmode" class="btn btn-primary">Update</button>
                        <button type="submit" v-show="!editmode" class="btn btn-primary">Create</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Modal End -->
    </div>
</template>

<script>
    export default {
        data(){
            return {
                editmode:false,
                users:{},
                form: new Form({
                    id:'',
                    name: '',
                    email: '',
                    type: '',
                    bio: '',
                    photo: '',
                    password: ''
                })
            }
        },
        methods:{
            updateUser(){
                // console.log('Editing data')
                this.$Progress.start();
                this.form.put('api/user/'+this.form.id)
                .then(() =>{
                    //if successfull
                    Swal.fire(
                        'Updated Successfully!',
                        'Your Information has been Updated.',
                        'success'
                    )
                    this.$Progress.finish();
                    $('#addNew').modal('hide')
                    Fire.$emit('AfterCreate');
                })
                .catch(() =>{
                    this.$Progress.fail();
                })
            },
            editModal(user){
                this.editmode = true;
                this.form.reset();
                $('#addNew').modal('show');
                this.form.fill(user);
            },
            newModal(){
                this.editmode = false;
                this.form.reset()
                $('#addNew').modal('show')
            },
            deleteUsers(id){
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                        //send request to the server
                        if (result.value) {
                            this.form.delete("api/user/"+id).then(()=>{
                                    Swal.fire(
                                    'Deleted!',
                                    'Your file has been deleted.',
                                    'success'
                                    )
                                Fire.$emit('AfterCreate');
                            }).catch(()=>{
                                swal("Failed!", "There was Something Wrong.", "Warning");
                            });
                        }
                    })
            },
            loadUsers(){
                axios.get('api/user').then(({data})=>(this.users = data))
            },
            createUser(){
                this.$Progress.start();
                this.form.post('api/user')
                .then(() =>{
                    Fire.$emit('AfterCreate')
                    $('#addNew').modal('hide')
                    Toast.fire({
                        icon: 'success',
                        title: 'User Created successfully'
                    })
                    this.$Progress.finish()
                })
                .catch(() =>{
                    this.$Progress.fail();
                })


            }
        },
        created() {
            this.loadUsers();
            Fire.$on('AfterCreate', ()=>{
                this.loadUsers();
            });
            //setInterval(() => this.loadUsers(), 3000)
        }
    }
</script>
