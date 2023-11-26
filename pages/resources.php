<!DOCTYPE html>
<html lang="en">

<head>
  <script src="../scripts/header.js"></script>
  <title>CSHub - Student Resources</title>
</head>

<body>

  <body>
    <script src="../scripts/navbar.js"></script>
    <div class="container">
      <div class="resources title">
        <h3>Instructor <span>Resources</span></h3>
        <p>Study resources shared by instructors. These include PDFs, slides, eBooks, and more. Click file to
          view/download.</p>
      </div>
      <section class="resources-container">
        <table id="resources-table">
          <thead>
            <tr>
              <th>Files</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $files = glob('../uploads/*.*');
            foreach($files as $file) {
              echo '<tr><td><a href="'.$file.'">'.basename($file).'</a></td></tr>';
            }
            ?>
          </tbody>
        </table>
        <section class="upload title">
          <h3><span>Upload</span> a resource</h3>
          <p>Click the "Choose a
            file" button above and select the file you want to upload. Then click the "Upload
            Resource" button to upload the file. You can upload PDF, PPT, DOC, and DOCX files.</p>
          <form action="../file-system.php" method="post" enctype="multipart/form-data">
            <label for="fileToUpload" class="custom-file-upload" id="fileLabel">
              Choose a file
            </label>
            <input type="file" name="fileToUpload" id="fileToUpload" onchange="updateLabel()" />
            <input type="submit" value="Upload Resource" name="submit" id="uploadButton" style="display: none;" />
          </form>
        </section>
        <div>
          <?php
          session_start();
          if(isset($_SESSION['message'])) {
            echo '<div id="myModal" class="modal"><div class="modal-content"><a href="resources.php">&larr; Back to Resources</a><br/>'.$_SESSION['message'].'</div></div>';
            unset($_SESSION['message']);
          }
          ?>
        </div>
      </section>
      <section class="title curated-resources">
        <h3>CSHub's <span>Curated</span> Resources</h3>
        <table id="curated-table">
          <thead>
            <tr>
              <th>Title</th>
              <th>Author</th>
              <th>Type</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $resources = [
              ['title' => 'Introduction to Algorithms', 'author' => 'Thomas H. Cormen', 'type' => 'Book'],
              ['title' => 'Clean Code', 'author' => 'Robert C. Martin', 'type' => 'Book'],
              ['title' => 'You Don\'t Know JS', 'author' => 'Kyle Simpson', 'type' => 'Book Series'],
              ['title' => 'The Pragmatic Programmer', 'author' => 'Andrew Hunt and David Thomas', 'type' => 'Book'],
              ['title' => 'A Brief History of Time Complexity', 'author' => 'Dr. James Smith', 'type' => 'Article'],
              ['title' => 'Understanding JavaScript Closures', 'author' => 'Sarah Drasner', 'type' => 'Article'],
              ['title' => 'The Basics of Git and GitHub', 'author' => 'John Doe', 'type' => 'Article'],
              ['title' => 'Python for Data Analysis', 'author' => 'Wes McKinney', 'type' => 'Article'],
              ['title' => 'Deep Learning', 'author' => 'Ian Goodfellow, Yoshua Bengio, and Aaron Courville', 'type' => 'Article'],
              ['title' => 'The Road to React', 'author' => 'Robin Wieruch', 'type' => 'Article'],
              ['title' => 'Eloquent JavaScript', 'author' => 'Marijn Haverbeke', 'type' => 'Article'],
              ['title' => 'You Don\'t Know JS: Up & Going', 'author' => 'Kyle Simpson', 'type' => 'Article'],
              ['title' => 'JavaScript Allongé', 'author' => 'Reginald Braithwaite', 'type' => 'Article'],
              ['title' => 'Speaking JavaScript', 'author' => 'Axel Rauschmayer', 'type' => 'Article'],
              ['title' => 'Algorithms Unlocked', 'author' => 'Thomas H. Cormen', 'type' => 'Book'],
              ['title' => 'JavaScript: The Good Parts', 'author' => 'Douglas Crockford', 'type' => 'Book'],
              ['title' => 'Learning JavaScript Design Patterns', 'author' => 'Addy Osmani', 'type' => 'Book'],
              ['title' => 'A Brief History of Time Complexity', 'author' => 'Dr. James Smith', 'type' => 'Article'],
              ['title' => 'Understanding JavaScript Closures', 'author' => 'Sarah Drasner', 'type' => 'Article'],
              ['title' => 'The Basics of Git and GitHub', 'author' => 'John Doe', 'type' => 'eBook'],
              ['title' => 'Python for Data Analysis', 'author' => 'Wes McKinney', 'type' => 'PDF'],
              ['title' => 'Deep Learning', 'author' => 'Ian Goodfellow, Yoshua Bengio, and Aaron Courville', 'type' => 'eBook'],
              ['title' => 'The Road to React', 'author' => 'Robin Wieruch', 'type' => 'eBook'],
              ['title' => 'Eloquent JavaScript', 'author' => 'Marijn Haverbeke', 'type' => 'eBook'],
              ['title' => 'You Don\'t Know JS: Up & Going', 'author' => 'Kyle Simpson', 'type' => 'eBook'],
              ['title' => 'JavaScript Allongé', 'author' => 'Reginald Braithwaite', 'type' => 'eBook'],
              ['title' => 'Speaking JavaScript', 'author' => 'Axel Rauschmayer', 'type' => 'eBook'],
            ];
            foreach($resources as $resource) {
              echo '<tr><td>'.$resource['title'].'</td><td>'.$resource['author'].'</td><td>'.$resource['type'].'</td></tr>';
            }
            ?>
          </tbody>
        </table>
      </section>
    </div>
    <script src="../scripts/footer.js"></script>
  </body>

</html>
