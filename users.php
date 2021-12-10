<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA compatible" content="IE-edge" />
  <meta name="viewport" content="width=device-width,initial-scale=1.1" />
  <title>register</title>
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <section class="users" id="users">
    <h1 class="heading">List User</h1>
    <div class="content">
      <?php
      function display_data($result)
      {
        $output = '<br><br><table>';
        foreach ($result as $key => $var) {
          $output .= '<tr class = "text_label">';
          foreach ($var as $k => $v) {
            if ($key === 0) {
              $output .= '<td class = "text_label"><strong>' . $k . '</strong>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</td>';
            } else {
              $output .= '<td>' . $v . '</td>';
            }
          }
          $output .= "</tr>";
        }
        $output .= "</table>";
        echo $output;
      }

      include('connection.php');
      $sql = "SELECT username, password FROM users;";
      $result = $connection->query($sql);
      if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
          display_data($result);
        }
      } else {
        echo "0 result";
      }
      echo '</table>';
      $connection->close();
      ?>
    </div>
    </div>
</body>
<!-- muklas dani -->

</html>