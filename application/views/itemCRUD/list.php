<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Codeigniter 3 CRUD Example from scratch</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="<?php echo base_url('itemCRUD/create') ?>"> Create New Book</a>
        </div>
    </div>
</div>


<table class="table table-bordered">


  <thead>
      <tr>
          <th>Name</th>
          <th>Introduction</th>
          <th>Selling Price</th>
          <th width="220px">Action</th>
      </tr>
  </thead>


  <tbody>
   <?php foreach ($data as $book) { ?>      
      <tr>
          <td><?php echo $book->name; ?></td>
          <td><?php echo $book->description; ?></td>     
          <td><?php echo $book->s_price; ?></td>               
      <td>
        <form method="DELETE" action="<?php echo base_url('itemCRUD/delete/'.$book->book_id);?>">
          <a class="btn btn-info" href="<?php echo base_url('itemCRUD/'.$book->book_id) ?>"> show</a>
         <a class="btn btn-primary" href="<?php echo base_url('itemCRUD/edit/'.$book->book_id) ?>"> Edit</a>
          <button type="submit" class="btn btn-danger"> Delete</button>
        </form>
      </td>     
      </tr>
      <?php } ?>
  </tbody>


</table>