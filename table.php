<!DOCTYPE html>
<html>

<head>
  <title>prints</title>
  <style>
    table {
      width: 50%;
      border-collapse: collapse;
      margin: auto;
      margin-top: 300px;
    }

    th,
    td {
      border: 1px solid black;
      padding: 8px;
      text-align: left;
    }

    th {
      background-color: lightgray;
    }
  </style>
</head>

<body>


  <table id="example1" class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>S.NO</th>
        <th>Name</th>
        <th>Email</th>

        <th>no</th>
        <th colspan="2">Operation</th>

      </tr>
    </thead>
    <tbody>
      <?php
      include('scon.php');

      $selectquery = " select * from reg";

      // $query = mysqli_query($con,$selectquery);
      
      // $num = mysqli_num_rows($query);
      
      // $res = mysqli_fetch_array($query);
      $sn = "1";

      $query = mysqli_query($con, "select * from reg");
      // $sn = "1";
      while ($res = mysqli_fetch_array($query)) {
        ?>
        <tr>
          <td>
            <?php echo $sn; ?>
          </td>
          <td>
            <?php echo $res['name'] ?>
          </td>
          <td>
            <?php echo $res['email'] ?>
          </td>

          <td>
            <?php echo $res['no'] ?>
          </td>
          <td> <a href="update.php?id=<?php echo $res['id']; ?>" data-toggle="tooltip" data-placement="top"
              title="Update!"><span>update</span> </a></td>
          <td><a href="delete.php?id=<?php echo $res['id']; ?>" data-toggle="tooltip" data-placement="top"
              title="Delete!"><span>Delete</span> </a></td>



        </tr>
        <?php
        $sn++;

      }


      ?>
    </tbody>

  </table>

</body>

</html>