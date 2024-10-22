<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SLN City</title>
 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    
    
    <script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <script>
            function googleTranslateElementInit() {
      var translator = new google.translate.TranslateElement({
      pageLanguage: 'en',
      includedLanguages : 'en,kn,hi',
      autoDisplay: false,
      multilanguagePage: false,
      layout: google.translate.TranslateElement.InlineLayout.SIMPLE
   }, 'google_translate_element');
        }

    
</script>

<style>
body {
  background-color: rgb(210, 211, 214);
}
body {
    top: 0px !important;
}
.VIpgJd-ZVi9od-ORHb-OEVmcd{
   display: none;
}
.goog-te-gadget-simple{
     background-color:#FBFBFB; 
     color: #FBFBFB; 
     border-radius: 5px; 
     margin-left: 5px; 
    
}
.goog-te-gadget-icon{
    display: none;
}

  </style>
</head>
<body>
    <div id="google_translate_element" class"ml-4"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7">

                <div class="card ">
                    <div class="card-header text-center">
                        <h4>SLN City </h4>
                    </div>
                    <div class="card-body">
                   
                        <form action="" method="GET">
                            <div class="r">
                                <div class="col-md-8">
                                    <input type="text" name="id" value="<?php if(isset($_GET['id'])){echo $_GET['id'];} ?>"  placeholder="Site No" class="form-control">
                                    <!-- <input type="text" name="db" value="<?php if(isset($_GET['db'])){echo $_GET['db'];} ?>"  class="form-control"> -->
                                    <!--<select name="db" class="form-select mt-2">-->
                                        <!--<option value="">Select</option>-->
                                        <!-- <option value="ajjanahalli">Ajjanahalli </option>
                                        <option value="byalalu">Byalalu</option> -->
                                        <!--<option value="dodd">doddamaranahalli</option>-->
                                         <!--<option value="hulu">Huluvenahalli</option>-->
                                         <!--<option value="sln">sln</option>-->
                                        <!-- <option value="other">other</option> -->
                                    </select> 
                                </div >
                                <div class="row">
                                <div class="col-md-4 mt-2">
                                    <button type="submit" class="btn btn-primary">Get Details</button>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <a href="sln.php"  class="btn btn-info">Reset</a>
                                </div>
                                
                                </div>
                            </div>
                            
                        </form>

                        <div class="row"  >
                            <div class="col-md-12" >

                                <hr>
                                <?php 
                            $con = mysqli_connect("localhost","id20649148_mithun","Mithun@057","id20649148_mithun");

                                    if(isset($_GET['id']) )
                                    {
                                        $id = $_GET['id'];
                                      //  $db = $_GET['db'];
                                    
                                        $query = "SELECT * FROM sln WHERE id='$id' ";
                                        $query_run = mysqli_query($con, $query);
                                    
                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $key=>$row)
                                            {
                                               
                                                ?>
                                                <div id="myfnc<?php echo $key?>">
                                                    
                                          
                                                
                                                <table class="table" >
                                                                                  <tbody>
                                                                                      
                                                                                      <!-- <tr class="table-secondary">
                                                                                        <td ><b> <?php echo $row['block']  ?> </b>
                                                                                    </td>
                                                                                         </tr> -->
                                                                                        <tr class="table-light">
                                                                                        <td ><b> Site No </b></td>
                                                                                        <!-- </tr>
                                                                                        <tr class="table-active"> -->
                                                                                        <td><?php echo $row['siteno']  ?></td>        </tr>
                                                                                        <tr class="table-light">
                                                                                        <td><b> Site size </b></td>
                                                                                        <!-- </tr>
                                                                                        <tr class="table-active"> -->
                                                                                        <td><?php echo $row['sitesize'] ?></td>        </tr>
                                                                                        <tr class="table-light">
                                                                                        <td><b> Society Name</b></td>
                                                                                        <!-- </tr>
                                                                                        <tr class="table-active"> -->
                                                                                        <td><?php echo $row['socityname'] ?></td>        </tr>
                                                                                        <tr class="table-light">
                                                                                        <td><b> Member Name</b></td>
                                                                                        <!-- </tr>
                                                                                        <tr class="table-active"> -->
                                                                                        <td><?php echo $row['name'] ?></td>
                                                                                        </tr>
                                                                                        <tr class="table-light">
                                                                                        <td><b>Address </b> </td>
                                                                                        
                                                                                        <!-- </tr>
                                                                                        <tr class="table-active"> -->
                                                                                        <td><?php echo $row['address'] ?></td></tr>
                                                                                        <tr class="table-light">
                                                                                        <td><b> Phone No</b><br>
                                                                                        </td>
                                                                                        <!-- </tr>
                                                                                        <tr class="table-active"> -->
                                                                                        <td><?php echo $row['number'] ?></td></tr>
                                                                                    </tbody>
                                                                                    </table>   
                                                                                    <b> <?php echo $row['block']  ?> </b>
                                                                                   
                                                <!-- <h4> <?php echo $row['phone'] ?></h4>
                                                <h4> <?php echo $row['class'] ?></h4>
                                                <h4> <?php echo $row['name'] ?></h4> -->
                                                
                                               
                                                
                                                
                                             
                                                      <script>
                                                          function myPrint<?php echo $key?>(myfnc<?php echo $key;?>) {
                                                              var printdata = document.getElementById("myfnc<?php echo $key;?>");
                                                              newwin = window.open("");
                                                              newwin.document.write(printdata.innerHTML);
                                                              newwin.print();
                                                              newwin.close();
                                                          }
                                                      </script>
                                                       </div>
                                                       <p align="center"><input type="button" class="btn btn-secondary" onclick="myPrint<?php echo $key?>(myfnc<?php echo $key;?>)" value="Print"></p>
                                                    <?php
                                            }
                                        }

                                        else
                                        {
                                            echo "No Record Found";
                                        }
                                    
                                    
                                    }
                                   
                                ?>

                            </div>
                            
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
<!--</body>-->
</html>

