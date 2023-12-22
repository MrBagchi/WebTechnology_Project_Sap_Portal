<?php
$insert=false;

$con = mysqli_connect('localhost:3306', 'root', '','student_database');


$txtName = $_POST['Name'];
$txtRoll = $_POST['Roll_no'];
$txtPursuing = $_POST['Pursuing'];
$txtBranch = $_POST['Branch'];
$txtDob = $_POST['D_O_B'];
$txtGender = $_POST['Gender'];
$txtPhone = $_POST['Phone'];




$sql = "INSERT INTO `stdetails` (`Name`, `Roll_Number`, `Pursuing`, `Branch`,`D_O_B`,`Gender`,`Phone`) VALUES ( '$txtName', '$txtRoll', '$txtPursuing', '$txtBranch','$txtDob','$txtGender','$txtPhone')";


$rs = mysqli_query($con, $sql);

if($rs)
{
echo " ";

$insert=true;
}

?>



      
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Forms</title>
    <style>
     .bdy{
      background-image: url("hd-wallpaper-1468883.jpg");
      mix-blend-mode:multiply;

      background-size: cover;
      background-color:  rgba(245, 186, 113, 0);  
    }
      a:link {
        text-decoration: none;
        color: black;
      }
      a:visited {
        text-decoration: none;
        color: black;
      }
      a:hover {
        text-decoration: none;
        color: rgb(255, 204, 204);
      }
      a:active {
        text-decoration: none;
        color: black;
      }
     
      .HEAD {
        padding: 1px;
        margin: 0px 0px;
        background-color: rgb(255, 88, 88);
        font-family: "Baskerville Old Face";
        text-align: center;
        border-radius: 3px;
      }
      .form {
        text-align: left;
        margin: 0 auto;
       width: 70%;
     
        box-shadow: 10px 10px 30px  rgba(113, 35, 35, 0.355);
		
       
      }
     
      fieldset{
        border-radius: 15px;
        transition-duration: 0.5s;
        background-color:  rgb(245, 186, 113);  
      }
      fieldset:hover{
        border-radius: 5px;
        font-size: 16px;
        background-color:  rgba(253, 177, 85, 0.814);
      }
      .GFG {
        transition-duration: 0.5s;
      }
      input[type=text]:focus,input[type=number]:focus,input[type=date]:focus {
        background-color: rgba(186, 238, 255, 0.947);
       
      } {
        background-color: rgba(186, 238, 255, 0.947);
       
      }
      input[type=text],input[type=number],input[type=date],select
      { 
        box-shadow: 2px 2px 2px  rgba(96, 21, 21, 0.469) inset;
        width: 100%;
      }
      .GFG:hover {
        background-color: #a40a45;
        color: rgb(255, 204, 204);
        font-size: 15px;
        font-family: "Trebuchet MS", "Lucida Sans Unicode", "Lucida Grande",
          "Lucida Sans", Arial, sans-serif;
        border-radius: 4px;
      }
      .SubmitMsg{
        background-color:rgba(81, 243, 81, 0.89);
        color:black;
        
      }   
     
      #grad {
        background-image: linear-gradient(
          to bottom right,
          rgb(255, 88, 88, 1),
          rgba(216, 39, 39, 0.279)
        );
      }
     
    </style>
  </head>

  <body>
    <div class="HEAD" id="grad"><h1>Student's Registration</h1></div>
    <div class="bdy"><hr
      style="
        height: 2px;
        border-width: 1px;
        color: gray;
        background-color: gray;
      "
    />
   
 
    
      <div class="form">
         <form method="post" action="Student_Details.php">
          <fieldset>
          <?php
     if($insert == true)
     {
      echo " <script>

	  window.confirm('Are you sure you want to submit?');
	
	</script>
	<p class = 'SubmitMsg'>
        <i>Your Form has been submitted succesfully!Thanks for registering with Us,We will be in touch soon. 
        </i>
      </p> ";
    }
      ?>
            <tr>
              <th><b>Student's Name: </b></th>
               <td>
                 <input type="text" placeholder="Enter Your First Name"  style=" 
                 padding: 3px 3px;
                 margin: 0px 0px;
                 box-sizing :border-box; border-radius: 4px ;border: none;
                 border-bottom: 2px solid rgb(255, 88, 88);" name="Name">
            
            </td>
              <br />
           
            </tr>
            <br />
            <tr>
             
              
                  <th><b>Roll Number : </b></th>
               <td>
                
                <input type="number" placeholder="Enter Your Roll Number" style=" 
                padding: 3px 3px;
                margin: 2px 0;
                box-sizing :border-box; border-radius: 4px ;border: none;
                border-bottom: 2px solid rgb(255, 88, 88);"; name="Roll_no"/>
                <br /> 
              </td>
           
                <br />
            
          </tr>
                  
                  <tr>
                    <td><b>Pursuing : </b></td>
                    <select  name="Pursuing" style=" 
                    padding: 3px 3px;
                    margin: 2px 0;
                    box-sizing :border-box; border-radius: 4px ;border: none;
                    border-bottom: 2px solid rgb(255, 88, 88);"; >
                      <option value="B.Tech">B.Tech</option>
                      <option value="B.Sc ">B.Sc</option>
                      <option value="MBA">MBA</option>
                      <option value="M.Tech">M.Tech</option>
                      <option value="M.Sc">M.Sc</option>
                     
                    </select>
                  </tr> <br><br> 
                  <tr>
                    <th><b>Branch : </b></th>
                    <td><input type="text" name="Branch" style=" 
                      padding: 3px 3px;
                      margin: 2px 0;
                      box-sizing :border-box; border-radius: 4px ;border: none;
                      border-bottom: 2px solid rgb(255, 88, 88);"; placeholder="Enter your Branch">
                      <!-- <input type="radio" name="Branch" value="CSE" />CSE 
                      <input type="radio" name="Branch" value="IT" />IT
                      <input type="radio" name="Branch" value="CSSE" />CSSE
                      <input type="radio" name="Branch" value="CSCE" />CSCE                      
                      <input type="radio" name="Branch" value="MECH." />MECH
                       <input type="radio" name="Branch" value="OTHER" />OTHER -->
                    </td>
                  </tr>
      
                  <br /><hr>
                  <td><b>D.O.B : </b></td>
                  <td>
                    <input type="date" name="D_O_B" placeholder="Enter Date" style=" 
                    padding: 3px 3px;
                    margin: 2px 0;
                    box-sizing :border-box; border-radius: 4px ;border: none;
                    border-bottom: 2px solid rgb(255, 88, 88)";/>
                    <br />
                  </td>
                </tr>
              
            </tr>
            <br />
            <tr>
              <th><b>Gender : </b></th>
              <td>
                <input type="radio" name="Gender" value="Male" />Male
                <input type="radio" name="Gender" value="Female" />Female
                <input type="radio" name="Gender" value="Other" />Other
              </td>
            </tr>
            <br><br>
            <tr>
              <td><b>Phone : </b></td>
              <td>
                <input type="number" name="Phone" placeholder="+91-9999999999" style=" 
                padding: 3px 3px;
                margin: 2px 0;
                box-sizing :border-box; border-radius: 4px ;border: none;
                border-bottom: 2px solid rgb(255, 88, 88)"; />
               
              </td>
            </tr>
           
            
            
            
            <br />
            <hr />
            <input class="GFG" type="submit" name="Register" value="Submit">
            <button class="GFG">
              <a href="studentpromt.html" target="Body">Cancel</a>
            </button>
          </fieldset>
        </form>
       </div> 
       </div>
   
  </body>
</html>


