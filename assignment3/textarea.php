<h1>Marks Distribution</h1>
<link rel="stylesheet" href="../style/formstyle.css">
<?php
if (isset($_SESSION['text-area'])) {
  $sub_marks = explode("\n", $_SESSION["text-area"]);
  $marks = array();
  foreach ($sub_marks as $value) {
    $temp = explode("|", $value);
    if ($temp[0] != "") {
      if ($temp[1] > 100) {
        $temp[1] = "Incorrect input";
      }
      $marks[$temp[0]] = $temp[1];
    }
  }
}
?>
<table>
  <tr>
    <th>Subject</th>
    <th>Marks</th>
  </tr>
  <?php foreach ($marks as $subject => $number) { ?>
    <tr>
      <td><?php echo $subject; ?></td>
      <td><?php echo $number; ?></td>
    </tr>
  <?php } ?>
</table>