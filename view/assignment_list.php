<?php  include 'view/header.php'; ?>
<div class="container">
  <div class="card">
    <div class="card-body">
      <div class="row">
        <div style="background:lightblue; padding: 10px; margin: 0;" class="col-12">
          <div class="row">
            <div class="col-4">
              <h3 class="card-title">Assignment</h3>
            </div>
            <div class="col-8">
              <form action="." method="get" id="" class="">

                <div class="form-row">
                  <div class="row">
                    <div class="col-2">
                      <input type="hidden" name="action" value="list_assignments">
                    </div>
                    <div class="col-8">
                      <select class="form-control" name="course_id" id="" required>
                        <option value="0">View All</option>
                        <?php foreach($courses as $course): ?>
                        <?php if($course_id == $course['courseID']){ ?>
                        <option value="<?= $course['courseID'] ?>" selected>
                          <?php } else{ ?>
                        <option value="<?= $course['courseID'] ?>">
                          <?php } ?>
                          <?= $course['courseName'] ?>
                        </option>
                        <?php endforeach; ?>
                      </select>
                    </div>
                    <div class="col-2"><button class="btn btn-primary">Go</button></div>

                  </div>

                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- list body -->

      <section class="list">
        <?php if($assignments){ ?>
        <?php foreach($assignments as $assignment): ?>
        <ol class="list-group list-group-numbered">
          <li class="list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto">
              <div class="fw-bold"><?= $assignment['courseName'] ?></div>
              <?= $assignment['description'] ?>
            </div>
            <form action="." method="post"><input type="hidden" value="delete_assignment" name="action"><input
                name="assignment_id" type="hidden" value="<?= $assignment['ID'] ?>"> <button>X</button> </form>
          </li>
        </ol>
        <?php endforeach; ?>
        <?php }else{ ?>
        <br>
        <?php if($course_id){ ?>
        <ol class="list-group list-group-numbered">
          <li class="list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto">
              <div class="fw-bold">No assignment for the course yet</div>
            </div>
          </li>
        </ol>
        <?php }else{  ?>
        <ol class="list-group list-group-numbered">
          <li class="list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto">
              <div class="fw-bold">No assignments exits yet</div>
            </div>
          </li>
        </ol>
        <?php } ?>
        <br>
        <?php } ?>
      </section>
      <!-- list body section ends -->

      <section class="add">
        <h2 class="card-title">Add Assignment</h2>
        <form class="form-row" action="." method="post">
          <input name="" type="hidden" value="add_assignment">
          <div class="add_input">
            <label>Course :</label>
            <select class="form-control" name="course_id" required>
              <option value="">Please Select</option>
              <?php foreach($courses as $course): ?>
              <option value="<?= $course['courseID']; ?>"><?= $course['courseName']; ?>
              </option>
              <?php endforeach; ?>
            </select>
            <label>Description :</label>
            <input type="text" class="form-control" name="description" maxlength="120" placeholder="Description"
              required>
          </div>
          <div class="delete"><button class="btn btn-delete">X</button> </div>
        </form>
      </section>
      <br>
      <p><a href="?.action=list_courses">View/Edit Courses</a></p>
    </div>
  </div>

</div>


<?php  include 'view/footer.php'; ?>