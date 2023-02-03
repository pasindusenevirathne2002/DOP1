<?php
    include("dbase.php");
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DO Project | Questions Page Template</title>
    <!-- Bootstrap Lib's css  -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    
    <!-- Custom styles for this template -->
    <link href="css/form-validation.css" rel="stylesheet">
  </head>
  <body class="bg-light">
    
<div class="container">
  <main>
    <div class="py-2 text-center">
      <h2>උපකාරක පන්ති</h2>
      <!-- <p class="lead">Some Description Here.</p> -->
    </div>

    <div class="row">
      <div class="col-md col-lg mb-4">
        <!-- <h4 class="mb-3">Some Form Titile Here</h4> -->
        <div class="needs-validation" id="myForm" method="POST" novalidate>
          
          <div class="row g-3">

         
          <div class="col-12">
              <label for="ename" class="form-label">අධ්‍යාපන ආයතනයේ නම :</label>
              <div class="input-group has-validation">
                <!--<span class="input-group-text">@</span>-->
                <input type="text" class="form-control" id="eduname"placeholder="ආයතනයේ නම " required>
              <div class="invalid-feedback">
              කරුණාකර තොරතුරු ඇතුලත් කරන්න.
                </div>
              </div>
            </div>

            <div class="col-12">
              <label for="address" class="form-label">ලිපිනය :</label>
              <input type="text" class="form-control" id="address" placeholder="ආයතනයේ ලිපිනය " required>
              <div class="invalid-feedback">
              කරුණාකර තොරතුරු ඇතුලත් කරන්න.
              </div>
            </div>
           

            <div class="col-12">
              <!-- <h3></h3><u>උගන්වන විෂයන් සංඛ්‍යාව : </u></u></h3><br><br> -->
              <label for="all" class="form-label">උගන්වන විෂයන් සංඛ්‍යාව : </label>
                  <input type="number" class="form-control" id="all" placeholder="විෂයන් සංඛ්‍යාව ඉලක්කමෙන්" required>
              <div class="invalid-feedback">
              කරුණාකර තොරතුරු ඇතුලත් කරන්න.
                  </div>
              <!-- <div class="row g-3">
                <div class="col-sm-6">
                  <label for="al" class="form-label">අ.පො.ස.(උසස් පෙළ) විෂයන් සංඛ්‍යාව </label>
                  <input type="text" class="form-control" id="al"placeholder="විෂයන් සංඛ්‍යාව ඉලක්කමෙන්" required>
              <div class="invalid-feedback">
              කරුණාකර තොරතුරු ඇතුලත් කරන්න.
                  </div>
                </div>
    
                <div class="col-sm-6">
                  <label for="ol" class="form-label">අ.පො.ස.(සාමාන්‍ය පෙළ) විෂයන් සංඛ්‍යාව</label>
              <input type="text" class="form-control" id="ol" placeholder="විෂයන් සංඛ්‍යාව ඉලක්කමෙන්" value="" required>
              <div class="invalid-feedback">
              කරුණාකර තොරතුරු ඇතුලත් කරන්න.
              </div>
                </div>
                <div class="row g-3">
                  <div class="col-sm-6">
                    <label for="g5" class="form-label">5 ශ්‍රේණිය ශිෂ්‍යත්ව විභාග විෂයන් සංඛ්‍යාව</label>
                    <input type="text" class="form-control" id="g5" placeholder="විෂයන් සංඛ්‍යාව ඉලක්කමෙන්" value="" required>
                    <div class="invalid-feedback">
                    කරුණාකර තොරතුරු ඇතුලත් කරන්න.
                    </div>
                  </div>
      
                  <div class="col-sm-6">
                    <label for="other" class="form-label">වෙනත් විෂයන් සංඛ්‍යාව</label>
                    <input type="text" class="form-control" id="other" placeholder="විෂයන් සංඛ්‍යාව ඉලක්කමෙන්" value="" required>
                    <div class="invalid-feedback">
                    කරුණාකර තොරතුරු ඇතුලත් කරන්න.
                    </div>
                  </div> -->


              </div>

            <div class="col-12">
              <label for="children" class="form-label">ළමයින් සංඛ්‍යාව :</label>
              <input type="number" class="form-control" id="totchild" placeholder="ළමයින් සංඛ්‍යාව ඉලක්කමෙන්" required>
              <div class="invalid-feedback">
              කරුණාකර තොරතුරු ඇතුලත් කරන්න.
              </div>
            </div>

            <div class="col-12">
              <label for="teacher" class="form-label">උගන්වන ගුරුවරු සංඛ්‍යාව :<span class="text-muted"></span></label>
              <input type="number" class="form-control" id="totteach" placeholder="ගුරුවරු සංඛ්‍යාව ඉලක්කමෙන්" required>
              <div class="invalid-feedback">
              කරුණාකර තොරතුරු ඇතුලත් කරන්න.
              </div>
            </div>

            <div class="col-12">
              <label for="inno" class="form-label">ලියාපදිංචි අංකය :<span class="text-muted"></span></label>
              <input type="text" class="form-control" id="inno" placeholder="ලියාපදිංචි අංකය" required>
              <div class="invalid-feedback">
              කරුණාකර තොරතුරු ඇතුලත් කරන්න.
              </div>
            </div>

            
          </div>
          <div id="saved"> ....</div>
          <hr class="my-4">

          <button class="w-100 btn btn-success btn-lg" onclick ="adddata()" >SAVE</button>
          <input type="hidden" id="subno" value="0">
        </div>
      </div>
    </div>
  </main>
