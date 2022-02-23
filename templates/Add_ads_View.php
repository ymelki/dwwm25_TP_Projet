<?php include "header.php" ?>
    <h1>Add ads</h1>

    <form method="POST" enctype="multipart/form-data" action="/save_ad">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Title</label>
            <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Message</label>
            <input type="text" name="msg" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="input-group mb-3">
            <input type="file" name="img" class="form-control" id="inputGroupFile02">
            <label class="input-group-text" for="inputGroupFile02">Upload</label>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
</form>
<?php include "footer.php" ?>