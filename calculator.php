 <!DOCTYPE html>
<html lang="en">
<head>
    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-8SBVXQMW9E"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-8SBVXQMW9E');
</script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link href="style.css" rel="stylesheet">
    <title>Attendance Calculator</title>
</head>
<body class="bg-dark">

  <nav class="navbar navbar-dark bg-success fixed-top" style="position: fixed;float:top;">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.html" color="white" id="title"><h3><b>&nbsp&nbsp&nbspATTENDIFY</b></h3></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-end text-bg-dark" style="max-width: 50%;" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Useful Links</h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="javascript:tools();">Tools</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="javascript:about();">About Us</a>
            </li>
              <li class="nav-item">
               <a class="nav-link" href="https://t.me/AttendifySuggestions"><button class="btn btn-success"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telegram" viewBox="0 0 16 16">
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.287 5.906c-.778.324-2.334.994-4.666 2.01-.378.15-.577.298-.595.442-.03.243.275.339.69.47l.175.055c.408.133.958.288 1.243.294.26.006.549-.1.868-.32 2.179-1.471 3.304-2.214 3.374-2.23.05-.012.12-.026.166.016.047.041.042.12.037.141-.03.129-1.227 1.241-1.846 1.817-.193.18-.33.307-.358.336a8.154 8.154 0 0 1-.188.186c-.38.366-.664.64.015 1.088.327.216.589.393.85.571.284.194.568.387.936.629.093.06.183.125.27.187.331.236.63.448.997.414.214-.02.435-.22.547-.82.265-1.417.786-4.486.906-5.751a1.426 1.426 0 0 0-.013-.315.337.337 0 0 0-.114-.217.526.526 0 0 0-.31-.093c-.3.005-.763.166-2.984 1.09z"/>
</svg>&nbsp&nbspSuggestions</button></a><br><div class="suggestionbox"></div>
            </li>
        </div>
      </div>
    </div>
  </nav>
  <div class="innerhtml" style="  margin-top:10em;">
      <center>
      <h1 class="css-1a6ercr align-center" style="font-size: 50px; color: white;">Attendance Calculator</h1><br></center>
  <div class="form-center">
              <form class="row g-3" method="post" name="upload_excel" enctype="multipart/form-data">
                  <div class="input-group mb-3" style="width:225px;">
  <input type="number" class="form-control" name="percnt" min="1" max="99" placeholder="Desired Attendance" aria-label="Desired Attendance" aria-describedby="basic-addon2" required>
  <span class="input-group-text" id="basic-addon2" style="width: 40px;">%</span>
</div>
  <div class="col-auto">
    <input type="file" accept=".csv" name="file" id="file" class="input-large form-control ipupcsv" required>
    <label for="csvfile" style="color:white;" class="form-label upcsv">*Upload Only <a href="https://erp.skit.ac.in/reports/student_aggregate" style="text-decoration: none;"><b style="color:#198754;">.CSV</b></a> File (Do not Upload Individual .CSV File)</label>
  </div>
  <div class="col-auto">
  <div class="upload"><button type="submit" id="submit" name="Import" class="btn btn-success"  data-loading-text="Loading...">Upload</button>
  </div>
</form></div></div><center><br><br><img id="my_image" class="img-fluid" src=""/></center>

                             <?php
                        				function prt($array)
                            {
                                 $prcnt=$_POST["percnt"]; 
                             $tp=0;
                             $ta=0;
                             $od=0;
                             $hrs=0;
                             for($i=1;$i<count($array);$i++)
                             {
                            $tp+=$array[$i][4];
                            $ta+=$array[$i][6];
                            $od+=$array[$i][5];
                             }
                             //echo $tp." ".$ta." ".$od;
                            
                             if($prcnt>((($tp+$od)/($tp+$od+$ta))*100))
                             {
                                $th=$tp+$ta+$od;
                                 $pr=$prcnt/100;
                                $pr2=1-$pr;
                                 $hrs=(($pr*$th)-$tp-$od)/$pr2;
                                 $tmp=(int)$hrs;
                                 if($hrs/$tmp!=1)
                               {
                               settype($hrs, "integer");
                               $hrs+=1;
                               }
                            return $hrs;
                             }
                           else{
                               echo $tp." ".$ta." ".$od;
                               $th=$tp+$ta+$od;
                                 $pr=$prcnt/100;
                            $hrs=($tp+$od-($pr*$th))/$pr;
                           $tmp=(int)$hrs;
                                 if($hrs/$tmp!=1)
                           {
                               settype($hrs, "integer");
                               $hrs=$tmp;
                           }
                            return $hrs*-1;
                        } 
                                
                            }
                            			function aggr($array)
                            {
                                 $prcnt=$_POST["percnt"]; 
                             $tp=0;
                             $ta=0;
                             $od=0;
                             for($i=1;$i<count($array);$i++)
                             {
                            $tp+=$array[$i][4];
                            $ta+=$array[$i][6];
                            $od+=$array[$i][5];
                             }
                             settype($agg,"double");
                             $agg=($tp+$od)/($ta+$tp+$od);
                            return $agg;
                        } 
                                
                            
                            ?>
                            
                <?php
