<?php  include 'view/header.php'; ?>
<?php if($courses){ ?>
<div class="card">
  <div class="card-body">
    <header>
      <h2 class="card-title">Course List</h2>
    </header>
    <?php foreach($courses as $course): ?>
    <ol class="list-group list-group-numbered">
      <li class="list-group-item d-flex justify-content-between align-items-start">
        <div class="ms-2 me-auto">
          <div class="fw-bold"><?= $course['courseName']; ?></div>
        </div>
        <form action="." method="post">
          <input type="hidden" name="action" value="delete_course">
          <input type="hidden" name="course_id" value="<?= $course['courseID']; ?>">
          <button type="button">X</button>
        </form>
      </li>
    </ol>
  </div>
  <?php endforeach; ?>
  <!-- card body ends -->
  <div>
    <?php  }else{  ?>
    <ol class="list-group list-group-numbered">
      <li class="list-group-item d-flex justify-content-between align-items-start">
        <div class="ms-2 me-auto">
          <div class="fw-bold">No courses exist yet</div>
        </div>
      </li>
    </ol>
    <?php } ?>
    <div class="card">
      <div class="card-body">
        <div class="card-title"> Add Course </div>
        <form action="." method="post">
          <input name="action" type="hidden" value="add_course">
          <div class="add_input">
            <label for="">Name :</label>
            <input type="text" name="course_name" placeholder="Name" autofocus required>
          </div>
          <div class="add">
            <button class="btn btn-success">add</button>
          </div>
        </form>
      </div>
    </div>

<p><a href="."> View &amp; Add Assignments</a></p>
    <?php  include 'view/footer.php'; ?>