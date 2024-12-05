<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Memos</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
  <?php
include_once 'data.php';
?>
    <h1>
      <h4>Your Memos</h4>
    </h1>
    <form action="inputData.php" method="post">
      <div class="memo-container">
        <form>
          <div class="item-form">
            <div class="form-input">
            <label for="title"><h3>Title :</h3></label>
            <input type="text" id="title" name="title" /><br />
          </div>
          <div class="form-input">
            <label for="note"><h3>Note :</h3></label>
            <textarea id="text" name="note"></textarea><br /><br />
          </div>
          <input class="add" type="submit" value="add" />
        </div>
      </form>
    </div>
    <div class="notes-list">
      <span class="no-item" id="no-item">No Item...</span>
    </div>
    <?php
     $sql = "SELECT * FROM memo;";
     $result = mysqli_query($conn, $sql);
     $resultCheck = mysqli_num_rows($result);

     if ($resultCheck > 0) {
      while ($row = mysqli_fetch_assoc($result)){
        $data[] = $row;
      }
      $json = json_encode($data);
     }
    ?>
  </form>
    <!-- <script src="main.js"></script> -->
    <script>
    const notesList = document.querySelector(".notes-list");

    function dumbass(tit, not) {
      const title = tit;
      const note = not;

      if (!title || !note) {
        alert("please enter both title and note");
        return;
      }
      if (document.getElementById("no-item")) {
        document.getElementById("no-item").remove();
      }

      const date = new Date();
      const dateSering = `${
        date.getMonth() + 1
      }/${date.getDate()}/${date.getFullYear()} ${date.getHours()}:${date.getMinutes()}`;
      console.log(dateSering);

      const newNote = document.createElement("div");
      newNote.classList.add("note");
      newNote.innerHTML = `<span class="date">${dateSering}</span>
      <h2>${title}</h2>
      <p>${note}</p>
      <button onclick="deleteNote(event)">Delete</button>`;

      notesList.insertBefore(newNote, notesList.firstChild);
    }

      const jsonData = JSON.parse('<?php echo $json ?>')
      for (let index = 0; index < jsonData.length; index++) {
        const element = jsonData[index];
        dumbass(element.title,element.note) 
      }
    </script>
  </body>
</html>