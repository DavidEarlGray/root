<html>
    <head>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </head>

    <style>
            
        .form-group {
            width:100%;
            display:flex;
            justify-content:center;
        }
        .updown {
            
             display:flex;
            flex-wrap:wrap;
            margin: 10px 10px 0 0 
        }
        .form-T {
            justify-content:space-evenly;
        }
        .updown label {
            width:100%;
            display:block;
            
        }
        .form-I input{
           
           margin: 0px 10px 0 10px;

        
            
        }
        .dd {
            width:10%   

        }
     
       
    </style>
    <body>
    <h1 style="text-align:center;"> Insert Page</h1>
    
       
    <br><br>
 
             

             <form action = "/catAdd" method = "post" class="form-group"  action="/action_page.php" style="margin-top:20px; width:50%; margin-left:20px;" >
             <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
             <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
             <div class="input-group mb-3"> 
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">Category Add</span>
  </div>
  <input type="text"  name="category" class="form-control" placeholder="Category name" aria-label="Category name" aria-describedby="basic-addon1" required>
  <input type="submit" value="Submit" class="btn btn-primary" style="margin-left:20px;margin-right:20px;">
</div>

</form>

<br><br>    <br><br>



          
           
             
             <form action = "/teachAdd" enctype="multipart/form-data" method = "post" action="/action_page.php" style="margin-left:20px;">
             <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>"><input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">Teacher Add</span>
  </div>
  <input type="text" required  class="form-control" placeholder="Teacher-name" aria-label="Teacher-name" aria-describedby="basic-addon1" name="name" >
</div>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1" >Teacher Add</span>
  </div>
  <input type="text" class="form-control" placeholder="Email Address" aria-label="Teacher-name" aria-describedby="basic-addon1" name="adress" required>
</div>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">Teacher Add</span>
  </div>
  <input type="number" class="form-control" placeholder="Phone" aria-label="Teacher-name" aria-describedby="basic-addon1" name="phone" required>
</div>
<div class="form-group">
    <label for="exampleFormControlFile1">Profile Picture Upload</label>
   
    <input  type="file"  class="form-control-file formspecial"  id="inputGroupFile02" name="pics[]" placeholder="Choose files" >
  </div>
  <input class='btn btn-primary' type="submit" value="Submit">
</form>


<br><br>    <br><br>
  
 
             


             <form action = "/schoolAdd" method = "post"  style="margin-left:20px;">
             <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>"><input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">

             <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">School Add</span>
  </div>
  <input type="text" class="form-control" placeholder="School Name" name="name" aria-label="School-Name" aria-describedby="basic-addon1" required>
</div>

<div class="input-group mb-3">
<div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">School Add</span>
  </div>
  <input type="text" class="form-control" placeholder="School Address" name="address" aria-label="School-Name" aria-describedby="basic-addon1" required>
</div>

<div class="form-group">
    <label for="exampleFormControlSelect1">Select Teacher</label>

    <select name="teachers" class="form-control" > <?php 
        foreach($teachers as $teacher) {
            echo  '<option value="',$teacher,'">',$teacher,"</option>";
        };
    
    ?> </select> 
  </div>
  <input class='btn btn-primary' type="submit" value="Submit">
    </form>











    <br><br>    <br><br>



        

             
    <form enctype="multipart/form-data" action = "/projAdd" method = "post" style="margin-left:20px;">
    {{ csrf_field() }}
   
    <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>"><input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
    
    <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">Project Add</span>
  </div>
  <input type="text" class="form-control" placeholder="Project Name" name="pj-name" aria-describedby="basic-addon1" required>
</div>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">Project Add</span>
  </div>
  <input type="text" class="form-control" placeholder="Project Description" name="pj-desc"  aria-describedby="basic-addon1" required>
</div>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">Project Add</span>
  </div>
  <input type="date" class="form-control" placeholder="Project Start Date" name="pj-start"  aria-describedby="basic-addon1"  required>
</div>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">Project Add</span>
  </div>
  <input type="date" class="form-control" placeholder="Project End Date" name="pj-end"  aria-describedby="basic-addon1" required>
</div>
    
<div class="form-group">
    <label for="exampleFormControlSelect1">Select Teacher</label>

    <select name="teachers" class="form-control" > <?php 
        foreach($teachers as $teacher) {
            echo  '<option value="',$teacher,'">',$teacher,"</option>";
        };
    
    ?> </select> 
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Select School</label>

    <select name="schools" class="form-control"> <?php 
        foreach($schools as $school) {

            echo '<option value="',$school,'">',$school,"</option>";
        };
    
    ?> </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Select Category</label>

    <select name="categories" class="form-control"> <?php 
        foreach($categories as $category) {
            echo '<option value="',$category,'">',$category,"</option>";
        };
    
    ?> </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlFile1">Pictures Upload</label>
   
    <input  type="file"  class="form-control-file formspecial"  id="inputGroupFile01" name="photos[]" placeholder="Choose files" multiple >
  </div>
  <div class="form-group">
    <label for="exampleFormControlFile1">Materials Upload</label>
   
    <input  type="file"  class="form-control-file formspecial"  id="inputGroupFile02" name="files[]" placeholder="Choose files" multiple >
  </div>
  <input class='btn btn-primary' type="submit" value="Submit">
</form>

  
</body>
</html>