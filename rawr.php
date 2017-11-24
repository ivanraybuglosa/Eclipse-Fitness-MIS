<script type='text/javascript'>
    //Your fake progress function that delays your submit
    function fakeProgress(){
      //Monitors your timer / percentage
      var timer = 0;

      //Sets an interval for your countdown
      setInterval(function() {
        //After 100% is reached - submit the form
        if(timer >= 100) { $("#remote-control-form").submit(); return; }
        timer = timer + 1;
        $('#countdown-div').val(timer + "% Done"); }, 100);
    }
  </script>
<body>
  <form id='remote-control-form'>
  <input id='countdown-div' readonly='readonly' />
  <input type='button' value='Submit' onclick='fakeProgress();' />
  <!-- Hidden submit element so that it can be submitted programatically -->
  <input type='submit' style='display: none;' />
  </form>
</body>