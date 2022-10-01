<?= $this->extend('layout/master')?>

<?= $this->section('head')?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <link rel="stylesheet" href="<?php echo 'css/appointment.css';?>">
        <link rel="stylesheet" href="<?php echo 'css/bootstrap.min.css';?>">
        <title>Appointments</title>

    </head>

<?= $this->endSection('head')?>

<?= $this->section('content')?>
    <div class="space"></div>
    <div id="main">
      <a href="selectAppointment"><button class="btn btn-primary">view appointments</button></a>
      <a href="appointment.php#nappointment" ><button class="btn btn-primary">new appointment</button></a>
      <div class="space"></div>

    <table class="table">
      <thead>
        <tr>
          <th scope="col">Appointment ID</th>
          <th scope="col">Date</th>
          <th scope="col">expects to</th>
          <th scope="col">#</th>
        </tr>
      </thead>
      <tbody>
        <?php
          if(isset($appts)){
            foreach($appts as $row){?>
        <tr>
          <th><?php echo $row['id']?></th>
          <td><?php echo $row['date']?></td>
          <td><?php echo $row['expectsTo']?></td>
          <td>
              <button class="edit">edit</button>
              <button class="drop ">drop</button>
          </td>
        </tr>
        <?php }}?>
      </tbody>
</table>
<?= $this->endSection()?>