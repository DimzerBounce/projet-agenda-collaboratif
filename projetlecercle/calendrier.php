<!Doctype html>
<html>
<head>
    <meta charset="UTF-8">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="/css/calendar.css">
</head>
<body>

<nav class="navbar navbar-dark bg-primary mb-3">
    <a href="/index.php" class="navbar-brand">Mon calendrier</a>
</nav>

<?php
include("Date/Month.php");
$month = new App\Date\Month($_GET['month'] ?? null, $_GET['year'] ?? null);
$start = $month->getStartingDay()->modify('last monday');
?>

<div class="d-flex flex-row align-items-center justify-content-between mx-sm-3">
  <h1><?= $month->toString(); ?></h1>
  <div>
    <a href="calendrier.php?month=<?= $month->previousMonth()->month; ?>&year=<?= $month->previousMonth()->year; ?>" class="btn btn-primary">&lt;</a>
    <a href="calendrier.php?month=<?= $month->nextMonth()->month; ?>&year=<?= $month->nextMonth()->year; ?>" class="btn btn-primary">&gt;</a>
  </div>
</div>


<table class="calendar__table calendar__table--<?= $month->getWeeks(); ?>weeks">
  <?php for ($i = 0; $i < $month->getWeeks(); $i++): ?>
  <tr>
    <?php
    foreach($month->days as $k => $day):
        $date = (clone $start)->modify("+" . ($k + $i * 7) . " days")
        ?>
    <td class="<?= $month->withinMonth($date) ? '' : 'calendar__othermonth'; ?>">
      <?php if ($i === 0): ?>
        <div class="calendar__weekday"><?= $day; ?></div>
      <?php endif; ?>
      <div class="calendar__day"><?= $date->format('d'); ?></div>
    </td>
    <?php endforeach; ?>
  </tr>
  <?php endfor; ?>
</table>

</body>
</html>