if(isset($_POST["Import"])){
		if (($_FILES["file"]["type"] == "text/csv"))
		{
		if(($_FILES["file"]["size"]<5*1024))
{
    function csvToArray($csvFile){
 
        $file_to_read = fopen($csvFile, 'r');
     
        while (!feof($file_to_read) ) {
            $lines[] = fgetcsv($file_to_read, 1000, ',');
     
        }
     
        fclose($file_to_read);
        return $lines;
    }
    function build_table($array){
        // start table
        $html = '<table class="table table-dark">';
          $prcnt=$_POST["percnt"];
        // data rows
        $i=0;
        foreach( $array as $key=>$value){
            $html .= '<tr>';
            foreach($value as $key2=>$value2){
                $html .= '<td>' . htmlspecialchars($value2) . '</td>';
                
            }
           if($i==0)
           {
               $html .= '<td>' . "Individual Hours" . '</td>';
               $i++;
           }
            else
            {
            $p=0;
            $a=0;
            $o=0;
            $p=$array[$i][4];
            $a=$array[$i][6];
            $o=$array[$i][5];
            $pr=$array[$i][7];
            if($pr<$prcnt)
                       {
                           $tth=$p+$a+$o;
                                 $prr=$prcnt/100;
                                $prr2=1-$prr;
                                 $h=(($prr*$tth)-$p-$o)/$prr2;
                                 $t=(int)$h;
                                 if($h/$t!=1)
                               {
                               settype($h, "integer");
                               $h+=1;
                               }
                             }
                           else{
                               $tth=$p+$a+$o;
                                 $prr=$prcnt/100;
                            $h=($p+$o-($prr*$tth))/$prr;
                           $t=(int)$h;
                                 if($h/$t!=1)
                           {
                               settype($h, "integer");
                               $h=$t;
                           }
                        }

            $i++;
            ($prcnt>$pr)?$html .='<td class="bg-danger" ><b>' . $h . '</b> (To Take) </td>':$html .='<td class="bg-success"><b>' . abs($h) . '</b> (Can Leave) </td>';
            }
            $html .= '</tr>';
        }
    
        // finish table and return it
    
        $html .= '</table>';
        return $html;
    }
    //read the csv file into an array
    $csvFile =$_FILES["file"]["tmp_name"];
    $array = csvToArray($csvFile);
    // $aggri=aggr($array);
    $hr = prt($array);
    
    if($hr<50&&$hr>=0){
    echo '<script>$("#my_image").attr("src","meme/at75.jpeg").width(500).height(300);</script>';
    }
        if($hr>=70&&$hr<90){
    echo '<script>$("#my_image").attr("src","meme/kkrh.jpg").width(500).height(300);</script>';
    }
    if($hr<0){
    echo '<script>$("#my_image").attr("src","meme/amab.jpeg").width(500).height(300);</script>';
    }
    if($hr>=50&&$hr<70){
    echo '<script>$("#my_image").attr("src","meme/hope.jpg").width(500).height(300);</script>';
    }
     if($hr>=90){
    echo '<script>$("#my_image").attr("src","meme/kttbb.jpeg").width(500).height(300);</script>';
    }
    ?><center><br><div class="card bg-dark " style="width: fit-content;
    block-size: fit-content;">
   <h5 class="card-header bg-dark" style="color:white; text-align:left;"><?php
   if($hr>0){
  echo  $hr . ' Hours of Regular classes required to reach the ' . $_POST['percnt'] . ' %  <b>(Present Aggregate Attendance = '.number_format(aggr($array)*100.00, 2).'%)</b></h5> ';
  }
  else
  {
  echo  ' You can Leave ' .  abs($hr) . ' Hours of Regular Classes to Reach '. $_POST['percnt'] . ' %  ( Present Aggregate Attendance = '.number_format(aggr($array)*100.00, 2).' )</h5> ';
  }?>
  <div class="card-body bg-dark"><?php
    echo build_table($array);
    echo '</div> </div></center>';
}
else
echo '<script src="//code.jquery.com/jquery-1.12.4.js"></script>
  <script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script><script>$(".upcsv").css("color","red");$( ".ipupcsv" ).effect( "shake" );</script><script>$("#my_image").attr("src","meme/tut.jpeg").width(420).height(300);</script>';
}
else 
{
    echo '<script src="//code.jquery.com/jquery-1.12.4.js"></script>
  <script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script><script>$(".upcsv").css("color","red");$( ".ipupcsv" ).effect( "shake" );</script>';
    
}
	}	 
