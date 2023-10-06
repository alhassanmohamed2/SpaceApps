<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>collabarate</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../../public/css/collaborate.css">
</head>
<body>
    <div class="container mt-5">
        <ul class="nav nav-pills nav-justified">
            <li class="nav-item">
                <a class="nav-link active" href="#">Step 1</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Step 2</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Step 3</a>
            </li>
        </ul>
        <form action="/adduserdata" method="POST" >

            <div class="row mt-3">
                <div class="col">
                    <!-- Step 1 Content -->
                    <div id="step1" class="step-content">
                        <h3>Personal Information</h3>
                        <div class="row">
                            <div class="col">
                              <input type="text" class="form-control" placeholder="Name" aria-label="Name" name="name">
                            </div>
        
                          </div>
                          
                          <div class="row">
                            <div class="col">
                              <input type="text" class="form-control" placeholder="Github Portfolio link " aria-label="Github Portfolio link" name="github">
                            </div>
                            <div class="col">
                              <input type="text" class="form-control" placeholder="Linkedin Portfolio link " aria-label="Linkedin Portfolio link" name="linkedin">
                            </div>
                          
                        </div>
                        <div class="row">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Write Your Bio" id="floatingTextarea2" style="height: 100px" name="bio"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <input type="radio" class="btn-check" name="project" id="option1" autocomplete="off" value="Project Manager" >
                                <label class="btn btn-secondary" for="option1">Project Manager</label>
                            </div>
                            <div class="col">
                                <input type="radio" class="btn-check" name="project" id="option2" autocomplete="off" value="Collaborator">
                                <label class="btn btn-secondary" for="option2">Collaborator</label>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Step 2 Content -->
                    <div id="step2" class="step-content d-none">
                        <h3>Primary Field</h3>
                            <div class="row">
                                <h5>Choose Your Primary Field/Skills in which you can contrbuite</h5>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Enter" id="SkillText">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary" type="button" id="addSkills"> 
                                            <!-- we will use this button to add checked radio button with data-->
                                            <i >&#43;</i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                           <div class="container row skills">

                           
                            <!--this contaier will containes the radio button -->
                           </div>
                            <div class="row">
                                <h5>Select Sub-Skills Within Your Primary Field</h5>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Enter text here" id="SubSkillText">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary" type="button" id="addSubSkills"> 
                                            <!-- we will use this button to add checked radio button with data-->
                                            <i >&#43;</i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="container row subSkills">

                           
                                <!--this contaier will containes the radio button -->
                               </div>
                        
                    </div>
                    
                    <!-- Step 3 Content -->
                    <div id="step3" class="step-content d-none">
                        <h2>Select Sub-Skills</h2>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    
                    <!-- Navigation Buttons -->
                   
                </div>
            </div>
        </div>

        </form>
        <div class="mt-3 row">
            <button class="btn btn-primary col" id="prevBtn">Previous</button>
            <button class="btn btn-primary col" id="nextBtn">Next</button>
        </div>
       
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
 integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
 
 <script src="../../public/js/addSkills.js"></script>   
 <script src="../../public/js/slider.js"></script>
 </html>