</div>





<div class="container">
        <main class="card mt-5 mb-5">

            <div class="card-header">
                <h4 class="text-center">උපකාරක පන්ති තොරතුරු </h4>
                <!-- <h6 class="text-center">Some Description Here.</h6> -->
            </div>

            <?php
                include "dbase.php";
            ?>
            <div class="card-body scroll-enable">
            
                <table class="table table-bordered table-striped" id=myTable>
                    <!-- Table Headings -->
                    <thead>
                        <!-- Table Heading 1st Row -->
                        <tr>
                            <!-- Table Heading Items -->
                            <th >අනු අංකය </th>
                           <th >ග්‍රා.නි.කො.</th> 
                            <th >අධ්‍යාපන ආයතනයේ නම</th>
                            <th>ලිපිනය</th>
                            <th >උගන්වන විෂයන් සංඛ්‍යාව </th>
                            <th >ළමයින් සංඛ්‍යාව </th>
                            <th >උගන්වන ගුරුවරු සංඛ්‍යාව </th>
                            <th>ලියාපදිංචි අංකය</th>
                            <th >Options</th>
                        </tr>
                        <!-- <tr>
                          <th>අ.පො.ස.(උසස් පෙළ)</th>
                          <th> අ.පො.ස.(සාමාන්‍ය පෙළ)</th>
                          <th> 5 ශ්‍රේණිය ශිෂ්‍යත්ව</th>
                          <th> වෙනත්</th>
                        </tr> -->
                    </thead>
                    <!-- Table Body -->
                    <tbody id="ttbl">
                        <!-- Table Body 1st Row. You can use this 1st row for loop -->
                        
                        </tbody>
                </table>
            </div>
        </main>
    </div>

 
      
 
  <!-- //Bootstrap Lib's Javascript -->

  <script src="js/form-validation.js"></script>
      <script src="jquery/jquery.min.js"></script>
	  <script type="text/javascript" src="myfun.js"> </script>
  </body>
  

  <script type="text/javascript">  
 

 function adddata(){
  var d1 =currval();
  $.ajax({
     url:'savedata.php',
     type:'POST',
     data:{vals:d1},
     success:function(json){
       // console.log(json);
       getdata()
        
        //$('#myTable').load(location.href + " #myTable");
        $("#saved").html(json);
        clear_entry();
       }
   })
}
function editdel(ids){
  var opt=ids.split(":");
  if(opt[0]=="del"){
    if(confirm("Do you want delete!")==false){
      return false;
    }

  }
  
    $.ajax({
      url:'deleditdata.php',
      type:'POST',
      data:{vals:ids},
      success:function(json){
          $("#saved").html(json);
        }
    })
  }
  getdata();
  function getdata(){
    $.ajax({
      url:'getdata.php',
      type:'POST',
      data:{},
      success:function(json){
          $("#ttbl").html(json);
        }
    })
  }

function clear_entry(){
  $("#eduname").val('')
  $("#address").val('')
  $("#all").val('')
  $("#totchild").val('')
  $("#totteach").val('')
  $("#inno").val('')
  
}

</script>

</html>
