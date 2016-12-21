<!DOCTYPE html>
<html lang="en">
<head>

  </style>
  <title>Comment form </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/bootstrap.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

</head>
<body>
<div class="container">

  <form enctype="multipart/form-data" action="insert.php" method="post" id="comment-form" class="forms">

  <div class="form-group">
      <label for="InputEmail">Email address</label>

          <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>


    <div class="form-group">
      <label for="ImputName">Name</label>

        <input type="name" class="form-control" name="name" placeholder="Enter your name">
    </div>

    <div class="form-group">
      <label for="ImputPhoneNumber">Phone number</label>
        <input type="phone" class="form-control" name="phone" placeholder="Enter your phone number">
    </div>

    <div class="form-group">
      <label for="Textarea">Leave your comment here:</label>
        <textarea class="form-control" name="comment" rows="3"></textarea>
    </div>

    <div class="form-group">
      <label  for="InputFile">File input</label>
      <input type="file" class="form-control-file" name="file_upload" aria-describedby="fileHelp" multiple />
    </div>

    <div class="form-check">
      <label class="form-check-label">
        <input type="checkbox" name="notify" class="form-check-input" value="Yes">
        Send comment to email
      </label>
    </div>

    <button id="submit" type="submit" class="btn btn-primary">Submit</button>
</div>

<!-- Load Comments -->

<div class="container" >
  <div class="well">

    <?php foreach ($data as $item) : ?>
      <div class="panel panel-default">
      <div class="panel-heading">
        <div class="row">
  <div class="col-xs-9">
    <strong><?=$item->NAME?> (<?=$item->EMAIL?>)</strong> <span class="text-muted">commented <?=$item->DATE?></span>
  </div>
  <div class="col-xs float-xs-right">
    entry ID: <?=$item->ID?>
  </div>
</div>

      </div>
      <div class="panel-body">
      <?=$item->COMMENT; ?>
      </div>
      </div>
      <?php endforeach; ?>

    </div>

</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/js/bootstrapValidator.js"></script>

<script src="js/temp_script.js"></script>

  </form>
</body>
</html>
