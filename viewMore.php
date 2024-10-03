<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>View More</title>
  <link rel="stylesheet" href="viewMore.css">
</head>
<body>
  
<section class="con_member">

  <div class="member_tine memberimg" onclick="startProgress('skill1')" >
      <div class="mini_profile">
        <img src="/viewbtn/images/tine.jpg" alt="">
      </div> 
      <div class="member_name" ><h5>Justine Oliva</h5></div>
  </div>

    <div class="member_otek memberimg"onclick="startProgress('skill2')">
      <div class="mini_profile">
        <img src="/viewbtn/images/marrwwwi.jfif" alt="">
      </div>
      <div class="member_name"><h5>Marwin Subito</h5></div>
    </div>
     
     <div class="member_ruz memberimg" onclick="startProgress('skill3')">
      <div class="mini_profile">
        <img src="/viewbtn/images/ruzel.jpg" alt="">
      </div>
      <div class="member_name"><h5>Ruzel Borromeo</h5></div>
     </div>

      <div class="member_seph memberimg" onclick="startProgress('skill4')">
        <div class="mini_profile">
          <img src="/viewbtn/images/seph.jpg" alt="">
        </div>
        <div class="member_name"><h5>Al Joseph Quizana</h5></div>
      </div>

       <div class="member_gab memberimg" onclick="startProgress('skill5')">
        <div class="mini_profile">
          <img src="/viewbtn/images/gab.jpg" alt="">
        </div>
        <div class="member_name"><h5>John Gabriel Escolano</h5></div>   
       </div>


       <!-- Skill progress sections, initially hidden -->
       <div class="skill" id="skill1">
        <h1>My Skill</h1>
    
        <li><h3>HTML</h3>
          <span class="bar"><span class="html"></span></span>
        </li>
        <li><h3>CSS</h3>
          <span class="bar"><span class="css"></span></span>
        </li>
        <li><h3>BOOTSTRAP</h3>
          <span class="bar"><span class="bootstrap"></span></span>
        </li>
        <li><h3>PHP</h3>
          <span class="bar"><span class="php"></span></span>
        </li>
      </div>

      <div class="skill" id="skill2">
        <h1>My Skill</h1>
    
        <li><h3>HTML</h3>
          <span class="bar"><span class="html2"></span></span>
        </li>
        <li><h3>CSS</h3>
          <span class="bar"><span class="css2"></span></span>
        </li>
        <li><h3>BOOTSTRAP</h3>
          <span class="bar"><span class="bootstrap2"></span></span>
        </li>
        <li><h3>PHP</h3>
          <span class="bar"><span class="php2"></span></span>
        </li>
      </div>
    
      <div class="skill" id="skill3">
        <h1>My Skill</h1>
    
        <li><h3>HTML</h3>
          <span class="bar"><span class="html3"></span></span>
        </li>
        <li><h3>CSS</h3>
          <span class="bar"><span class="css3"></span></span>
        </li>
        <li><h3>BOOTSTRAP</h3>
          <span class="bar"><span class="bootstrap3"></span></span>
        </li>
        <li><h3>PHP</h3>
          <span class="bar"><span class="php3"></span></span>
        </li>
      </div>
    
      <div class="skill" id="skill4">
        <h1>My Skill</h1>
    
        <li><h3>HTML</h3>
          <span class="bar"><span class="html4"></span></span>
        </li>
        <li><h3>CSS</h3>
          <span class="bar"><span class="css4"></span></span>
        </li>
        <li><h3>BOOTSTRAP</h3>
          <span class="bar"><span class="bootstrap4"></span></span>
        </li>
        <li><h3>PHP</h3>
          <span class="bar"><span class="php4"></span></span>
        </li>
      </div>
    
      <div class="skill" id="skill5">
        <h1>My Skill</h1>
    
        <li><h3>HTML</h3>
          <span class="bar"><span class="html5"></span></span>
        </li>
        <li><h3>CSS</h3>
          <span class="bar"><span class="css5"></span></span>
        </li>
        <li><h3>BOOTSTRAP</h3>
          <span class="bar"><span class="bootstrap5"></span></span>
        </li>
        <li><h3>PHP</h3>
          <span class="bar"><span class="php5"></span></span>
        </li>
      </div>


      <!-- This is the form where you will select the individual member to see their info -->
      <div class="con_ajax" style= "width: 150%;">
         <form class="select" style="color: white; margin-bottom: 30px; font-size: 20px;">
        Select a Developer:
        <select name="devs" onchange="showDevs(this.value)">
          <option value="">Select a Developer:</option>
          <option value="Justine Oliva">Justine Oliva</option>
          <option value="Marwin Subito">Marwin Subito</option>
          <option value="Ruzel Borromeo">Ruzel Borromeo</option>
          <option value="Al Joseph Quizana">Al Joseph Quizana</option>
          <option value="John Gabriel Escolano">John Gabriel Escolano</option>
        </select>
        </form>
        <div id="txtHint" style="color: white; line-height: 35px; "><b>Information will be listed here...</b></div>
      </div>
     
</section>




<script>
  function startProgress(skillId) {
    // Get the selected skill section by ID
    const skillSection = document.getElementById(skillId);
    
    // Toggle the visibility: if it's already displayed, hide it; otherwise, show it
    if (skillSection.style.display === 'block') {
      skillSection.style.display = 'none';
    } else {
      // Hide all other skill sections
      const allSkills = document.querySelectorAll('.skill');
      allSkills.forEach(skill => skill.style.display = 'none');

      // Show the selected skill section
      skillSection.style.display = 'block';

      // Trigger animation for skill bars
      skillSection.querySelectorAll('.bar span').forEach(span => {
        // Reset animation
        span.style.animation = 'none';
        span.offsetHeight; // Trigger reflow to restart animation
        span.style.animation = ''; // Start animation
      });
    }
  }
</script>


<!-- JavaScript function to handle AJAX request -->
<script>
function showDevs(cdName) {
  if (cdName === "") {
    document.getElementById("txtHint").innerHTML = "No Devs selected";
    return;
  }
  const xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
    if (this.readyState === 4 && this.status === 200) {
      document.getElementById("txtHint").innerHTML = this.responseText;
    }
  };
  xmlhttp.open("GET", "getdevs.php?NAME=" + cdName, true);
  xmlhttp.send();
}
</script>


</body>
</html>