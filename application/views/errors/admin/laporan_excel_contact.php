<?php
 header("Content-type: application/vnd-ms-excel");
 header("Content-Disposition: attachment; filename=$title.xls");
 header("Pragma: no-cache");
 header("Expires: 0");
 ?>
 
 <table width="100%" cellspacing="0">
    <thead>
      <tr>
        <th>No</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Message</th>
      </tr>
    </thead>

    <tbody>
      <?php $i=1; 
      foreach($contact as $contact) : ?>
        <tr>
          <td>
            <?php echo $i++?>
          </td>
          <td>
            <?php echo $contact->name ?>
          </td>
          <td>
            <?php echo $contact->email ?>
          </td>
          <td>
            <?php echo $contact->phone ?>
          </td>
          <td>
            <?php echo $contact->message ?>
          </td>     
        </tr>
      <?php endforeach; ?>
    </tbody>
 </table>