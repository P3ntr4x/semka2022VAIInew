<?php
include_once "header.php";
?>
  <div class="turnaje">
    <div id="calendar"></div>
  </div>
</div>
</body>
<footer></footer>
<script src="../JS/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js"></script>
<script src="../JS/evo-calendar.min.js"></script>
<script>
  $(document).ready(function () {
    $("#calendar").evoCalendar( {
      calendarEvents: [
        {
          id: '1',
          name: "International 2022",
          date: "September/15/2022",
          description: "The International 2022 is the concluding tournament of the Dota Pro Circuit and the eleventh annual edition of The International which returns to Asia for the second time. The invite format is similar to the one used for the preceding International, whereby a point system based on official sponsored Regional Leagues and Majors will be used to determine the teams invited to The International.",
          type: "turnaj",
          everyYear: true,
          color: "red"
        },
        {
          id: '2',
          name: "Major Kvalifikácia",
          date: "November/25/2022",
          description: " Major was a professional Dota 2 esport tournament that was held in April 2017 at the National Palace of Arts in Kyiv, Ukraine.",
          type: "kvalifikacia",
          everyYear: true,
          color: "green"
        },
        {
          id: '3',
          name: "Major Fotenie",
          date: "November/25/2022",
          description: "Photoshot for Majo Turnament",
          type: "foto",
          everyYear: true,
          color: "#green"
        },
        {
          id: '4',
          name: "Kiev Major",
          date: "November/29/2022",
          description: "Start of the Kiev Major Turnament",
          type: "turnaj",
          everyYear: true,
          color: "blue"
        },

      ]
    })
  })
</script>
</html>