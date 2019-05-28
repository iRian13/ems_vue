<template>
    <div class="container">
        <div class="row">
          <div class="col-md-10 offset-1">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Users Table</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addUserModal">Add User <i class="fas fa-user-plus fa-fw"></i></button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                  <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Type</th>
                    <th>Modify</th>
                  </tr>
                  <tr>
                    <td>183</td>
                    <td>John Doe</td>
                    <td>11-7-2014</td>
                    <td>Approved</td>
                    <td>
                        <a href="#">
                            <i class="fas fa-edit fa-lg" style="color:deepskyblue"></i>
                        </a>
                        <a href="#">
                            <i class="fas fa-trash-alt fa-lg" style="color:red"></i>                            
                        </a>
                    </td>
                  </tr>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->


        <!-- Modal -->
        <div class="modal fade" id="addUserModal" tabindex="-1" role="dialog" aria-labelledby="addUserModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="addUserModalLabel">Add New User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <form @submit.prevent="createUser">
              <div class="modal-body">
                  <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" v-model="form.name" name="name" class="form-control" id="name" placeholder="your name" :class="{ 'is-invalid': form.errors.has('name') }">
                    <has-error :form="form" field="name"></has-error>
                  </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" v-model="form.email" name="email" class="form-control" id="email" placeholder="your email" :class="{ 'is-invalid': form.errors.has('email') }">
                    <has-error :form="form" field="email"></has-error>
                  </div>
                  <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" v-model="form.password" name="password" class="form-control" id="password" placeholder="Enter password" :class="{ 'is-invalid': form.errors.has('password') }">
                    <has-error :form="form" field="password"></has-error>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Create User</button>
                </div>
              </form>
            </div>
          </div>
        </div>
    </div>
</template>

<script>
    export default {
        data () {
          return {
            // Create a new form instance
            form: new Form({
              name: '',
              email: '',
              password: ''            
            })
          }
        },
        methods: {
          createUser() {
            this.form.post('api/user');
          }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
