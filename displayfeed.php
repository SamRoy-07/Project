
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data</title>
  <style>
  

    .container {
      max-width: 800px;
      margin: 0 auto;
      margin-top: 5%;
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
      overflow: hidden;
    }

    table {
      width: 100%;
      border-collapse: collapse;
    }

    th,
    td {
      padding: 15px;
      text-align: left;
      vertical-align: top;
    }

    th {
      background-color: #333;
      color: #fff;
      font-weight: bold;
      border-bottom: 2px solid #fff;
    }

    tr:nth-child(even) {
      background-color: #f9f9f9;
    }

    tr:hover {
      background-color: #e0e0e0;
    }

    img {
      max-width: 100%;
      height: auto;
      border-radius: 8px;
      display: block;
      margin: 30px auto 20px; /* Add space below each image */
    }

    .post-description {
      padding: 15px;
      font-size: 16px;
      line-height: 1.6;
      border-bottom: 1px solid #ccc;
    }

    .post-description h3 {
      color: #333;
      font-size: 24px;
      margin: 0 0 15px;
    }

    .post-description p {
      margin: 0 0 10px;
    }

    td.image-container {
      margin-bottom: 20px; /* Add bottom margin to create gap */
    }

    td:hover {
      cursor: pointer;
    }

    td:hover img {
      transform: scale(1.05);
      transition: transform 0.2s ease-in-out;
    }
  </style>
</head>

<body>

  <div class="container">

    <table>
      <thead>
        <tr>
          <th>Post</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $con = mysqli_connect('localhost', 'root', '') or die('not connected');
        mysqli_select_db($con, 'project') or die('not selected');
        $userid = $_SESSION['userid'];
        
        $rows = mysqli_query($con, "SELECT * FROM post WHERE userid='$userid' ORDER BY time DESC");
        foreach ($rows as $row): ?>
          <tr>
            <td class="image-container"><img src="postimage/img/<?php echo $row["image"]; ?>" alt="<?php echo $row["image"]; ?>"></td>
          </tr>
          <tr>
            <td class="post-description">
              <h3>Description</h3>
              <p><?php echo $row["Description"]; ?></p>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>

</body>

</html>
