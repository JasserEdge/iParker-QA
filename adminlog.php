<html>
    <head>
       <?php include 'head.php' ?>
    </head>
    <body>
        <?php include 'nav.php'?>
        <h1 style="text-align: center;">iParker Managemanet Log</h1>
        <input type="text" class="search" id="myInput" onkeyup="myFunction()" placeholder="Search...">
  <div style="
    width: 70%;
    margin-left: 15%;
    margin-right: 15%;">
  <table class="table" id="data">
    <thead >
      <th data-field="id">ID</th>
      <th data-field="name">License Plate</th>
      <th data-field="salary">Time-in</th>
      <th data-field="country">Time-out</th>
      <th data-field="city">Date</th>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>sda124</td>
        <td>12:08</td>
        <td>1:02</td>
        <td>4/20/2020</td>
      </tr>
      <tr>
        <td>2</td>
        <td>hdf457</td>
        <td>8:09</td>
        <td>10:29</td>
        <td>4/20/2020</td>
      </tr>
      <tr>
        <td>3</td>
        <td>skj920</td>
        <td>5:39</td>
        <td>7:09</td>
        <td>4/21/2020</td>
      </tr>
      <tr>
        <td>4</td>
        <td>aoe094</td>
        <td>9:09</td>
        <td>11:09</td>
        <td>4/23/2020</td>
      </tr>
      <tr>
        <td>5</td>
        <td>osi443</td>
        <td>12:09</td>
        <td>2:30</td>
        <td>4/23/2020</td>
      </tr>
      <tr>
        <td>6</td>
        <td>kjf093</td>
        <td>4:02</td>
        <td>6:93</td>
        <td>4/24/2020</td>
      </tr>
      <tr>
        <td>7</td>
        <td>isw281</td>
        <td>7:02</td>
        <td>9:30</td>
        <td>4/26/2020</td>
      </tr>
      <tr>
        <td>8</td>
        <td>idi923</td>
        <td>8:23</td>
        <td>10:34</td>
        <td>4/28/2020</td>
      </tr>
      <tr>
        <td>9</td>
        <td>sud203</td>
        <td>12:43</td>
        <td>2:20</td>
        <td>4/28/2020</td>
      </tr>
      <tr>
        <td>10</td>
        <td>ous937</td>
        <td>12:03</td>
        <td>1:30</td>
        <td>4/29/2020</td>
      </tr>
      <tr>
        <td>11</td>
        <td>owm390</td>
        <td>12:94</td>
        <td>3:09</td>
        <td>5/01/2020</td>
      </tr>
      <tr>
        <td>12</td>
        <td>mci982</td>
        <td>11:26</td>
        <td>12:09</td>
        <td>5/03/2020</td>
      </tr>
      <tr>
        <td>13</td>
        <td>gsr092</td>
        <td>5:34</td>
        <td>7:30</td>
        <td>5/04/2020</td>
      </tr>
      <tr>
        <td>14</td>
        <td>dfh467</td>
        <td>3:38</td>
        <td>5:32</td>
        <td>5/06/2020</td>
      </tr>
      <tr>
        <td>15</td>
        <td>aeh246</td>
        <td>4:39</td>
        <td>7:30</td>
        <td>5/07/2020</td>
      </tr>
      <tr>
        <td>16</td>
        <td>ido394</td>
        <td>4:39</td>
        <td>6:49</td>
        <td>5/09/2020</td>
      </tr>
      <tr>
        <td>17</td>
        <td>oid974</td>
        <td>5:43</td>
        <td>7:39</td>
        <td>5/09/2020</td>
      </tr>
      <tr>
        <td>18</td>
        <td>asd983</td>
        <td>6:39</td>
        <td>8:23</td>
        <td>5/10/2020</td>
      </tr>
      <tr>
        <td>19</td>
        <td>zdp601</td>
        <td>10:00</td>
        <td>9:00</td>
        <td>5/16/2020</td>
      </tr>
    </tbody>
    </table>
    </div>
    <?php include 'scripts.php' ?>
    <!-- <script>
    $(document).ready(function(){
    $('#data').after('<div id="nav"></div>');
    var rowsShown = 8;
    var rowsTotal = $('#data tbody tr').length;
    var numPages = rowsTotal/rowsShown;
    for(i = 0;i < numPages;i++) {
        var pageNum = i + 1;
        $('#nav').append('<a href="#" rel="'+i+'">'+pageNum+'</a> ');
    }
    $('#data tbody tr').hide();
    $('#data tbody tr').slice(0, rowsShown).show();
    $('#nav a:first').addClass('active');
    $('#nav a').bind('click', function(){

        $('#nav a').removeClass('active');
        $(this).addClass('active');
        var currPage = $(this).attr('rel');
        var startItem = currPage * rowsShown;
        var endItem = startItem + rowsShown;
        $('#data tbody tr').css('opacity','0.0').hide().slice(startItem, endItem).
        css('display','table-row').animate({opacity:1}, 300);
    });
});

// search

    </script> -->
    <?php include 'searchScript.php'?>
    </body>
</html>