?>	</div></div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<!-- Footer -->
    <div id="footer" class="sticky-footer">
      <footer class="text-center text-lg-start bg-dark text-muted">
        <!-- Section: Social media -->
        <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
          <!-- Left -->
          <div class="me-5 d-none d-lg-block">
            <span>Get connected with us on social networks:</span>
          </div>
          <!-- Left -->
      
          <!-- Right -->
          <div>
            <a href="https://t.me/+hML04f9A6q5mYjdl" class="me-4 text-reset">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telegram" viewBox="0 0 16 16">
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.287 5.906c-.778.324-2.334.994-4.666 2.01-.378.15-.577.298-.595.442-.03.243.275.339.69.47l.175.055c.408.133.958.288 1.243.294.26.006.549-.1.868-.32 2.179-1.471 3.304-2.214 3.374-2.23.05-.012.12-.026.166.016.047.041.042.12.037.141-.03.129-1.227 1.241-1.846 1.817-.193.18-.33.307-.358.336a8.154 8.154 0 0 1-.188.186c-.38.366-.664.64.015 1.088.327.216.589.393.85.571.284.194.568.387.936.629.093.06.183.125.27.187.331.236.63.448.997.414.214-.02.435-.22.547-.82.265-1.417.786-4.486.906-5.751a1.426 1.426 0 0 0-.013-.315.337.337 0 0 0-.114-.217.526.526 0 0 0-.31-.093c-.3.005-.763.166-2.984 1.09z"/>
</svg>
            </a>
          </div>
          <!-- Right -->
        </section>
        <!-- Section: Social media -->
      
        <!-- Section: Links  -->
        <section class="">
          <div class="container text-center text-md-start mt-5">
            <!-- Grid row -->
            <div class="row mt-3">
              <!-- Grid column -->
              <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                <!-- Content -->
                <h6 class="text-uppercase fw-bold mb-4">
                  <i class="fas fa-gem me-3" id="tnc"></i>Terms and Conditions</h6>
                <p>
                  By Using Our Website the User Grants Us the Permission to Use the CSV File Which He/she Uploaded in Order to Calculate the Remaining Hours.
                </p>
              </div>
              <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                <!-- Content -->
                <h6 class="text-uppercase fw-bold mb-4">
                  <i class="fas fa-gem me-3"></i>Team Description
                </h6>
                <p>
                  We Are Team Legacy,Inspired by the idea to create a legacy for students all around the world.
                  This website is created in order to save students from getting debarred from examinations due to low 
                  attendance.<br><br>
                  Developers:-<br>
                  <b>Kunal Jain&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="https://www.instagram.com/_kunal29jn_/" title="Contact Kunal"class="me-4 text-reset"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
  <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
</svg></a>
                  <br>
                  Jainam Jain&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <a href="https://www.instagram.com/rockkjainam/" title="Contact Jainam" class="me-4 text-reset"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
  <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
</svg></a>
                  <br>
                  Kavya Khandelwal&nbsp&nbsp  <a href="https://github.com/k24747" title="Contact Kavya" class="me-4 text-reset"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
  <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
</svg></a></b>
                  <br>
                  
                </p>
                
              </div>
      
              <!-- Grid column -->
              <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                
                <h6 class="text-uppercase fw-bold mb-4">
               Useful Links
                </h6>
                <p>
                  <a href="index.html" class="me-4 text-reset">Home</a>
                </p>
                <p>
                  <a href="javascript:tools();" class=" me-4 text-reset">Tools</a>
                </p>
                <p>
                  <a href="#!" class=" me-4 text-reset">Tutorial</a>
                </p>
                <p>
                  <a href="javascript:about();" id="about" class=" me-4 text-reset">About Us</a>
                </p>
              </div>
              <!-- Grid column -->
      
             
              <!-- Grid column -->
            </div>
            <!-- Grid row -->
          </div>
        </section>
        <!-- Section: Links  -->
      
        <!-- Copyright -->
        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
          © 2022 Copyright: <b>Team Attendify</b>
        </div>
        <!-- Copyright -->
      </footer>
      </div>
      <!-- Footer -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
<script src="script.js"></script>
</body>
</html>