
<div class="container">
  <h2>Learners List</h2>
  <hr />
  <div class="alluinfo">&nbsp;</div>
  <form class="" action="/usersc/export.php" method="post" name="upload_excel" enctype="multipart/form-data">
    <input type="submit" name="Export" class="btn btn-success" value="Export to CSV"/>
  </form>
  <div class="alluinfo">&nbsp;</div>
  <div class="table-responsive">
    <table id="paginate" class='table table-hover'>
      <thead class="thead-light">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Completion</th>
        </tr>
      </thead>
      <tbody>
          <?php
          //Cycle through users
          foreach ($userData as $v1) {
          ?>
          <tr>
              <td><?=$v1->fname?> <?=$v1->lname?></td>
              <td><?=$v1->email?></td>
              <td><?php if($v1->complete_X==0) {?> <p>incomplete</p> <?php } else {?> <p>complete</p> <?php }?></td>
          </tr>
          <?php } ?>
      </tbody>
    </table>
  </div>
</div>
