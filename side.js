$(document).ready(function(){
    inactivityTime();
    jam();
      $.getJSON('home.json', function(data) {
       $.each(data.records, function(key, value){
            document.getElementById("selamat-datang").innerHTML = JSON.parse(JSON.stringify(value.nama));
            $("#card-gambar").attr("src",'gambar/'+value.gambar);
      });   
      });
     $.ajaxSetup({ cache: false });
     $('#search').keyup(function(){
      $('#result').html('');
      $('#state').val('');
      var searchField = $(this).val();
      if(searchField === '')  {
            $('#result').html('');
            return;
        }
      var searchField = $('#search').val();
      var expression = new RegExp(searchField, "i");
      $.getJSON('ruangan.json', function(data) {
       $.each(data.records, function(key, value){
        if (value.namaRuangan.search(expression) != -1)
        {
         $('#result').append('<li class="list-group-item link-class"><img src="gambar/'+value.gambar+'" height="40" width="40" class="img-thumbnail" /> '+value.namaRuangan+' | <span class="text-muted">'+value.lantai+'</span></li>');
        }
       });   
      });
     });
     
     $('#result').on('click', 'li', function() {
      var click_text = $(this).text().split('|');
      var searchData = $.trim(click_text[0]);
      $('#search').val($.trim(click_text[0]));
      $("#result").html('');
      $('#bookId').val(searchData);
      $('#exampleModal').modal('show'); 
      $('.modal-title').text(searchData);
      document.getElementById('ruangan-txt').textContent = searchData;
     });

     $(document).on("click", ".daftarModal", function () {
         var myBookId = $(this).data('id');
         $('.modal-title').text(myBookId);
          document.getElementById('daftarModal-txt').textContent = myBookId;
          $('#bookIds').val(myBookId);
    });

});

$('.modal').on('hide.bs.modal', function() {
  var memory = $(this).html();
  $(this).html(memory);
});

let inactivityTime = function() {
    let time;
    window.onload = resetTimer;
    document.onmousemove = resetTimer;
    document.onkeypress = resetTimer;
    function logout() {
      window.location = "home.php";
    }
    function resetTimer() {
      clearTimeout(time);
      time = setTimeout(logout, 180000)
    }
  };

function getVidUrl(item){
    var fileName = document.getElementById('bookId').value;
    videoPlay(fileName,item);
}

function getVidUrl2(item){
    var fileName = document.getElementById('bookIds').value;
    videoPlay(fileName,item);
    //$('#daftarModal').modal('hide');
}

function videoPlay(fileName,item) {
  $.getJSON('ruangan.json', function(data) {
   $.each(data.records, function(key, value){
     if (value.namaRuangan == fileName){
      $('#playModal').modal('show'); 
      document.getElementById('modalin').textContent = value.namaRuangan;
      $('#source').attr('src', value.video[item]);
     }
   });   
  });    
}
function jam() {
    var e = document.getElementById('jam'),
    d = new Date(), h, m, s;
    h = d.getHours();
    m = set(d.getMinutes());
    s = set(d.getSeconds());

    e.innerHTML = h +':'+ m +':'+ s;

    setTimeout('jam()', 1000);
}

function set(e) {
    e = e < 10 ? '0'+ e : e;
    return e;
}
