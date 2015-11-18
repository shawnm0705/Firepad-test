<?php
  session_start();
?>
<!doctype html>
<!-- See http://www.firepad.io/docs/ for detailed embedding docs. -->
<html>

<head>
  <meta charset="utf-8" />
  <!-- Firebase -->
  <script src="https://cdn.firebase.com/js/client/2.2.4/firebase.js"></script>

  <!-- CodeMirror -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.2.0/codemirror.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.2.0/codemirror.css" />

  <!-- Firepad -->
  <link rel="stylesheet" href="https://cdn.firebase.com/libs/firepad/1.2.0/firepad.css" />
  <script src="https://cdn.firebase.com/libs/firepad/1.2.0/firepad.min.js"></script>

  <!-- Include example userlist script / CSS.
       Can be downloaded from: https://github.com/firebase/firepad/tree/master/examples/ -->
  <script src="firepad-userlist.js"></script>
  <link rel="stylesheet" href="firepad-userlist.css" />

  <style>
    html { height: 100%; }
    body { margin: 0; height: 100%; }
    /* Height / width / positioning can be customized for your use case.
       For demo purposes, we make the user list 175px and firepad fill the rest of the page. */
    #userlist {
      position: absolute; left: 0; top: 0; bottom: 0; height: auto;
      width: 175px;
    }
    #firepad {
      position: absolute; left: 175px; top: 0; bottom: 0; right: 0; height: auto;
    }
  </style>
</head>

<body>
    <div id="userlist"></div>
    <div id="firepad"></div>

  <script>
    function init() {
      //// Initialize Firebase.
      //var firepadRef = getExampleRef();
      // TODO: Replace above line with:
      //++++++++++ Initial my firebase ++++++++++
      var firebase = 'https://torrid-fire-1022.firebaseio.com/firepad/' + <?php echo $_GET["firepad_id"];?>;
      var firepadRef = new Firebase(firebase);
      //----------

      //// Create CodeMirror (with lineWrapping on).
      var codeMirror = CodeMirror(document.getElementById('firepad'), { lineWrapping: true });

      // Create a random ID to use as our user ID (we must give this to firepad and FirepadUserList).
      //++++++++++ Get userId(have to be string) & userName ++++++++++
      var userId = <?php echo $_SESSION["userid"];?>;
      userId = userId.toString();


      //// Create Firepad (with rich text features and our desired userId).
      <?php 
        $userName = $_SESSION['username'];
        echo "var userName = '$userName';\n";
      ?>
      var firepad = Firepad.fromCodeMirror(firepadRef, codeMirror,
          { richTextToolbar: true, richTextShortcuts: true, userId: userId});

      //// Create FirepadUserList (with our desired userId).
      var firepadUserList = FirepadUserList.fromDiv(firepadRef.child('users'),
          document.getElementById('userlist'), userId, userName);
      //----------
      //// Initialize contents.
      firepad.on('ready', function() {
        if (firepad.isHistoryEmpty()) {
          firepad.setText('Welcome to Intersective Firepad!');
        }
      });
    }

    init();
  </script>
</body>
</html>
