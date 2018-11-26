<template>
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">View Jobs</h1>
      <!-- <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group mr-2">
          <button class="btn btn-sm btn-outline-secondary">Share</button>
          <button class="btn btn-sm btn-outline-secondary">Export</button>
        </div>
        <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
        <span data-feather="calendar"></span>
        This week
        </button>
      </div> -->
    </div>
<div class="container">
  <div class="row">
    
    
    <div class="col-md-12">
      <h4>Bootstrap Snipp for Datatable</h4>
      <div class="table-responsive">
        
        <table id="mytable" class="table table-bordred table-striped">
          
          <thead>
            
           
            <th>Title</th>
            <th>Description</th>
            <th>Career Level</th>
            <th>No. Of Positions</th>
            <th>Required Experience</th>
            <th>Actions</th>
            
           
          </thead>
          <tbody>
            
            <tr v-for="job in jobs">
              
              <td>{{job.job_title}}</td>
              <td>{{job.job_description}}</td>
              <td>{{job.job_career_level}}</td>
              <td>{{job.job_no_of_position}}</td>
              <td>{{job.job_year_of_experience_min}}-{{job.job_year_of_experience_max}}</td>
              <td class="row">
                <p class="col-md-3" data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" style="font-size:11px;">Edit</button></p>
                <p class="col-md-3" data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" style="font-size:11px;" @click="delRecord(job.id)">Delete</button></p>
              </td>
              
            </tr>
            
            <!-- <tr>
              
              <td>Mohsin</td>
              <td>Irshad</td>
              <td>CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan</td>
              <td>isometric.mohsin@gmail.com</td>
              <td>+923335586757</td>
              <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
              <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
            </tr> -->
            
            
            
          </tbody>
          
        </table>
        <div class="clearfix"></div>
        <ul class="pagination pull-right">
          <li class="disabled"><a href="#"><span class="glyphicon glyphicon-chevron-left"></span></a></li>
          <li class="active"><a href="#">1</a></li>
          <li><a href="#">2</a></li>
          <li><a href="#">3</a></li>
          <li><a href="#">4</a></li>
          <li><a href="#">5</a></li>
          <li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span></a></li>
        </ul>
        
      </div>
      
    </div>
  </div>
</div>


<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
      <div class="modal-dialog">
    <div class="modal-content">
          <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
        <h4 class="modal-title custom_align" id="Heading">Edit Your Detail</h4>
      </div>
          <div class="modal-body">
          <div class="form-group">
        <input class="form-control " type="text" placeholder="Mohsin">
        </div>
        <div class="form-group">
        
        <input class="form-control " type="text" placeholder="Irshad">
        </div>
        <div class="form-group">
        <textarea rows="2" class="form-control" placeholder="CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan"></textarea>
    
        
        </div>
      </div>
          <div class="modal-footer ">
        <button type="button" class="btn btn-warning btn-lg" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span> Update</button>
      </div>
        </div>
    <!-- /.modal-content --> 
  </div>
      <!-- /.modal-dialog --> 
    </div>
    
    
    
    <!-- <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
      <div class="modal-dialog">
    <div class="modal-content">
          <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
        <h4 class="modal-title custom_align" id="Heading">Delete this entry</h4>
      </div>
          <div class="modal-body">
       
       <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> Are you sure you want to delete this Record?</div>
       
      </div>
        <div class="modal-footer ">
        <button type="button" class="btn btn-success" ><span class="glyphicon glyphicon-ok-sign"></span> Yes</button>
        <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> No</button>
      </div>
        </div>
    
  </div>
      
    </div> -->
    
  </main>
</template>


<script>
    import hasUrl from './hasUrl'
	 import { required, between } from 'vuelidate/lib/validators'
    export default {
        mounted() {
          //  [App.vue specific] When App.vue is finish loading finish the progress bar
           console.log('view all jobs Component mounted.')
          //this.$Progress.finish()
        },
        data() {
          return {
              jobs:{},
                     
          };
        },
        
        methods: {
            refreshRecord(record){
              this.jobs = record.data
            },
            delRecord(id){
              const reply = confirm("Are you sure, you want to delete this record?");
              if(reply){
                let endpoint = this.url+'/del-job';
                axios.post(endpoint+'/'+id,{id: id, _method:'DELETE'} )
                .then((response)=>this.refreshRecord(response))
                .catch(error => console.log(error.response.data.errors))
              }else{
                return
              }
            },
        },
        created(){
          let endpoint = this.url+'/all-jobs';
          axios.get(endpoint)
          .then((response)=> this.jobs= response.data)
          .catch((error)=> console.log(error));
          console.log("View All Jobs");
        },
        mixins: [hasUrl]
    }
</script>
<style type="text/css" scoped>
  .form-group.required .control-label:after { 
    color: #d00;
    content: "*";
    position: absolute;
    margin-left: 2px;
    
}
.error{
      font-size: 12px;
      color: red;
  }
  .has-error{
    animation-name: shakeError;
    animation-fill-mode: forward;
    animation-duration: .6s;
    animation-timing-function: ease-in-out;
  }
  .has-error input{
    border-color: #f79483;
    
  }
  .has-error > .form-control:focus{
    color: #495057;
    background-color: #fff;
    border-color: #ff9d9d;
    outline: 0;
    box-shadow: 0 0 0 0.2rem rgb(236, 176, 176);

  }

  .has-error {
  animation: shake 0.82s cubic-bezier(.36,.07,.19,.97) both;
  transform: translate3d(0, 0, 0);
  backface-visibility: hidden;
  perspective: 1000px;
}

@keyframes shake {
  10%, 90% {
    transform: translate3d(-1px, 0, 0);
  }
  
  20%, 80% {
    transform: translate3d(2px, 0, 0);
  }

  30%, 50%, 70% {
    transform: translate3d(-4px, 0, 0);
  }

  40%, 60% {
    transform: translate3d(4px, 0, 0);
  }
}
</style>