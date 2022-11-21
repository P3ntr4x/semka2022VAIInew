<?php
include_once "header.php";
?>
  <div class="rebricek">
    <table>
      <thead>
        <tr>
          <th>Meno</th>
          <th>Nickname</th>
          <th>Tim</th>
          <th onclick="sortColumn('Wins')">Wins</th>
          <th onclick="sortColumn('Losses')">Losses</th>
          <th onclick="sortColumn('ELO')">ELO</th>
        </tr>
      </thead>
      <tbody id="tableData"></tbody>
    </table>
  </div>
</div>
</body>
<footer></footer>
<script src="../JS/main.js"></script>
</html>