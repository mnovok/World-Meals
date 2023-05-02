<!doctype html>
<html>
<head>
   <title>World Meals</title>
   <!-- Meta -->
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
   <meta charset="utf-8">
   <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
   <input type='text' id='search' name='search' placeholder='Enter meal 1-7'>
   <input type='button' value='Search' id='but_search'>
   <br/>
   <input type='button' value='Fetch all meals' id='but_fetchall'>
 
   <!-- Table -->
   <table border='1' id='empTable' style='border-collapse: collapse;'>
     <thead>
       <tr>
         <th>Title</th>
         <th>Description</th>
         <th>Category</th>
       </tr>
     </thead>
     <tbody></tbody>
   </table>
 
   <!-- Script CDN -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <!-- Script Local -->
   <!-- <script src="{{asset('js/jquery-3.6.0.min.js')}}"></script> -->
 
   <script type='text/javascript'>
   var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
   $(document).ready(function(){
 
      // Fetch all records
      $('#but_fetchall').click(function(){
 
         // AJAX GET request
         $.ajax({
           url: 'getMeals',
           type: 'get',
           dataType: 'json',
           success: function(response){
 
              createRows(response);
 
           }
         });
      });
 
      // Search by userid
      $('#but_search').click(function(){
         var userid = Number($('#search').val().trim());
 
         if(userid > 0){
 
           // AJAX POST request
           $.ajax({
              url: 'getMealsByCategory',
              type: 'post',
              data: {_token: CSRF_TOKEN, userid: userid},
              dataType: 'json',
              success: function(response){
 
                 createRows(response);
 
              }
           });
         }
 
      });
 
   });
 
   // Create table rows
   function createRows(response){
      var len = 0;
      $('#empTable tbody').empty(); // Empty <tbody>
      if(response['data'] != null){
         len = response['data'].length;
      }
 
      if(len > 0){
        for(var i=0; i<len; i++){
           var id = response['data'][i].id;
           var title = response['data'][i].title;
           var description = response['data'][i].description;
           var category = response['data'][i].category;
 
           var tr_str = "<tr>" +
             "<td align='center'>" + (i+1) + "</td>" +
             "<td align='center'>" + title + "</td>" +
             "<td align='center'>" + description + "</td>" +
             "<td align='center'>" + category + "</td>" +
           "</tr>";
 
           $("#empTable tbody").append(tr_str);
        }
      }else{
         var tr_str = "<tr>" +
           "<td align='center' colspan='4'>No record found.</td>" +
         "</tr>";
 
         $("#empTable tbody").append(tr_str);
      }
   } 
   </script>
</body>
</html>