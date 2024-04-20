<?php
$pageTitle = "About";
require_once 'header.php';
?>

<!--Main-->
<main class="container mt-5">
  <section>
    <h2>Our Story</h2>
    <p>
      Hello! We are a group from the CWU-Des Moines Computer Science cohort 
      and we are creating a Self-Placement Exam for prospective CS students.
      We believe students should feel well prepared before enrolling in their 
      introductory Computer Science class. This will provide a solution for 
      students to see where they stand, and for advisors to be more 
      well informed on their new CS advisees. 
    </p>
  </section>

  <section>
    <h2>Our Team</h2>
    <div class="row">
      <div class="col-md-4">
        <div class="card">
          <img src="team-member1.jpg" class="card-img-top" alt="Team Member 1" />
          <div class="card-body">
            <h5 class="card-title">John Doe</h5>
            <p class="card-text">Web Developer</p>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card">
          <img src="team-member2.jpg" class="card-img-top" alt="Team Member 2" />
          <div class="card-body">
            <h5 class="card-title">Jane Smith</h5>
            <p class="card-text">Designer</p>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card">
          <img src="team-member3.jpg" class="card-img-top" alt="Team Member 3" />
          <div class="card-body">
            <h5 class="card-title">Mike Johnson</h5>
            <p class="card-text">Marketing Specialist</p>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<!--End of Main-->

<?php
// Include footer.
require_once 'footer.php';
?>
