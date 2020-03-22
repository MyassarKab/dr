<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <style media="screen">
    .hedar-h{
      text-align: center;
      background: #70BC4F;
      color: #fff;
      padding: 10px;
    }
    .contact-body{
      width: 90%;
      margin-right: 15px;
      margin-left: 15px;
    }
    table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
    </style>

    <div class="hedar-h">
        <h4> Appointment Message</h4>
    </div>


    <div class="contact-body">
      <table>
      <tr>
        <th> Title </th>
        <th> Details </th>

      </tr>
      <tr>
        <td>Name</td>
        <td> {{ $appointment->name }}</td>

      </tr>
      <tr>
        <td>Email</td>
        <td>  {{ $appointment->email }}</td>

      </tr>
      <tr>
        <td>Phone</td>
        <td>{{ $appointment->phone }}</td>

      </tr>
      <tr>
        <td>Date</td>
        <td>{{ $appointment->date }}</td>

      </tr>
      <tr>
        <td>Clinic</td>
        <td> {{ $appointment->clinic }}</td>

      </tr>
    </table>


    </div>





  </body>
</html>
